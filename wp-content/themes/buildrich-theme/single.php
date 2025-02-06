<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package buildrich
 */

get_header();
?>

<main id="primary" class="site-main">
 <div class="container">
 <div class="row py-3">
        <div class="col-md-8 single-post-cust ">
            <?php
            while (have_posts()) :
                the_post();

                // Displaying post content
                ?>
                <div class="row">
                    <div class="col-md-12">
                        <?php
                        get_template_part('template-parts/content', get_post_type());
                        ?>
                    </div>
                </div>
                <?php

                the_post_navigation(
                    array(
                        'prev_text' => '<span class="nav-subtitle">' . esc_html__('Previous:', 'buildrich') . '</span> <span class="nav-title">%title</span>',
                        'next_text' => '<span class="nav-subtitle">' . esc_html__('Next:', 'buildrich') . '</span> <span class="nav-title">%title</span>',
                    )
                );

                // If comments are open or we have at least one comment, load up the comment template.
                if (comments_open() || get_comments_number()) :
                    comments_template();
                endif;

            endwhile; // End of the loop.
            ?>
        </div>
        <div class="col-md-4">
            <?php get_sidebar(); ?>
        </div>
    </div>
 </div>
 <?php
global $post;
$views = get_post_meta($post->ID, 'post_views', true);
$clicks = get_post_meta($post->ID, 'post_clicks', true);
?>

<div class="post-meta">
    <p>Views: <?php echo $views ? $views : 0; ?></p>
    <p>Clicks: <?php echo $clicks ? $clicks : 0; ?></p>
    <button class="increment-click-count" data-post_id="<?php echo $post->ID; ?>">Click Me</button>
</div>
</main><!-- #main -->

<?php get_footer(); ?>
