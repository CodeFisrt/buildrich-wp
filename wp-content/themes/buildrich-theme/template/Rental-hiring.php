<?php


/* Template Name:Rental/Hiring Services

*/
?>

<?php get_header(); ?>
<main class="page-main">

<div class="page-head image-container">
    <div class="page-head__bg" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/Resources/Rental-and-Hiring-Services.jpg')">
        <div class="page-head__title overlay">Rental & Hiring Services</div>
        <div class="page-head__breadcrumb">
            <ul class="uk-breadcrumb">
                <li><a href="https://buildrich.in">Home</a></li>
                <li><span>Services</span></li>
                <li><span>Rental & Hiring Services</span></li>
            </ul>
        </div>
    </div>
</div>
<div class="page-content">
    <div class="uk-section uk-container">
        <div class="equipment-detail row">
            <div class="equipment-detail__gallery col-sm-6">
                <div data-uk-slideshow="min-height: 300; max-height: 430">
                    <div class="uk-position-relative">

                    <img src="<?php echo get_template_directory_uri()?>/assets/images/Resources/Rental-and-Hiring-Services.jpg" alt="image">

                      
                    </div>
                    <div class="uk-margin-top" data-uk-slider>
                        <ul class="uk-thumbnav uk-slider-items uk-grid uk-grid-small uk-child-width-1-2 uk-child-width-1-3@s uk-child-width-1-4@m uk-child-width-1-5@l">
                            <li data-uk-slideshow-item="0"><a href="#"><img src="<?php echo get_template_directory_uri()?>/assets/images/Resources/Rental-and-Hiring-Services.jpg" alt="Rental and Hiring Services"></a></li>
                            <li data-uk-slideshow-item="1"><a href="#"><img src="<?php echo get_template_directory_uri()?>/assets/images/Resources/1.jpg" alt="Rental and Hiring Services"></a></li>
                            <li data-uk-slideshow-item="2"><a href="#"><img src="<?php echo get_template_directory_uri()?>/assets/images/Resources/2.jpg" alt="Rental and Hiring Services"></a></li>
                            <li data-uk-slideshow-item="3"><a href="#"><img src="<?php echo get_template_directory_uri()?>/assets/images/Resources/3.jpg" alt="Rental and Hiring Services"></a></li>
                            <li data-uk-slideshow-item="4"><a href="#"><img src="<?php echo get_template_directory_uri()?>/assets/images/Resources/4.jpg" alt="Rental and Hiring Services"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="equipment-detail__title">Rental & Hiring Services</div>
                <div class="equipment-detail__location">
                    <p>At Buildrich Construction Equipment Pvt Ltd, we understand that every construction project has unique needs, and flexibility is key to staying on schedule and within budget. Our Rental / Hiring Services provide you with cost-effective solutions to access the equipment you need, when you need it, without the long-term commitment of purchasing.</p>
                    <p>At Buildrich, we are committed to providing you with flexible rental solutions that meet your project’s specific requirements. Our equipment is well-maintained and ready for immediate use, ensuring you can work efficiently and cost-effectively.</p>
                    <a class="uk-button uk-button-danger uk-button-large" href="11_about-us.html" data-uk-icon="arrow-right">View All Products</a>
                </div>
            </div>



            <div class="equipment-detail__desc">
                <div class="page-content">
                    <h3>Our Services and Equipment Include:</h3>
                    <div class="uk-section-small uk-container">
                        
                        <div class="uk-grid uk-child-width-1-1 uk-child-width-1-2@s uk-child-width-1-3@l" data-uk-grid>

                        
                    <?php
                                   if(have_rows('card-body',118));{ 
                                     while(have_rows('card-body',118)){
                                       the_row(); 
                                     
                    ?>
                             <div class="feature-item">
                                 <div class="feature-item__box service-item">
                                    <button class="feature-item__title "><?php the_sub_field('title',118);?></button>
                                     <div class="feature-item__text"><?php the_sub_field('card-description',118);?></div>
                                 </div>
                             </div>

                    <?php }  }  ?>
                             
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</main>


<?php get_footer(); ?>