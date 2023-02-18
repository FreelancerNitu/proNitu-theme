<?php 
/****************************
   * Theme Colors option
****************************/
function proNitu_custom_login_customize($wp_customize){

  // Theme Custom Login Page
  $wp_customize->add_section('custom_login', array(
    'title' =>__('Custom Login', 'proNitu'),
    'description' =>__('If need you can change your theme custom login info', 'proNitu'),
  ));
  $wp_customize->add_setting('custom_login_logo', array(
    'default' => get_bloginfo('template_directory') . '/img/logo.png',
  ));
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'custom_login_logo', array(
    'label' => 'Logo Upload',
    'description' => 'If you intrested to change or update your logo, You can do',
    'section' => 'custom_login',
    'setting' => 'custom_login_logo',
  )));
  // Custom Login Background Image
  $wp_customize->add_setting('custom_login_bg', array(
    'default' => get_bloginfo('template_directory') . '/img/login.jpg',
  ));
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'custom_login_bg', array(
    'label' => 'Background Image Upload',
    'description' => 'If you intrested to change or update your Background Image, You can do',
    'section' => 'custom_login',
    'setting' => 'custom_login_bg',
  )));
  // Custom Login Color
  $wp_customize->add_setting('custom_primary_color', array(
    'default'=> '#aa245c'
  ));
  $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'custom_primary_color', array(
    'label' => 'Primary Color',
    'section' => 'custom_login',
    'setting' => 'custom_primary_color',
  )));
  // Custom Login Text Color
  $wp_customize->add_setting('custom_text_color', array(
    'default'=> '#333'
  ));
  $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'custom_text_color', array(
    'label' => 'Text Color',
    'section' => 'custom_login',
    'setting' => 'custom_text_color',
  )));

}
add_action('customize_register', 'proNitu_custom_login_customize');
    
/*********************************
* Theme Custom Login Page Style
********************************/

function proNitu_custom_color_login(){
  ?>
<style>
#login h1 a,
.login h1 a {
  background-image: url(<?php print get_theme_mod('custom_login_logo')?>) !important;
}

body.login {
  background: url(<?php print get_theme_mod('custom_login_bg')?>) !important;
  display: flex !important;
  align-items: center !important;
  background-position: center !important;
  background-repeat: no-repeat !important;
  background-size: cover !important;
}


#login form p.submit input {
  background: <?php print get_theme_mod('custom_primary_color')?> !important;
}

input#user_login,
input#user_pass {
  border-left: 4px solid <?php print get_theme_mod('custom_primary_color')?> !important;

}

.login #login_error,
.login .message,
.login .success {
  border-left: 4px solid <?php print get_theme_mod('custom_primary_color')?> !important;
}

.login #backtoblog a {
  background: <?php print get_theme_mod('custom_primary_color')?> !important;
}

.login #login_error a {
  color: <?php print get_theme_mod('custom_text_color')?> !important;
  ;
}

.login #backtoblog a {
  color: <?php print get_theme_mod('custom_text_color')?> !important;
}

#login form p.submit input {
  color: <?php print get_theme_mod('custom_text_color')?> !important;
}

.login label {
  color: <?php print get_theme_mod('custom_text_color')?> !important;
}

.login #nav a {
  color: <?php print get_theme_mod('custom_text_color')?> !important;
}
</style>
<?php } 
add_action('login_enqueue_scripts','proNitu_custom_color_login');