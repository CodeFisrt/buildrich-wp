<?php 

	/*
		Template Name:home 
	*/

?>

<?php get_header(); ?>


<section class="s-slider">
    <div class="js-slider-homepage">
        <div class="swiper swiper-initialized swiper-horizontal swiper-pointer-events">
            <div class="swiper-wrapper" id="swiper-wrapper-7ba4df7f21910e310b" aria-live="off">
                <!-- Slide 1 -->
                <div class="swiper-slide swiper-slide-duplicate swiper-slide-next swiper-slide-duplicate-prev" data-swiper-slider-index="1" role="group">
                    <div class="uk-inline">
                        <img src="<?php echo get_template_directory_uri()?>/assets/images/Resources/Slider-1.jpg" alt="image">
                        <div class="uk-overlay-primary uk-position-cover"></div>
                        <div class="uk-overlay uk-position-center-left uk-light uk-width-1-1">
                            <div class="uk-container">
                                <h1>Premium Scaffolding & Construction Equipment</h1>
                                <p class="uk-text-lead">From cutting-edge machinery to reliable scaffolding systems, Buildrich Construction Equipment Pvt Ltd delivers quality solutions for every construction project.</p>
                                <div data-uk-margin>
                                    <a class="uk-button uk-button-danger uk-button-large" href="Contact-Us">
                                        <span>Get a free quote</span>
                                        <span data-uk-icon="arrow-right"></span>
                                    </a>
                                    <a class="uk-button uk-button-light uk-button-large" href="Products">
                                        <span>View Products</span>
                                        <span data-uk-icon="arrow-right"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="swiper-slide swiper-slide-prev swiper-slide-duplicate-next" aria-label="2/2" role="group">
                    <div class="uk-inline">
                        <img src="<?php echo get_template_directory_uri()?>/assets/images/Resources/Slider-2.jpg" alt="image">
                        <div class="uk-overlay-primary uk-position-cover"></div>
                        <div class="uk-overlay uk-position-center-right uk-light">
                            <div class="uk-container uk-text-right">
                                <h1>Reliable Scaffolding & Equipment for Construction Projects</h1>
                                <p class="uk-text-lead">Explore our comprehensive range of construction equipment, designed to meet the demands of modern construction.</p>
                                <div data-uk-margin>
                                    <a class="uk-button uk-button-danger uk-button-large" href="Contact-Us">
                                        <span>Get a free quote</span>
                                        <span data-uk-icon="arrow-right"></span>
                                    </a>
                                    <a class="uk-button uk-button-light uk-button-large" href="Services">
                                        <span>View Services</span>
                                        <span data-uk-icon="arrow-right"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Pagination -->
            <div class="swiper-pagination swiper-pagination-fraction swiper-pagination-horizontal">
                <span class="swiper-pagination-current">1</span>
                "/"
                <span class="swiper-pagination-total">2</span>
            </div>
        </div>
    </div>
</section>




<div class="search-form">
    <div class="uk-container">
        <div class="search-form__box">
            <form id="equipmentForm" class="uk-form-stacked" action="#" method="GET">
                <div class="uk-grid uk-grid-small uk-grid-divider uk-child-width-1-3@l uk-child-width-1-2@s uk-flex-middle" data-uk-grid>
                    <div>
                        <label class="uk-form-label">Select Category</label>
                        <div class="uk-form-controls">
                            <select id="categorySelect" class="js-select">
                                <option value="Construction-Machinery">Construction Machinery</option>
                                <option value="Construction-Equipment">Construction Equipment</option>
                                <option value="Formwork-&-Shuttering">Formwork & Shuttering</option>
                                <option value="Scaffolding-Material">Scaffolding Material</option>
                                <option value="Scaffolding-&-Formwork-Accessories">Scaffolding & Formwork Accessories</option>
                            </select>
                        </div>
                    </div>
                    <div>
                        <label class="uk-form-label">Pickup Location</label>
                        <div class="uk-form-controls">
                            <select class="js-select">
                                <option value="Pune">Pune</option>
                                <option value="Mumbai">Mumbai</option>
                                <option value="Thane">Thane</option>
                                <option value="Sangli">Sangli</option>
                                <option value="Kolhapur">Kolhapur</option>
                            </select>
                        </div>
                    </div>
                    <div>
                        <button id="findEquipmentButton" class="uk-button uk-button-danger uk-button-large" type="button">
                            <span>Find equipment</span>
                            <span data-uk-icon="arrow-right" class="uk-icon">
							<svg width="20"height="20" ViewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
													<polyline fill="none" stroke="#000" points="10 5 15 9.5 10 14"></polyline>
													<line fill="none"stroke="#000" x1="4" y1="9.5" x2="15" y2="9.5"></line>
													</svg>
							</span>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    document.getElementById('findEquipmentButton').addEventListener('click', function() {
        var selectedCategory = document.getElementById('categorySelect').value;
        window.location.href = selectedCategory;
    });
