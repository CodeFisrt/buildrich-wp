<?php


/* Template Name:Corporate-Information

*/
?>

<?php get_header(); ?>
<main class="page-main">
    <div class="page-head image-container">
    <?php
    
    $bgimage=get_field('bgimage');
    $sideimg=get_field('sideimg');
    $sideti=get_field('t1');
    $des1=get_field('desription1');
    $dtitle=get_field('2ndtitle');
    $des2=get_field('desription1');
    $dtitle1=get_field('2ndtitle1');
    $whychoose=get_field('whychoose');
   

  
?>

        <div class="page-head__bg" style="background-image: url('<?php echo get_field('bgimage'); ?>')">
            <div class="page-head__title overlay">Who we are ?</div>
            <div class="page-head__breadcrumb">
                <ul class="uk-breadcrumb">
                    <li><a href="https://buildrich.in">Home</a></li>
                    <li><span>Corporate Information</span></li>
                </ul>
            </div>
        </div>
    </div>

    <section class="s-about">
        <div class="uk-section uk-container bottom-section">
            <div class="uk-grid uk-child-width-1-2@m uk-flex-middle" data-uk-grid>
                <div class="uk-text-center"><img src="<?php  echo $sideimg?>" alt="image"></div>
                <div>
                    <div class="section-title section-title-about">
                        <img src="<?php  echo $sideimg?>"> 
                        <span>[Company Overview]</span>
                        <h3><?php echo $sideti ?></h3>
                    </div>
                    <div class="section-content">
                        <p><?php   echo $des1 ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="s-features">
        <div class="uk-section uk-container top-section">
            <div class="uk-grid uk-child-width-1-2@m uk-flex-middle row" data-uk-grid>
                <div class="col-sm-6">
                    <h3><?php echo $dtitle ?></h3>
                    <p class="section-content"><?php  echo   $des2  ?></p>
                </div>
                <div class="col-sm-6">
                    <h3>Our Vision</h3>
                    <p class="section-content">To become the foremost global leader in the manufacturing of innovative, high-quality scaffolding systems and construction machinery, setting new benchmarks in safety, performance, and sustainability. We envision a future where our products empower construction professionals to build more efficiently, more safely, and more sustainably, transforming the landscapes of cities and infrastructure projects around the world.</p>
                </div>
            </div>
            <div class="feature-items">
                <div data-uk-slider>
                    <div class="uk-position-relative" tabindex="-1">
                        <div class="section-title">
                            <h3>Why choose us ?</h3>
                        </div>
                        <ul class="uk-grid uk-slider-items uk-child-width-1-1 uk-child-width-1-2@s uk-child-width-1-3@l">
                            <li>
                               <div class="feature-item">

                                <?php
         
     if (have_posts()) : 
           while (have_posts()) : the_post();
    
  
          $cardimg=get_field('cardimg');
           $cardtitle=get_field('cardtitle');
            $carddescription=get_field('carddescription');
        
       
               for ($i = 0; $i < 3; $i++) :
           
            ?>  
             
       
             
      
   
                                <?php  if ($i == 0) {?>
                                    <div class="feature-item__box">
                                        <div class="feature-item__icon"><img src="<?php echo  $cardimg ?>" alt="<?php echo  $cardtitle ?>"></div>
                                        <div class="feature-item__title"><?php echo  $cardtitle ?></div>
                                        <div class="feature-item__text"><?php echo   $carddescription ?></div>
                                    </div>
                                </div>
                            </li>
                            <?php      } elseif ($i == 1) {?>
                            <li>
                                <div class="feature-item">
                                    <div class="feature-item__box">
                                        <div class="feature-item__icon"><img src="<?php echo  $cardimg ?>" alt="Comprehensive Solutions"></div>
                                        <div class="feature-item__title"><?php echo  $cardtitle ?></div>
                                        <div class="feature-item__text"><?php echo   $carddescription ?></div>
                                    </div>
                                </div>
                            </li>
                            <?php       } else { ?>
                            <li>
                                <div class="feature-item">
                                    <div class="feature-item__box">
                                        <div class="feature-item__icon"><img src="<?php echo  $cardimg ?>" alt="Customer Support"></div>
                                        <div class="feature-item__title"><?php echo  $cardtitle ?></div>
                                        <div class="feature-item__text"><?php echo   $carddescription ?></div>
                                    </div>
                                </div>
                            </li>
                            <?php          }
        endfor;
    
    endwhile;
endif;?>
                        </ul>
                    </div> 


                            
                    <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin"></ul>
                </div>
            </div>
        </div>
    </section>
    
    <section class="s-stats">
        <div class="uk-container uk-container-xlarge">
            <div class="uk-grid uk-grid-small uk-child-width-1-4@l uk-child-width-1-2@s" data-uk-grid>
                <div>
                    <div class="stat-item">
                        <div class="stat-item__box">
                            <h6 class="stat-item__title">Rental Orders</h6><span class="stat-item__value">3.4k</span>
                            <p class="stat-item__text">Pioneer of the equipment rental industry.</p>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="stat-item">
                        <div class="stat-item__box">
                            <h6 class="stat-item__title">Experienced Team</h6><span class="stat-item__value">125+</span>
                            <p class="stat-item__text">Pioneer of the equipment rental industry.</p>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="stat-item">
                        <div class="stat-item__box">
                            <h6 class="stat-item__title">Customer Reviews</h6><span class="stat-item__value">3.6k+</span>
                            <p class="stat-item__text">Pioneer of the equipment rental industry.</p>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="stat-item">
                        <div class="stat-item__box">
                            <h6 class="stat-item__title">Verified Locations</h6><span class="stat-item__value">150+</span>
                            <p class="stat-item__text">Pioneer of the equipment rental industry.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer();?>