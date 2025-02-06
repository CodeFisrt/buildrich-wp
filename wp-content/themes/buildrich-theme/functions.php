
<?php


// Enueue script and style

function wp_architech_scripts(){
    wp_enqueue_style('wp-buildrich-theme-style',get_stylesheet_uri(),array(),_S_VERSION);
    wp_style_add_data('wp-buildrich-theme-style','rtl','replace');

    wp_enqueue_style('bg_logo_png',get_template_directory_uri().'assets/images/bg_logo.png',array(),time(),'alt'); 
    wp_enqueue_style('libs_min_css',get_template_directory_uri().'assets/css/libs.min.css',array(),time(),'alt');  
    wp_enqueue_style('style_css',get_template_directory_uri().'assets/css/style.css',array(),time(),'alt');  
    wp_enqueue_style('bootstrap_css',get_template_directory_uri().'assets/css/bootstrap.css',array(),time(),'alt');  
    wp_enqueue_style('uikit_min_css',get_template_directory_uri().'https://cdn.jsdelivr.net/npm/uikit@3.6.16/dist/css/uikit.min.css',array(),time(),'alt');   

    
  wp_enqueue_script('libs.js',get_template_directory_uri().'assets/js/libs.js',array(),time(),true);
  wp_enqueue_script('main.js',get_template_directory_uri().'assets/js/main.js',array(),time(),true);
 

}
register_nav_menus(
    array('primary-menu'=>'Header Menu')
)

?>