</script>


<!-- About Us -->
<section class="s-features">
    <div class="uk-section-small uk-container">
        <div class="uk-grid uk-child-width-1-2@m uk-flex-middle" data-uk-grid>
            <div>
                <div class="section-title">
                    <small class="color-accent">[12 Years Of Empowering Construction with Precision and Reliability]</small>
                    <h3>Your trusted partner for top-tier construction equipment and innovative solutions.</h3>
                </div>
            </div>
            <div>
                <div class="section-content">
                    <span>At <strong>Buildrich Construction Equipment Private Limited</strong> is a leading manufacturer of premium-quality scaffolding systems and advanced construction machinery. With a steadfast commitment to excellence, innovation, and safety, we have established ourselves as a trusted partner for builders, contractors, and developers across the construction industry. Located in Pune, we combine cutting-edge technology with deep industry expertise to provide solutions that address the evolving challenges of modern construction.</span>
                </div>
            </div>
        </div>
        <div class="feature-items">
            <div data-uk-slider>
                <div class="uk-position-relative" tabindex="-1">
                    <ul class="uk-grid uk-slider-items uk-child-width-1-1 uk-child-width-1-2@s uk-child-width-1-3@l">

                    <?php
                                   if(have_rows('card',6));{
                                     while(have_rows('card',6)){
                                       the_row(); 
                                     
                    ?>
                        <li>
                            <!-- card section -->
                            <div class="feature-item">
                                <div class="feature-item__box">

                                 

                                    <div class="feature-item__icon">
                                        <img src="<?php the_sub_field('card-img',6);?>" alt="image">
                                    </div>
                                    <div class="feature-item__title"><?php the_sub_field('card-title',6);?></div>
                                    <div class="feature-item__text"><?php the_sub_field('card-description',6);?></div>
                                    <div class="feature-item__more">
                                        <a href="Products">
                                            <span data-uk-icon="arrow-right" class="uk-icon">
												<svg width="20"height="20" ViewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
													<polyline fill="none" stroke="#000" points="10 5 15 9.5 10 14"></polyline>
													<line fill="none"stroke="#000" x1="4" y1="9.5" x2="15" y2="9.5"></line>
													</svg>
											</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <?php } } ?>
                       
                    </ul>
                </div>
                <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin"></ul>
            </div>
        </div>
    </div>
</section>

