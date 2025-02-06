<?php


/* Template Name:Corporate-Information

*/
?>

<?php get_header(); ?>


<main class="page-main">
    <div class="page-head image-container">
        <div class="page-head__bg" style="background-image: url('<?php echo get_field('bgimage'); ?>')">
            <div class="page-head__title overlay">Clients & Testimonials</div>
            <div class="page-head__breadcrumb">
                <ul class="uk-breadcrumb">
                    <li><a href="https://buildrich.in">Home</a></li>
                    <li><span>Our Clients</span></li>
                </ul>
            </div>
        </div>
    </div>


<section class="s-about">
        <div class="uk-section uk-container bottom-section">
        <div class="section-title --center">
            <h3>Trusted by Industry Leaders</h3>
            <span>[Proudly serving a diverse portfolio of clients, delivering unmatched quality and reliability in every project.]</span>
        </div>
        <div class="section-content">
            <div data-uk-slider="autoplay: true">
                <div class="uk-position-relative">
                    <div class="uk-slider-container uk-light">
                        <ul class="uk-slider-items client-logo uk-grid-small uk-child-width-1-1 uk-child-width-1-3@s uk-child-width-1-4@m uk-text-center">
                            <li>
                                <img class="uk-width-1-1" src="<?php echo get_template_directory_uri()?>/assets/images/Clients/Aadit-Grp-Logo.jpg" alt="Aadit Group Logo">
                            </li>
                            <li>
                                <img class="uk-width-1-1" src="<?php echo get_template_directory_uri()?>/assets/images/Clients/hatchway_logo.jpg" alt="Hatchway Windoor Pvt Ltd">
                            </li>
                            <li>
                                <img class="uk-width-1-1" src="<?php echo get_template_directory_uri()?>/assets/images/Clients/ADP_Engineers.jpg" alt="ADP_Engineers">
                            </li>
                            <li>
                                <img class="uk-width-1-1" src="<?php echo get_template_directory_uri()?>/assets/images/Clients/Godavri_Paints.jpg" alt="Godavri_Paints">
                            </li>
                        </ul>
                    </div>
                    <div class="uk-visible@s">
                        <a class="uk-slidenav uk-position-center-left-out" href="#" data-uk-slider-item="previous" data-uk-icon="arrow-left"></a>
                        <a class="uk-slidenav uk-position-center-right-out" href="#" data-uk-slider-item="next" data-uk-icon="arrow-right"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</main>





<?php get_footer();?>