<?php 

// Loadning CSS file 
function proNitu_login_enqueue_register(){
  wp_enqueue_style('login_enqueue', get_stylesheet_directory_uri().'/assets/css/login_enqueue.css', array(), '1.0.0', 'all');
}
add_action('login_enqueue_scripts', 'proNitu_login_enqueue_register'); 

// Changing Login From Logo  
function proNitu_login_logo_change(){
  ?>
<style>
#login h1 a,
.login h1 a {
  background-image: url(<?php print get_stylesheet_directory_uri()?>../image/logo.png);
  height: 30px;
}
</style>
<?php
 }
 add_action('login_enqueue_scripts', 'proNitu_login_logo_change');
 
 // Changing Login From URL 
function proNitu_login_logo_url_change(){
 return home_url();
 }
 add_filter('login_headerurl', 'proNitu_login_logo_url_change');