<!-- Products Categories-->
<section class="s-categories">
    <div class="uk-section uk-container uk-container-large">
        <div class="section-title --center">
            <h3>Explore Our Diverse Product Range</h3>
            <span>[Discover high-quality construction machinery, equipment, and accessories tailored to meet all your project needs.]</span>
        </div>
        <div class="section-content">
            <div class="uk-grid uk-grid-medium" data-uk-grid>
                <div class="uk-width-1-2@m">
                    <a class="cat-item uk-width-1-1 uk-inline" href="Scaffolding-Material">
                        <img class="uk-width-1-1" src="<?php echo get_template_directory_uri()?>/assets/images/Services/Scaffolding-Material.jpg" alt="Scaffolding-Material">
                        <div class="uk-overlay uk-position-bottom">
                            <p class="uk-text-center">Scaffolding Material</p>
                        </div>
                    </a>
                </div>
                <div class="uk-width-1-2@m">
                    <a class="cat-item uk-width-1-1 uk-inline" href="Construction-Machinery">
                        <img class="uk-width-1-1" src="<?php echo get_template_directory_uri()?>/assets/images/Services/Construction-Machinery.jpg" alt="Construction-Machinery">
                        <div class="uk-overlay uk-position-bottom">
                            <p class="uk-text-center">Construction Machinery</p>
                        </div>
                    </a>
                </div>
                <!-- small img gallery -->
                <div class="uk-width-1-3@m uk-grid-margin ">
                    <a class="cat-item uk-width-1-1 uk-inline" href="Scaffolding-&-Formwork-Accessories">
                        <img class="uk-width-1-1" src="<?php echo get_template_directory_uri()?>/assets/images/Services/Scaffolding-&-Formwork-Accessories.jpg" alt="Scaffolding-&-Formwork-Accessories">
                        <div class="uk-overlay uk-position-bottom">
                            <p class="uk-text-center">Scaffolding & Formwork Accessories</p>
                        </div>
                    </a>
                </div>
                <div class="uk-width-1-3@m uk-grid-margin ">
                    <a class="cat-item uk-width-1-1 uk-inline" href="Construction-Equipment">
                        <img class="uk-width-1-1" src="<?php echo get_template_directory_uri()?>/assets/images/Services/Construction-Equipment.jpg" alt="Construction-Equipment">
                        <div class="uk-overlay uk-position-bottom">
                            <p class="uk-text-center">Construction Equipment</p>
                        </div>
                    </a>
                </div>
                <div class="uk-width-1-3@m uk-grid-margin ">
                    <a class="cat-item uk-width-1-1 uk-inline" href="Formwork-&-Shuttering">
                        <img class="uk-width-1-1" src="<?php echo get_template_directory_uri()?>/assets/images/Services/Formwork-&-Shuttering.jpg" alt="Formwork-&-Shuttering">
                        <div class="uk-overlay uk-position-bottom">
                            <p class="uk-text-center">Formwork & Shuttering</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Services-->
<section class="s-reasons">
    <div class="s-reasons__inner uk-background-muted">
        <div class="s-reasons__media uk-cover-container">
            <img src="<?php echo get_template_directory_uri()?>/assets/images/Resources/Services.jpg" alt="Our Services" data-uk-cover class="uk-cover">
            <canvas width="960" height="670"></canvas>
        </div>
        <div class="s-reasons__info">
            <div class="section-title">
                <h3>Our Services</h3>
                <span>[Ensuring Optimal Equipment Performance]</span>
            </div>
            <div class="section-content">
                <p>With a full range of maintenance services & flexible rental options, we ensure that your machinery is always ready to meet the demands of your worksite.</p>
                <div class="uk-grid uk-grid-small uk-child-width-1-2@s" data-uk-grid>
                    <div>
                        <div class="reason-item">
                            <img class="reason-item__img" src="<?php echo get_template_directory_uri()?>/assets/images/Resources/Machinery-Services-&-Spares.jpg" alt="Machinery Services & Spares">
                            <div class="reason-item__body service-body">
                                <div class="reason-item__icon">
                                    <img src="<?php echo get_template_directory_uri()?>/assets/images/Icons/ico-reason-1.png" alt="reason">
                                </div>
                                <div class="reason-item__desc">
                                    <a href="Machinery-Services-&-Spares"><h4 class="reason-item__title">Machinery Services & Spares</h4></a>
                                </div>
                            </div>
                            <p class="reason-item__text">Maintain the integrity of your construction machinery with our expert services and high-quality spares. We focus on minimizing downtime and maximizing the lifespan of your equipment.</p>
                        </div>
                    </div>
                    <div>
                        <div class="reason-item">
                            <img class="reason-item__img" src="<?php  echo get_template_directory_uri()?>/assets/images/Resources/Rental-and-Hiring-Services.jpg" alt="Rental and Hiring Services">
                            <div class="reason-item__body">
                                <div class="reason-item__icon">
                                    <img src="<?php echo get_template_directory_uri()?>/assets/images/icons/ico-reason-2.png" alt="reason">
                                </div>
                                <div class="reason-item__desc">
                                    <a href="Rental-Hiring-Services"><h4 class="reason-item__title">Rental and Hiring Services</h4></a>
                                </div>
                            </div>
                            <p class="reason-item__text">Access a wide variety of construction equipment to meet the unique needs of your project. Our rental solutions are flexible, cost-effective, and backed by our commitment to reliability.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<!-- Products -->
