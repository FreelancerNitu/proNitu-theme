<?php
/*===================== 
 * Main Theme Title 
======================*/ 
add_theme_support('title-tag');

/*========================= 
 * Load textdomain 
===========================*/ 
function my_theme_load_theme_textdomain() {
  load_theme_textdomain('proNitu', get_template_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'my_theme_load_theme_textdomain' );

/*======================
 * Thumbnil image area 
=======================*/
add_theme_support('post-thumbnails', array('page', 'post', 'service', 'projects', 'slider'));
add_image_size('post-thumbnails', 400, 400, true);
add_image_size('service', 970, 400, true);
add_image_size('projects', 970, 400, true);
add_image_size('slider', 1920, 400, true);

function my_theme_setup(){
  add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'my_theme_setup');

/*========================
 * Expect 50 words 
========================*/ 
function proNitu_excert_more($more){
  global $post;
  return '<br> <br> <a class="readmore" href="'.get_permalink($post->ID) . '">' . ' Read More' . '</a>';
}
add_filter('excerpt_more', 'proNitu_excert_more');

/*====================
 * Expect Length 50 
======================*/ 
function proNitu_excerpt_length($lenght){
  return 30;
}
add_filter('excerpt_length', 'proNitu_excerpt_length', 999);

/*============ WooCommerce Support ============*/ 
add_theme_support('woocommerce');

?>