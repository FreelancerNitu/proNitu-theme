<?php
// Theme CSS file calling
function proNitu_css_js_file_calling(){
  wp_enqueue_style('proNitu_style', get_stylesheet_uri());
  wp_register_style('bootstrap', get_template_directory_uri().'/assets/css/bootstrap.css', array(), '5.1.3', 'all');
  wp_register_style('min', get_template_directory_uri().'/assets/css/meanmenu.min.css', array(), '2.0.7', 'all');
  wp_register_style('responsive', get_template_directory_uri().'/assets/css/responsive.css', array(), '1.0.0', 'all');
  wp_register_style('animate', get_template_directory_uri().'/assets/css/animate/animate.css', array(), '3.7.0', 'all');
  wp_register_style('owl-min', get_template_directory_uri().'/assets/css/owl.carousel.min.css', array(), '2.3.4', 'all');
  wp_register_style('owl-default', get_template_directory_uri().'/assets/css/owl.theme.default.min.css', array(), '2.3.4', 'all');
  wp_register_style('main', get_template_directory_uri().'/assets/css/main.css', array(), '1.0.0', 'all');
  
  // wp_enqueue_style('font-awesome');
  wp_enqueue_style('bootstrap');
  wp_enqueue_style('min');
  wp_enqueue_style('responsive');
  wp_enqueue_style('animate');
  wp_enqueue_style('owl-min');
  wp_enqueue_style('owl-default');
  wp_enqueue_style('main');
  
  // Theme js and jQuery file calling
  wp_enqueue_script('jquery');
  wp_enqueue_script('font-js', get_template_directory_uri().'/assets/js/font-awesome.js', array(), '5.15.4', 'true');
  wp_enqueue_script('bootstrap-js', get_template_directory_uri().'/assets/js/bootstrap.js', array(), '5.1.3', 'true');
  wp_enqueue_script('min-js', get_template_directory_uri().'/assets/js/meanmenu.min.js', array(), '1.0.0', 'true');
  wp_enqueue_script('wow-js', get_template_directory_uri().'/assets/js/wow/wow.min.js', array(), '1.3.0 ', 'true');
  wp_enqueue_script('type-js', get_template_directory_uri().'/assets/js/type.js', array(), '2.0.12', 'true');
  wp_enqueue_script('owl-js', get_template_directory_uri().'/assets/js/owl.carousel.min.js', array(), '2.3.4', 'true');
  wp_enqueue_script('main-js', get_template_directory_uri().'/assets/js/main.js', array(), '1.0.0', 'true');
}
add_action('wp_enqueue_scripts', 'proNitu_css_js_file_calling');


// Deshicon not showing fixing
function proNitu_deshicon_load_issue_fixing(){
  wp_enqueue_style('dashicons');
}
add_action('wp_enqueue_scripts', 'proNitu_deshicon_load_issue_fixing');
?>