<section class="s-equipments">
    <div class="uk-section uk-container uk-container-large">
        <div class="section-title --center">
            <h3>Explore Our Wide Range of Products</h3>
            <span>[Discover top-quality construction machinery, scaffolding, and formwork systems designed to meet the demands of any project.]</span>
        </div>
        <div class="section-content">
            <!--  -->

       <div data-uk-slider="" class="uk-slider uk-slider-container">
                <div class="uk-position-relative" tabindex="-1">
                    <ul class="uk-slider-items uk-grid uk-child-width-1-1 uk-child-width-1-2@s uk-child-width-1-3@l" style="transform: translate3d(0px, 0px, 0px);">
                                                <li tabindex="-1" class="uk-active">
                            <div class="equipment-item">
                                <div class="equipment-item__box">
                                    <div class="equipment-item__media">
                                        <a href="Product/Joint_pin.php">
                                        <img src="<?php echo get_template_directory_uri()?>/assets/images/Products/1.png" alt="reason">
                                        </a>
                                    </div>
                                    <div class="equipment-item__info">
                                        <div class="equipment-item__title">
                                            <a href="Product/Joint_pin.php">Joint pin</a>
                                        </div>
                                        <div class="equipment-item__list">
                                            <ul>
                                            <li><strong>diameter</strong>: 38 mm </li><li><strong>thick</strong>: 3 mm</li><li><strong> length</strong>: 300 mm</li>                                            </ul>
                                        </div>
                                    </div>
                                    <div class="equipment-item__btn">
                                        <a href="Product/Joint_pin.php">
                                            <button class="uk-button uk-button-default uk-button-large uk-width-1-1" type="button">
                                                <span>Book now</span>
                                                <span data-uk-icon="arrow-right" class="uk-icon"><svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><polyline fill="none" stroke="#000" points="10 5 15 9.5 10 14"></polyline><line fill="none" stroke="#000" x1="4" y1="9.5" x2="15" y2="9.5"></line></svg></span>
                                            </button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li tabindex="-1" class="uk-active">
                            <div class="equipment-item">
                                <div class="equipment-item__box">
                                    <div class="equipment-item__media">
                                        <a href="Product/Monkey_Crane.php">
                                            <img src="Product/Images/Monkey_Crane_Cover.png" alt="Monkey Crane">
                                        </a>
                                    </div>
                                    <div class="equipment-item__info">
                                        <div class="equipment-item__title">
                                            <a href="Product/Monkey_Crane.php">Monkey Crane</a>
                                        </div>
                                        <div class="equipment-item__list">
                                            <ul>
                                                <li><strong>Capacity</strong>: 150-200Kg</li><li><strong>Power Source </strong>:  Electric, 2.5 Hp Gear Motor.</li><li><strong>Max Height </strong>:  upto 60mtr.</li><li><strong>Lifting Speed – 10-12m/ min</strong>:   10-12m/ min</li>                                            </ul>
                                        </div>
                                    </div>
                                    <div class="equipment-item__btn">
                                        <a href="Product/Monkey_Crane.php">
                                            <button class="uk-button uk-button-default uk-button-large uk-width-1-1" type="button">
                                                <span>Book now</span>
                                                <span data-uk-icon="arrow-right" class="uk-icon"><svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><polyline fill="none" stroke="#000" points="10 5 15 9.5 10 14"></polyline><line fill="none" stroke="#000" x1="4" y1="9.5" x2="15" y2="9.5"></line></svg></span>
                                            </button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </li>'
                                                <li tabindex="-1">
                            <div class="equipment-item">
                                <div class="equipment-item__box">
                                    <div class="equipment-item__media">
                                        <a href="Product/Tower_Crane_Concrete_Bucket.php">
                                            <img src="Product/Images/Tower_Crane_Concrete_Bucket_Cover.jpg" alt="Tower Crane Concrete Bucket">
                                        </a>
                                    </div>
                                    <div class="equipment-item__info">
                                        <div class="equipment-item__title">
                                            <a href="Product/Tower_Crane_Concrete_Bucket.php">Tower Crane Concrete Bucket</a>
                                        </div>
                                        <div class="equipment-item__list">
                                            <ul>
                                                <li><strong>Concrete Bucket Capacity</strong>:  0.3 To 5 Cu.</li>                                            </ul>
                                        </div>
                                    </div>
                                    <div class="equipment-item__btn">
                                        <a href="Product/Tower_Crane_Concrete_Bucket.php">
                                            <button class="uk-button uk-button-default uk-button-large uk-width-1-1" type="button">
                                                <span>Book now</span>
                                                <span data-uk-icon="arrow-right" class="uk-icon"><svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><polyline fill="none" stroke="#000" points="10 5 15 9.5 10 14"></polyline><line fill="none" stroke="#000" x1="4" y1="9.5" x2="15" y2="9.5"></line></svg></span>
                                            </button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </li>
                                                <li tabindex="-1">
                            <div class="equipment-item">
                                <div class="equipment-item__box">
                                    <div class="equipment-item__media">
                                        <a href="Product/Mini_Mixer_(Tilting_Type)_.php">
                                            <img src="Product/Images/Mini_Mixer_(Tilting_Type)__Cover.jpg" alt="Mini Mixer (Tilting Type) ">
                                        </a>
                                    </div>
                                    <div class="equipment-item__info">
                                        <div class="equipment-item__title">
                                            <a href="Product/Mini_Mixer_(Tilting_Type)_.php">Mini Mixer (Tilting Type) </a>
                                        </div>
                                        <div class="equipment-item__list">
                                            <ul>
                                                <li><strong>Power Source</strong>: Electric.</li><li><strong>Mixer Type</strong>: Tilting Type.</li><li><strong>Output Capacity</strong>: 120 Ltr.</li><li><strong>Motor </strong>:  2 Hp Single Phase.</li>                                            </ul>
                                        </div>
                                    </div>
                                    <div class="equipment-item__btn">
                                        <a href="Product/Mini_Mixer_(Tilting_Type)_.php">
                                            <button class="uk-button uk-button-default uk-button-large uk-width-1-1" type="button">
                                                <span>Book now</span>
                                                <span data-uk-icon="arrow-right" class="uk-icon"><svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><polyline fill="none" stroke="#000" points="10 5 15 9.5 10 14"></polyline><line fill="none" stroke="#000" x1="4" y1="9.5" x2="15" y2="9.5"></line></svg></span>
                                            </button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </li>'
                                                <li tabindex="-1">
                            <div class="equipment-item">
                                <div class="equipment-item__box">
                                    <div class="equipment-item__media">
                                        <a href="Product/Bar_Bending_Machine_Model_B_42_(GW_42A).php">
                                            <img src="Product/Images/Bar_Bending_Machine_Model_B_42_(GW_42A)_Cover.png" alt="Bar Bending Machine Model B 42 (GW 42A)">
                                        </a>
                                    </div>
                                    <div class="equipment-item__info">
                                        <div class="equipment-item__title">
                                            <a href="Product/Bar_Bending_Machine_Model_B_42_(GW_42A).php">Bar Bending Machine Model B 42 (GW 42A)</a>
                                        </div>
                                        <div class="equipment-item__list">
                                            <ul>
                                                <li><strong>Bending Diameter</strong>: TMT Bar 6mm to 32mm.</li><li><strong> Plate Diameter</strong>:  360mm</li><li><strong>Bending Speed</strong>:  10-20 r/min. </li><li><strong>Motor Power</strong>: 3.7 KW / Voltage: 415 V.</li>                                            </ul>
                                        </div>
                                    </div>
                                    <div class="equipment-item__btn">
                                        <a href="Product/Bar_Bending_Machine_Model_B_42_(GW_42A).php">
                                            <button class="uk-button uk-button-default uk-button-large uk-width-1-1" type="button">
                                                <span>Book now</span>
                                                <span data-uk-icon="arrow-right" class="uk-icon"><svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><polyline fill="none" stroke="#000" points="10 5 15 9.5 10 14"></polyline><line fill="none" stroke="#000" x1="4" y1="9.5" x2="15" y2="9.5"></line></svg></span>
                                            </button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </li>'
                                                <li tabindex="-1">
                            <div class="equipment-item">
                                <div class="equipment-item__box">
                                    <div class="equipment-item__media">
                                        <a href="Product/Centering_Plate.php">
                                            <img src="Product/Images/Centering_Plate_Cover.jpg" alt="Centering Plate">
                                        </a>
                                    </div>
                                    <div class="equipment-item__info">
                                        <div class="equipment-item__title">
                                            <a href="Product/Centering_Plate.php">Centering Plate</a>
                                        </div>
                                        <div class="equipment-item__list">
                                            <ul>
                                                <li><strong>Available Size</strong>: Available Size: 600mm X 900mm</li>                                            </ul>
                                        </div>
                                    </div>
                                    <div class="equipment-item__btn">
                                        <a href="Product/Centering_Plate.php">
                                            <button class="uk-button uk-button-default uk-button-large uk-width-1-1" type="button">
                                                <span>Book now</span>
                                                <span data-uk-icon="arrow-right" class="uk-icon"><svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><polyline fill="none" stroke="#000" points="10 5 15 9.5 10 14"></polyline><line fill="none" stroke="#000" x1="4" y1="9.5" x2="15" y2="9.5"></line></svg></span>
                                            </button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </li>'
                                            </ul>
                </div>
                <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin-medium-top"><li uk-slider-item="0" class="uk-active"><a href=""></a></li><li uk-slider-item="1"><a href=""></a></li><li uk-slider-item="2"><a href=""></a></li><li uk-slider-item="3"><a href=""></a></li><li uk-slider-item="4"><a href=""></a></li><li uk-slider-item="5"><a href=""></a></li></ul>
            </div>
          
        </div>
    </div>
