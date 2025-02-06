<?php get_header(); ?>

<style type="text/css">
    .acf-error {
    background-color: #f00;
    color: #fff;
    padding: 10px;
    text-align: center;
    }
</style>

<?php

if (!is_acf_active()) {
    echo '<div class="acf-error">Advanced Custom Fields plugin is not active. Please activate it to use this feature.</div>';

    die();
}



?>

<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/courses.css">

<main id="primary" class="site-main">
    
    <!-- The Modal -->
    <div class="modal fade" id="myModal2">
      <div class="modal-dialog">
        <div class="modal-content">
          <!-- Modal Header -->
          <div class="modal-header">
            <h4 class="modal-title"></h4>
            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
          </div>
          <!-- Modal body -->
          <div class="modal-body">
            <?php echo do_shortcode('[contact-form-7 id="1d4fadd" title="Buy Course"]'); ?>
          </div>
        </div>
      </div>
    </div>

    <?php 
        $banner_content = get_field('banner');
        $background_image = $banner_content['background_image'];
        $heading_1 = $banner_content['heading_1'];
        $heading_2 = $banner_content['heading_2'];
        $description = $banner_content['description'];
        $students_enrolled = $banner_content['students_enrolled'];
        $star_rating_text = $banner_content['star_rating_text'];
        $star_rating = $banner_content['star_rating'];

        if($banner_content) {
    ?>
    <section class="course-banner" style="background-image:url(<?php echo $background_image['url']; ?>);">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="banner-content">
                        <?php if($heading_1) { ?>
                        <h5 class="m-0 theme-sub-title" data-aos="fade-up" data-aos-delay="100">
                            <span class="line"></span> <?php echo $heading_1; ?>
                        </h5>
                        <?php } ?>
                        <?php if($heading_2) { ?>
                        <h1 class="main-title py-2" data-aos="fade-up" data-aos-delay="900">
                            <?php echo $heading_2; ?>
                        </h1>
                        <?php } ?>
                        <p class="para" data-aos="fade-up" data-aos-delay="1500"><?php echo $description; ?></p>
                        <?php if($students_enrolled) { ?>
                        <div class="course-meta d-flex" data-aos="fade-up" data-aos-delay="2000">
                            <h6 class="students-enrolled">
                            <i class="fa-solid fa-user" style="color: #F2B827;"></i>
                            <?php echo $students_enrolled; ?>
                            </h6>
                            <div class="star-rating ms-5">
                                <?php
                                for ($i = 1; $i <= 5; $i++) {
                                $active_class = ($i <= $star_rating) ? 'active' : '';
                                echo '<span class="star ' . $active_class . '">&#9733;</span>';
                                }
                                ?>
                                <span class="rating-text"><?php echo $star_rating_text; ?></span>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php } ?>

    <?php 
    
    ?>
    <section class="course-details">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 order-md-2">
                    <div class="course-pic-wrapper" data-aos="fade-up" data-aos-delay="2000">
                        <?php
                        $course_description = get_field('course_description');
                        $course_image = $course_description['course_image'];
                        $regular_price = $course_description['regular_price'];
                        $sale_price = $course_description['sale_price'];
                        $course_news = $course_description['course_news'];
                        $buy_course_button_title = $course_description['buy_course_button_title'];

                        if($course_description) { ?>
                            <span id="course_title" class="d-none"><?php the_title(); ?></span>
                            <span id="course_fee_value" class="d-none"><?php echo $sale_price; ?></span>

                        <?php if($course_image || $sale_price) { ?>
                        <div class="card card-body">
                            <?php if($course_image) { ?>
                            <figure>
                                <img class="w-100 course-img" src="<?php echo $course_image['url']; ?>" alt="<?php echo get_the_title(); ?>" />
                            </figure>
                            <?php } ?>
                            <?php if($sale_price) { ?>
                            <h4 class="course-price mt-3 mb-3">
                                Price: ₹<?php echo $sale_price; ?> 
                                <span class="sale-price text-decoration-line-through"> 
                                <?php echo $regular_price; ?>
                                </span>
                            </h4>
                            <?php } ?>
                            <?php if($course_news) { ?>
                            <p class="course-limit-offer">
                                <i class="fa-solid fa-calendar me-2"></i>
                                <?php echo $course_news; ?>
                            </p>
                            <?php }
                            if($buy_course_button_title) {
                            ?>
                            <a class="btn-buy-course mt-3" data-bs-toggle="modal" data-bs-target="#myModal2">
                                <?php echo $buy_course_button_title; ?>
                            </a>
                            <?php } ?>
                        </div> 
                        <?php } }

                        $course_details = get_field('course_details');
                        if($course_details) {
                            $heading = $course_details['heading'];
                            $skill_level = $course_details['skill_level'];
                            $instructor = $course_details['instructor'];
                            $language = $course_details['language'];
                            $certificate = $course_details['certificate'];
                            $certificate_status = ($certificate) ? "Yes" : "No";
                        ?>

                        <?php if($heading) { ?>
                        <div class="card course-includes mt-5">
                            <div class="card-header d-flex">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="16" viewBox="0 0 24 16" fill="none">
                                    <path d="M0 16L11.5294 0L23.0588 16H0Z" fill="#F69320" />
                                </svg>
                                <h4 class="section-title ps-3 course-name">
                                    <?php echo $heading; ?>
                                </h4>
                            </div>
                            <div class="card-body">
                                <ul class="tci-list list-unstyled">
                                    <li><i class="fa-solid fa-chart-bar"></i> 
                                        Skill level : <span><?php echo $skill_level; ?></span>
                                    </li>
                                    <li><i class="fa-solid fa-chalkboard-user"></i> 
                                        Instructor : <span><?php echo $instructor; ?></span>
                                    </li>
                                    <li><i class="fa-solid fa-language"></i> 
                                        Language : <span><?php echo $language; ?></span>
                                    </li>
                                    <li><i class="fa-solid fa-medal"></i> 
                                        Certificate : <span><?php echo $certificate_status; ?></span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <?php } } ?>
                    </div>
                </div>

                <div class="col-lg-8 order-md-1">
                    <div class="course-nav-wrapper">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" data-aos="fade-up">
                            <li class="nav-item">
                                <a class="nav-link active" data-bs-toggle="tab" href="#overview">Overview</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#topics">Topics</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#instructor">Instructor</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#feedback">Feedback</a>
                            </li>
                        </ul>
                    </div>
                    <!-- Tab panes -->
                    <div class="tab-content py-5" data-aos="fade-up">

                        <?php
                        $course_name = get_field('course_name');
                        $course_para_description = get_field('course_para_description');
                        $faq_heading = get_field('faq_heading');
                        
                        $faq = get_field('faq');
                        ?>

                        <div class="tab-pane container active" id="overview">
                            <?php if($course_name) { ?>
                            <div class="section-title-wrapper d-flex align-items-baseline mb-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="16" viewBox="0 0 24 16" fill="none">
                                    <path d="M0 16L11.5294 0L23.0588 16H0Z" fill="#F69320" />
                                </svg>
                                <h4 class="section-title ps-3 course-name"><?php echo $course_name; ?></h4>
                            </div>
                            <?php } ?>
                            <p class="para">
                                <?php echo $course_para_description; ?>
                            </p>
                            <?php if($faq_heading) { ?>   
                            <div class="section-title-wrapper d-flex align-items-baseline mt-4 mb-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="16" viewBox="0 0 24 16" fill="none">
                                    <path d="M0 16L11.5294 0L23.0588 16H0Z" fill="#F69320" />
                                </svg>
                                <h4 class="section-title ps-3 course-name"><?php echo $faq_heading; ?></h4>
                            </div>
                            <?php } ?>
                            <?php if($faq) { ?>
                            <div id="accordion_faq" class="mb-5">
                                <?php
                                $i = 1;
                                foreach($faq as $faq_list) {
                                    $question = $faq_list['question'];
                                    $answer = $faq_list['answer'];
                                    ?>
                                    <div class="card">
                                        <div class="card-header">
                                            <a class="btn" data-bs-toggle="collapse" href="#collapse_<?php echo $i; ?>">
                                                <?php echo $i. ". ". $question; ?>
                                            </a>
                                        </div>
                                        <div id="collapse_<?php echo $i; ?>" class="collapse <?php echo ($i == 1) ? 'show' : ''; ?>" data-bs-parent="#accordion_faq">
                                            <div class="card-body"><?php echo $answer; ?></div>
                                        </div>
                                    </div>
                                    <?php
                                    $i++;
                                }
                                ?>
                            </div>

                            <?php
                            }

                            $what_we_learn = get_field('what_we_learn');
                            $heading = $what_we_learn['heading'];
                            $learn_list = $what_we_learn['learn_list'];

                            if($heading) {
                            ?>
                            <div class="section-title-wrapper d-flex align-items-baseline mt-4 mb-3" >
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="16" viewBox="0 0 24 16" fill="none">
                                    <path d="M0 16L11.5294 0L23.0588 16H0Z" fill="#F69320" />
                                </svg>
                                <h4 class="section-title ps-3 course-name"><?php echo $heading ; ?></h4>
                            </div>
                            <?php } ?>
                            <div class="row">
                                <div class="col-lg-12 col-xl-12">
                                    <?php if($learn_list) { ?>
                                    <ul class="what-you-learn list-unstyled">
                                        <?php foreach($learn_list as $learn_list_d) { ?>
                                            <li>
                                                <i class="fa-regular fa-circle-check"></i>
                                                <?php echo $learn_list_d['list_option']; ?>
                                            </li>
                                        <?php } ?>
                                    </ul>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>

                        <?php
                        $topics_title = get_field('topics_title');
                        $topics_sub_title = get_field('topics_sub_title');
                        $topics_list = get_field('topics_list');
                        ?>

                        <div class="tab-pane container fade" id="topics">
                            <?php if($topics_title) { ?>
                            <div class="section-title-wrapper d-flex align-items-baseline mb-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="16" viewBox="0 0 24 16" fill="none">
                                    <path d="M0 16L11.5294 0L23.0588 16H0Z" fill="#F69320" />
                                </svg>
                                <h4 class="section-title ps-3 course-name">
                                    <?php echo $topics_title; ?>
                                    <p><?php echo $topics_sub_title; ?></p>
                                </h4>
                            </div>
                            <?php } ?>
                            <div id="accordion_faq_2" class="mb-5">
                                <?php
                                    $i = 1;

                                    if($topics_list) {

                                    foreach($topics_list as $topics_list_content) {
                                        $title = $topics_list_content['title'];
                                        $topic_list_details = $topics_list_content['topic_list_details'];
                                ?>
                                    <div class="card">
                                        <div class="card-header">
                                            <a class="btn" data-bs-toggle="collapse" href="#faq_collapse_<?php echo $i; ?>">
                                                <?php echo $i. ". ". $title; ?>
                                            </a>
                                        </div>
                                        <div id="faq_collapse_<?php echo $i; ?>" class="collapse <?php echo ($i == 1) ? 'show' : ''; ?>" data-bs-parent="#accordion_faq_2">
                                            <div class="card-body">
                                                <ul class="list-unstyled lessons-list">
                                                    <?php foreach($topic_list_details as $tld) { ?>
                                                        <li><i class="fa-solid fa-check"></i> <?php echo $tld['topic_name']; ?></li>
                                                    <?php } ?>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                <?php

                                $i++;
                                }
                            }
                                ?>
                            </div>
                        </div>

                        <?php
                        $instructor_heading = get_field('heading');
                        $profile_image = get_field('profile_image');
                        
                        $instructor_name = get_field('instructor_name');
                        $instructor_description = get_field('instructor_description');
                        $total_course_count = get_field('total_course_count');
                        $total_students = get_field('total_students');
                        ?>

                        <div class="tab-pane container fade" id="instructor">
                            <?php if($instructor_heading) { ?>
                            <div class="section-title-wrapper d-flex align-items-baseline mb-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="16" viewBox="0 0 24 16" fill="none">
                                    <path d="M0 16L11.5294 0L23.0588 16H0Z" fill="#F69320" />
                                </svg>
                                <h4 class="section-title ps-3 course-name">
                                <?php echo $instructor_heading; ?>
                                </h4>
                            </div>
                            <?php } ?>

                            <?php if($instructor_name) { ?>
                            <div class="card instructor-wrapper card-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <?php if($profile_image) { ?>
                                        <figure>
                                            <img src="<?php echo $profile_image['url']; ?>" alt="<?php echo $profile_image['alt']; ?>">
                                        </figure>
                                        <?php } ?>
                                    </div>
                                    <div class="col-md-8">
                                        <?php if($instructor_name) { ?>
                                        <div class="instructor-desc">
                                            <h4><?php echo $instructor_name; ?></h4>
                                            <p><?php echo $instructor_description; ?></p>
                                            <?php if($total_course_count) { ?>
                                            <ul class="instructor-meta list-unstyled d-flex mb-0">
                                                <li>
                                                    <i class="fa-solid fa-chalkboard-user"></i> 
                                                    <?php echo $total_course_count; ?>
                                                </li>
                                                <li>
                                                    <i class="fa-solid fa-user"></i> 
                                                    <?php echo $total_students; ?>
                                                </li>
                                            </ul>
                                            <?php } ?>
                                        </div>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                        </div>

                        <?php
                        $feedback_heading = get_field('feedback_heading');
                        $fd_profile_image = get_field('fd_profile_image');
                        $fd_instructor_name = get_field('fd_instructor_name');
                        $job_details = get_field('job_details');
                        $date = get_field('date');
                        $fd_instructor_description = get_field('fd_instructor_description');
                        ?>

                        <div class="tab-pane container fade" id="feedback">
                            <?php if($feedback_heading) { ?>
                            <div class="section-title-wrapper d-flex align-items-baseline mb-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="16" viewBox="0 0 24 16" fill="none">
                                    <path d="M0 16L11.5294 0L23.0588 16H0Z" fill="#F69320" />
                                </svg>
                                <h4 class="section-title ps-3 course-name">
                                <?php echo $feedback_heading; ?>
                                </h4>
                            </div>
                            <?php } ?>

                            <?php if($fd_instructor_name) { ?>

                            <div class="card instructor-wrapper card-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <?php if($fd_profile_image) { ?>
                                        <figure>
                                            <img src="<?php echo $fd_profile_image['url']; ?>" alt="<?php echo $fd_profile_image['alt']; ?>">
                                        </figure>
                                        <?php } ?>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="instructor-desc">
                                            <div class="instructor-desc-wrapper d-flex">
                                                <h4 class="mb-0">
                                                <?php echo $fd_instructor_name; ?>
                                                <span class="d-block"><?php echo $job_details; ?></span>
                                                </h4>
                                                <p><?php echo $date; ?></p>
                                            </div>
                                            <p class="mb-0"><?php echo $fd_instructor_description; ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                
                            <?php } ?>

                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>

</main><!-- #main -->

<script type="text/javascript">
    const buyButton = document.querySelector(".btn-buy-course");
    const course_name = document.getElementById("course_name");
    const course_title = document.getElementById("course_title");
    const course_fee_value = document.getElementById("course_fee_value");
    const course_fee = document.getElementById("course_fee");

    // Add a click event listener to the button
    buyButton.addEventListener("click", function () {
        // Change the text of the input element
        course_name.value = course_title.textContent;
        course_fee.value = course_fee_value.textContent;
    });

</script>

<?php get_footer(); ?>