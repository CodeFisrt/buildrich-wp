<?php
	/*
		 Template Name:Contact Us
	*/
?>




<?php get_header(); ?>


<main class="page-main">
    <div class="page-head image-container">
        <div class="page-head__bg" style="background-image: url(<?php echo get_template_directory_uri()?>/assets/images/Backgrounds/Contact_Us.jpg)">
            <div class="page-head__title overlay">Get In Touch</div>
            <div class="page-head__breadcrumb">
                <ul class="uk-breadcrumb">
                    <li><a href="https://buildrich.in">Home</a></li>
                    <li><span>Contact Us</span></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="page-content">
        <div class="uk-section uk-container">
            <div class="contact-page-box">
                <div class="uk-grid" data-uk-grid>
                    <div class="uk-width-1-3@m">
                        <div class="contact-page-sidebar"><a class="footer-logo" href="https://buildrich.in"><img src="<?php echo get_template_directory_uri();?>/assets/images/Logo/Buildrich-Logo-White.png" alt="image"></a>
                            <p>Feel free to reach out to us via phone, email, or visit our office for any support or information you need.</p>
                            <ul class="contacts-list">
                                <li class="map-icon">
                                    <a href="https://maps.app.goo.gl/eDiNTmQF8vSa81Fw8" target="_blank">
                                        <span data-uk-icon="location" class="uk-icon"><svg width="20" height="20s" ViewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
					<path fill="none"stroke="#000"stroke-width="1.01" d="M 10 0.5 C 6.41 0.5 3.5 3.39 3.5 6.98 C 3.5 11.83 10 19 10 19 C 10 19 16.5 11.83 16.5 6.98 C 16.5 3.39 13.59 0.5 10 0.5 L 10 0.5 Z"></path>
				    <circle fill="none" stroke="#000" cx="10" cy="6.8" r="2.3"></circle></svg></span>
                                        <div>
                                            <span class="label">Head Office</span>
                                            <span>Sr. No. 31/5/1, Near Akemi Business School, Marunji (Wakad), Pune - 411 057</span><br><br>
                                             <!-- <span>Unit II - 
                                            Gat No.91, Matre Nagar, Hinjewadi-Pirangut Road, Near Paud Range Forest Office, Ambadwet, Mulshi, Pune-412115</span>-->
                                        </div>  
                                    </a>
                                </li>
                                <li>
                                    <a href="https://wa.me/919923073303" target="_blank">
                                        <span data-uk-icon="receiver" class="uk-icon"> <svg width="20"height="20" ViewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill="none"stroke="#000"stroke-width="1.01" d="M 6.189 13.611 C 8.134 15.525 11.097 18.239 13.867 18.257 C 16.47 18.275 18.2 16.241 18.2 16.241 L 14.509 12.551 L 11.539 13.639 L 6.189 8.29 L 7.313 5.355 L 3.76 1.8 C 3.76 1.8 1.732 3.537 1.7 6.092 C 1.667 8.809 4.347 11.738 6.189 13.611"></path></svg>
                         </span>
                                        <div>
                                            <span class="label">Call us on</span>
                                            <span>+91-9923 07 3303 | +91-9923 70 3303</span>
                                        </div>
                                    </a>
                                </li>
                                <li><a href="mailto:sales@buildrich.in">
                                        <span data-uk-icon="mail" class="uk-icon"><svg width="20"height="20" ViewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
					<polyline fill="none" stroke="#000" points="1.4,6.5 10,11 18.6,6.5"></polyline>
					<path d="M 1 4 L 1 16 L 19 16 L 19 4 L 1 4 Z M 18 15 L 2 15 L 2 5 L 18 5 L 18 15 Z"></path></svg></span>
                                        <div>
                                            <span class="label">Send Mail</span>
                                            <span>Sales@buildrich.in</span>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                            <ul class="social">

                                <li><a href="https://www.facebook.com/buildrich.in" target="_blank"><span data-uk-icon="facebook" class="uk-icon"> <svg width="20"height="20" ViewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
													<path d="M11,10h2.6l0.4-3H11V5.3c0-0.9,0.2-1.5,1.5-1.5H14V1.1c-0.3,0-1-0.1-2.1-0.1C9.6,1,8,2.4,8,5v2H5.5v3H8v8h3V10z"></path>
								          </svg></span></a>
                                </li>
                                <li><a href="https://x.com/Buildrich_in" target="_blank"><span data-uk-icon="twitter" class="uk-icon"> <svg width="20"height="20" ViewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
													<path d="M-41,4.74 C18.339,5.029 17.626,5.229 16.881,5.32 C17.644,4.86 18.227,4.139 18.503,3.28 C17.79,3.7 17.001,4.009 16.159,4.17 C15.485,3.45 14.526,3 13.464,3 C11.423,3 9.771,4.66 9.771,6.7 C9.771,6.99 9.804,7.269 9.868,7.539 C6.795,7.38 4.076,5.919 2.254,3.679 C1.936,4.219 1.754,4.86 1.754,5.539 C1.754,6.82 2.405,7.95 3.397,8.61 C2.79,8.589 2.22,8.429 1.723,8.149 L1.723,8.189 C1.723,9.978 2.997,11.478 4.686,11.82 C4.376,11.899 4.049,11.939 3.713,11.939 C3.475,11.939 3.245,11.919 3.018,11.88 C3.49,13.349 4.852,14.419 6.469,14.449 C5.205,15.429 3.612,16.019 1.882,16.019 C1.583,16.019 1.29,16.009 1,15.969 C2.635,17.019 4.576,17.629 6.662,17.629 C13.454,17.629 17.17,12 17.17,7.129 C17.17,6.969 17.166,6.809 17.157,6.649 C17.879,6.129 18.504,5.478 19,4.74"></path>
								          </svg></span></a>
                                </li>
                                <li><a href="https://www.instagram.com/buildrich.in" target="_blank"><span data-uk-icon="instagram" class="uk-icon"> <svg width="20"height="20" ViewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
													<path d="M 13.55 1 H 6.46 C 3.45 1 1 3.44 1 6.44 v 7.12 c 0 3 2.45 5.44 5.46 5.44 h 7.08 c 3.02 0 5.46 -2.44 5.46 -5.44 V 6.44 C 19.01 3.44 16.56 1 13.55 1 Z M 17.5 14 c 0 1.93 -1.57 3.5 -3.5 3.5 H 6 c -1.93 0 -3.5 -1.57 -3.5 -3.5 V 6 c 0 -1.93 1.57 -3.5 3.5 -3.5 h 8 c 1.93 0 3.5 1.57 3.5 3.5 V 14 Z"></path>
													<circle cx="14.87" cy="5.26" r="1.09"></circle>
													<path d="M 10.03 5.45 c -2.55 0 -4.63 2.06 -4.63 4.6 c 0 2.55 2.07 4.61 4.63 4.61 c 2.56 0 4.63 -2.061 4.63 -4.61 C 14.65 7.51 12.58 5.45 10.03 5.45 L 10.03 5.45 L 10.03 5.45 Z M 10.08 13 c -1.66 0 -3 -1.34 -3 -2.99 c 0 -1.65 1.34 -2.99 3 -2.99 s 3 1.34 3 2.99 C 13.08 11.66 11.74 13 10.08 13 L 10.08 13 L 10.08 13 Z""></path>
												</svg></span></a>
                               </li>
                                <li><a href="https://www.linkedin.com/company/buildrich-construction-equipment-pvt-ltd/" target="_blank"><span data-uk-icon="linkedin" class="uk-icon"><svg width="20"height="20" ViewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
													<path d="M 5.77 17.89 L 5.77 7.17 L 2.21 7.17 L 2.21 17.89 L 5.77 17.89 L 5.77 17.89 Z M 3.99 5.71 C 5.23 5.71 6.01 4.89 6.01 3.86 C 5.99 2.8 5.24 2 4.02 2 C 2.8 2 2 2.8 2 3.85 C 2 4.88 2.77 5.7 3.97 5.7 L 3.99 5.7 L 3.99 5.71 L 3.99 5.71 Z"></path>
								                     <path d="M 7.75 17.89 L 11.31 17.89 L 11.31 11.9 C 11.31 11.58 11.33 11.26 11.43 11.03 C 11.69 10.39 12.27 9.73 13.26 9.73 C 14.55 9.73 15.06 10.71 15.06 12.15 L 15.06 17.89 L 18.62 17.89 L 18.62 11.74 C 18.62 8.45 16.86 6.92 14.52 6.92 C 12.6 6.92 11.75 7.99 11.28 8.73 L 11.3 8.73 L 11.3 7.17 L 7.75 7.17 C 7.79 8.17 7.75 17.89 7.75 17.89 L 7.75 17.89 L 7.75 17.89 Z"></path>
												</svg></span></a>
                                </li>
                                <li><a href="https://www.youtube.com/@buildrichconstructionequipment" target="_blank"><span data-uk-icon="youtube" class="uk-icon"> <svg width="20"height="20" ViewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
													<path d="M 15 4.1 c 1 0.1 2.3 0 3 0.8 c 0.8 0.8 0.9 2.1 0.9 3.1 C 19 9.2 19 10.9 19 12 c -0.1 1.1 0 2.4 -0.5 3.4 c -0.5 1.1 -1.4 1.5 -2.5 1.6 c -1.2 0.1 -8.6 0.1 -11 0 c -1.1 -0.1 -2.4 -0.1 -3.2 -1 c -0.7 -0.8 -0.7 -2 -0.8 -3 C 1 11.8 1 10.1 1 8.9 c 0 -1.1 0 -2.4 0.5 -3.4 C 2 4.5 3 4.3 4.1 4.2 C 5.3 4.1 12.6 4 15 4.1 Z M 8 7.5 v 6 l 5.5 -3 L 8 7.5 Z"></path>
												</svg></span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                  <!-- form section start -->
                  <div class="uk-width-2-3@m">
                        <div class="block-form">
                            <div class="section-title">
                                <h3>Get in Touch</h3>
                                <span>For quotes, consultations, or further inquiries, contact us today. We're excited to help you bring your projects to life with dependable, high-quality scaffolding and construction equipment.</span>
                            </div>
                            <div class="section-content">
                                <form method="post" action="">
                                    <div class="uk-grid uk-grid-medium uk-child-width-1-2@s fild1 " data-uk-grid>
                                       
                                    <?php echo do_shortcode('[contact-form-7 id="36a8280" title="Contact form 1"]'); ?>
                                    
                                </div>
                                    
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="contacts-map"><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15124.699495254717!2d73.7384402!3d18.6112026!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2bbd4e22da337%3A0xa31558f181427cf3!2sBuildrich%20Construction%20Equipment%20Private%20Limited!5e0!3m2!1sen!2sin!4v1723458628875!5m2!1sen!2sin"></iframe></div>
</main>







<?php get_footer(); ?>