</section>

<!-- Clients -->
<section class="s-brands">
    <div class="uk-container">
        <div class="section-title --center">
            <h3>Trusted by Industry Leaders</h3>
            <span>[Proudly serving a diverse portfolio of clients, delivering unmatched quality and reliability in every project.]</span>
        </div>
        <div class="section-content">
            <div data-uk-slider="autoplay: true">
                <div class="uk-position-relative">
                    <div class="uk-slider-container uk-light">
                        <ul class="uk-slider-items uk-grid-small uk-child-width-1-1 uk-child-width-1-3@s uk-child-width-1-4@m uk-text-center">
                            <li>
                                <img class="uk-width-4-5" src="<?php echo get_template_directory_uri()?>/assets/images/Clients/Aadit-Grp-Logo.jpg" alt="Aadit Group Logo">
                            </li>
                            <li>
                                <img class="uk-width-4-5" src="<?php echo get_template_directory_uri()?>/assets/images/Clients/hatchway_logo.jpg" alt="Hatchway Windoor Pvt Ltd">
                            </li>
                            <li>
                                <img class="uk-width-4-5" src="<?php echo get_template_directory_uri()?>/assets/images/Clients/ADP_Engineers.jpg" alt="ADP_Engineers">
                            </li>
                            <li>
                                <img class="uk-width-4-5" src="<?php echo get_template_directory_uri()?>/assets/images/Clients/Godavri_Paints.jpg" alt="Godavri_Paints">
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

