<?php get_header(); ?>

<?php
    $star_rating = get_post_meta(get_the_ID(), 'star_rating', true);
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

    <span id="course_title" class="d-none"><?php the_title(); ?></span>
    <span id="course_fee_value" class="d-none">10,000</span>

    <section class="course-banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="banner-content">
                        <h5 class="m-0 theme-sub-title" data-aos="fade-up" data-aos-delay="100">
                            <span class="line"></span> Welcome to buildrich
                        </h5>
                        <h1 class="main-title py-2" data-aos="fade-up" data-aos-delay="900">
                            Your Gateway to <br>Technical Excellence!
                        </h1>
                        <p class="para" data-aos="fade-up" data-aos-delay="1500">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                        <div class="course-meta d-flex" data-aos="fade-up" data-aos-delay="2000">
                            <h6 class="students-enrolled">
                            <i class="fa-solid fa-user" style="color: #F2B827;"></i>
                            350 Students Enrolled
                            </h6>
                            <div class="star-rating ms-5">
                                <?php
                                for ($i = 1; $i <= 5; $i++) {
                                $active_class = ($i <= $star_rating) ? 'active' : '';
                                echo '<span class="star ' . $active_class . '">&#9733;</span>';
                                }
                                ?>
                                <span class="rating-text">4.9 (189 ratings)</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- https://www.figma.com/file/fATPBKZPBaniYcrTqQT0B4/buildrich-Website-development?node-id=459%3A499&mode=dev -->
    
    <section class="course-details">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 order-md-2">
                    <?php
                    $featured_image_url = get_the_post_thumbnail_url();
                    ?>
                    <div class="course-pic-wrapper" data-aos="fade-up" data-aos-delay="2000">
                        <div class="card card-body">
                            <figure>
                                <img class="w-100 course-img" src="<?php echo $featured_image_url; ?>" alt="<?php echo get_the_title(); ?>" />
                            </figure>
                            <h4 class="course-price mt-3 mb-3">Price: ₹10,000 <span class="sale-price text-decoration-line-through"> 12,000</span></h4>
                            <p class="course-limit-offer">
                                <i class="fa-solid fa-calendar me-2"></i>
                                Only 3 days left at this price...
                            </p>
                            <a class="btn-buy-course mt-3" data-bs-toggle="modal" data-bs-target="#myModal2">Buy This Course</a>
                        </div>
                        <div class="card course-includes mt-5">
                            <div class="card-header d-flex">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="16" viewBox="0 0 24 16" fill="none">
                                    <path d="M0 16L11.5294 0L23.0588 16H0Z" fill="#F69320" />
                                </svg>
                                <h4 class="section-title ps-3 course-name">What You Will Learn?</h4>
                            </div>
                            <div class="card-body">
                                <ul class="tci-list list-unstyled">
                                    <li><i class="fa-solid fa-chart-bar"></i> Skill level : <span>Beginner</span></li>
                                    <li><i class="fa-solid fa-chalkboard-user"></i> Instructor : <span>Gorakh Kharat</span></li>
                                    <li><i class="fa-solid fa-language"></i> Language : <span>Marathi, English</span></li>
                                    <li><i class="fa-solid fa-medal"></i> Certificate : <span>Yes</span></li>
                                </ul>
                            </div>
                        </div>
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
                        <div class="tab-pane container active" id="overview">
                            <div class="section-title-wrapper d-flex align-items-baseline mb-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="16" viewBox="0 0 24 16" fill="none">
                                    <path d="M0 16L11.5294 0L23.0588 16H0Z" fill="#F69320" />
                                </svg>
                                <h4 class="section-title ps-3 course-name">From Beginner To Pro: Spring Boot Microservices Course</h4>
                            </div>
                            <p class="para">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>

                            <div class="section-title-wrapper d-flex align-items-baseline mt-4 mb-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="16" viewBox="0 0 24 16" fill="none">
                                    <path d="M0 16L11.5294 0L23.0588 16H0Z" fill="#F69320" />
                                </svg>
                                <h4 class="section-title ps-3 course-name">Frequently Asked Questions</h4>
                            </div>
                            <div id="accordion_faq" class="mb-5">
                                <div class="card">
                                    <div class="card-header">
                                        <a class="btn" data-bs-toggle="collapse" href="#collapseOne">
                                            1. What is Spring Boot and why is it important in microservices architecture?
                                        </a>
                                    </div>
                                    <div id="collapseOne" class="collapse show" data-bs-parent="#accordion_faq">
                                        <div class="card-body">
                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <a class="collapsed btn" data-bs-toggle="collapse" href="#collapseTwo">
                                            2. What is Spring Boot and why is it important in microservices architecture?
                                        </a>
                                    </div>
                                    <div id="collapseTwo" class="collapse" data-bs-parent="#accordion_faq">
                                        <div class="card-body">
                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <a class="collapsed btn" data-bs-toggle="collapse" href="#collapseThree">
                                            3. What is Spring Boot and why is it important in microservices architecture?
                                        </a>
                                    </div>
                                    <div id="collapseThree" class="collapse" data-bs-parent="#accordion_faq">
                                        <div class="card-body">
                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="section-title-wrapper d-flex align-items-baseline mt-4 mb-3" >
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="16" viewBox="0 0 24 16" fill="none">
                                    <path d="M0 16L11.5294 0L23.0588 16H0Z" fill="#F69320" />
                                </svg>
                                <h4 class="section-title ps-3 course-name">What You Will Learn?</h4>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 col-xl-12">
                                    <ul class="what-you-learn list-unstyled">
                                        <li><i class="fa-regular fa-circle-check"></i> Career Oriented IT Courses</li>
                                        <li><i class="fa-regular fa-circle-check"></i> Career Oriented IT Courses</li>
                                        <li><i class="fa-regular fa-circle-check"></i> Career Oriented IT Courses</li>
                                        <li><i class="fa-regular fa-circle-check"></i> Career Oriented IT Courses</li>
                                        <li><i class="fa-regular fa-circle-check"></i> Career Oriented IT Courses</li>
                                        <li><i class="fa-regular fa-circle-check"></i> Career Oriented IT Courses</li>
                                        <li><i class="fa-regular fa-circle-check"></i> Career Oriented IT Courses</li>
                                        <li><i class="fa-regular fa-circle-check"></i> Career Oriented IT Courses</li>
                                        <li><i class="fa-regular fa-circle-check"></i> Career Oriented IT Courses</li>
                                        <li><i class="fa-regular fa-circle-check"></i> Career Oriented IT Courses</li>
                                        <li><i class="fa-regular fa-circle-check"></i> Career Oriented IT Courses</li>
                                        <li><i class="fa-regular fa-circle-check"></i> Career Oriented IT Courses</li>
                                        <li><i class="fa-regular fa-circle-check"></i> Career Oriented IT Courses</li>
                                        <li><i class="fa-regular fa-circle-check"></i> Career Oriented IT Courses</li>
                                        <li><i class="fa-regular fa-circle-check"></i> Career Oriented IT Courses</li>
                                        <li><i class="fa-regular fa-circle-check"></i> Career Oriented IT Courses</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane container fade" id="topics">
                            <div class="section-title-wrapper d-flex align-items-baseline mb-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="16" viewBox="0 0 24 16" fill="none">
                                    <path d="M0 16L11.5294 0L23.0588 16H0Z" fill="#F69320" />
                                </svg>
                                <h4 class="section-title ps-3 course-name">
                                Topics For Spring Boot Microservices Course
                                <p>Total learning: 14 Lessons</p>
                                </h4>
                            </div>
                            <div id="accordion_faq_2" class="mb-5">
                                <div class="card">
                                    <div class="card-header">
                                        <a class="btn" data-bs-toggle="collapse" href="#faq_collapse_1">
                                            1. Lessons 1
                                        </a>
                                    </div>
                                    <div id="faq_collapse_1" class="collapse show" data-bs-parent="#accordion_faq_2">
                                        <div class="card-body">
                                            <ul class="list-unstyled lessons-list">
                                                <li><i class="fa-solid fa-check"></i> check  Types of software architectures</li>
                                                <li><i class="fa-solid fa-check"></i> check  Types of software architectures</li>
                                                <li><i class="fa-solid fa-check"></i> check  Types of software architectures</li>
                                                <li><i class="fa-solid fa-check"></i> check  Types of software architectures</li>
                                                <li><i class="fa-solid fa-check"></i> check  Types of software architectures</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <a class="btn" data-bs-toggle="collapse" href="#faq_collapse_2">
                                            2. Lessons 2
                                        </a>
                                    </div>
                                    <div id="faq_collapse_2" class="collapse" data-bs-parent="#accordion_faq_2">
                                        <div class="card-body">
                                            <ul class="list-unstyled lessons-list">
                                                <li><i class="fa-solid fa-check"></i> check  Types of software architectures</li>
                                                <li><i class="fa-solid fa-check"></i> check  Types of software architectures</li>
                                                <li><i class="fa-solid fa-check"></i> check  Types of software architectures</li>
                                                <li><i class="fa-solid fa-check"></i> check  Types of software architectures</li>
                                                <li><i class="fa-solid fa-check"></i> check  Types of software architectures</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <a class="btn" data-bs-toggle="collapse" href="#faq_collapse_3">
                                            3. Lessons 3
                                        </a>
                                    </div>
                                    <div id="faq_collapse_3" class="collapse" data-bs-parent="#accordion_faq_2">
                                        <div class="card-body">
                                            <ul class="list-unstyled lessons-list">
                                                <li><i class="fa-solid fa-check"></i> check  Types of software architectures</li>
                                                <li><i class="fa-solid fa-check"></i> check  Types of software architectures</li>
                                                <li><i class="fa-solid fa-check"></i> check  Types of software architectures</li>
                                                <li><i class="fa-solid fa-check"></i> check  Types of software architectures</li>
                                                <li><i class="fa-solid fa-check"></i> check  Types of software architectures</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <a class="btn" data-bs-toggle="collapse" href="#faq_collapse_4">
                                            4. Lessons 4
                                        </a>
                                    </div>
                                    <div id="faq_collapse_4" class="collapse" data-bs-parent="#accordion_faq_2">
                                        <div class="card-body">
                                            <ul class="list-unstyled lessons-list">
                                                <li><i class="fa-solid fa-check"></i> check  Types of software architectures</li>
                                                <li><i class="fa-solid fa-check"></i> check  Types of software architectures</li>
                                                <li><i class="fa-solid fa-check"></i> check  Types of software architectures</li>
                                                <li><i class="fa-solid fa-check"></i> check  Types of software architectures</li>
                                                <li><i class="fa-solid fa-check"></i> check  Types of software architectures</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane container fade" id="instructor">
                            <div class="section-title-wrapper d-flex align-items-baseline mb-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="16" viewBox="0 0 24 16" fill="none">
                                    <path d="M0 16L11.5294 0L23.0588 16H0Z" fill="#F69320" />
                                </svg>
                                <h4 class="section-title ps-3 course-name">
                                About The Instructors
                                </h4>
                            </div>
                            <div class="card instructor-wrapper card-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <figure>
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/instructor.png" alt="Clock">
                                        </figure>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="instructor-desc">
                                            <h4>Gorakh Kharat</h4>
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.</p>
                                            <ul class="instructor-meta list-unstyled d-flex">
                                                <li><i class="fa-solid fa-chalkboard-user"></i> 4 Courses</li>
                                                <li><i class="fa-solid fa-user"></i> 400 Students</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane container fade" id="feedback">
                            <div class="section-title-wrapper d-flex align-items-baseline mb-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="16" viewBox="0 0 24 16" fill="none">
                                    <path d="M0 16L11.5294 0L23.0588 16H0Z" fill="#F69320" />
                                </svg>
                                <h4 class="section-title ps-3 course-name">
                                About The Instructors
                                </h4>
                            </div>
                            <div class="card instructor-wrapper card-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <figure>
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/instructor.png" alt="Clock">
                                        </figure>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="instructor-desc">
                                            <div class="instructor-desc-wrapper d-flex">
                                                <h4 class="mb-0">
                                                Gorakh Kharat
                                                <span class="d-block">Wordpress Developer, Persistent</span>
                                                </h4>
                                                <p>27th June 2023</p>
                                            </div>
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
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