<!-- Blogs -->
<section class="s-news">
    <div class="uk-section uk-container">
        <div class="section-title --center">
            <h3>Insights & Industry Trends</h3>
            <span>[Stay updated with the latest insights, innovations, and trends in the construction and equipment industry through our expert blogs.]</span>
        </div>
        <div class="section-content">
            <div class="js-news-slider">
                <div class="swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide down">
                            <div class="new-item-slide new-item">
                                <a class="new-item__box" href="Blog-Details">
                                    <div class="new-item__media">
                                        <img src="<?php echo get_template_directory_uri()?>/assets/images/Resources/1.jpg" alt="news">
                                    </div>
                                    <div class="new-item__body">
                                        <div class="new-item__title">
                                            <div class="new-item__date">March 12, 2024</div>
                                            <h4>The Future of Construction Equipment: Innovations Shaping the Industry</h4>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide down">
                            <div class="new-item-slide new-item">
                                <a class="new-item__box" href="Blog-Details">
                                    <div class="new-item__media">
                                        <img src="<?php echo get_template_directory_uri()?>/assets/images/Resources/2.jpg" alt="news">
                                    </div>
                                    <div class="new-item__body">
                                        <div class="new-item__title">
                                            <div class="new-item__date">March 12, 2024</div>
                                            <h4>Rent vs. Buy: A Comprehensive Guide to Construction Equipment</h4>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide down" >
                            <div class="new-item-slide new-item new">
                                <a class="new-item__box" href="Blog-Details">
                                    <div class="new-item__media">
                                        <img src="<?php echo get_template_directory_uri()?>/assets/images/Resources/3.jpg" alt="news">
                                    </div>
                                    <div class="new-item__body">
                                        <div class="new-item__title">
                                            <div class="new-item__date">March 12, 2024</div>
                                            <h4>Maximizing Efficiency on the Job Site: Tips for Choosing the Right Equipment</h4>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<?php get_footer(); ?>