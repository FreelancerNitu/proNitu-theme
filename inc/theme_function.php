<?php 
/**************************************
 * Customizer Theme Function 
 *************************************/ 

function proNitu_customizer_register($wp_customize){
    /*======== Header area Logo Customization ==========*/
    $wp_customize->add_section('proNitu_header_area', array(
      'title'=>__('Header Area', 'proNitu'),
      'description'=> 'If you intrested to change or update your logo, You can do',
    ));
    $wp_customize->add_setting('proNitu_logo', array(
      'default' => get_bloginfo('template_directory') . '/img/logo.png',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'proNitu_logo', array(
      'label' => 'Logo Upload',
      'description' => 'If you intrested to change or update your logo, You can do',
      'section' => 'proNitu_header_area',
      'setting' => 'proNitu_logo',
    )));

    /*=============== 404 page image ===================*/
    $wp_customize->add_section('proNitu_error_img', array(
      'title'=>__('404 Area Image', 'proNitu'),
      'description'=> 'If you intrested to change or update your Error page image, You can do',
    ));
    $wp_customize->add_setting('proNitu_error_image', array(
      'default' => get_bloginfo('template_directory') . '/img/error.png',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'proNitu_error_image', array(
      'label' => 'Error Image Upload',
      'description' => 'If you intrested to change or update your Error Image, You can do',
      'section' => 'proNitu_error_img',
      'setting' => 'proNitu_error_image',
    )));
    
/********************************
  * Footer Copyrights option
********************************/
    $wp_customize->add_section('proNitu_footer_option', array(
      'title'=>__('Footer Option', 'proNitu'),
      'description'=> 'If you intrested to change or update your footer setting, You can do it',
    ));
    $wp_customize->add_setting('proNitu_copyright_section', array(
      'default' => '&copy; Copyrights 2022 || proNitu ',
    ));
    $wp_customize->add_control('proNitu_copyright_section', array(
      'label' => 'Copyright Text',
      'description' => 'If need you can udate your copyrght section here',
      'setting' => 'proNitu_copyright_section',
      'section' => 'proNitu_footer_option',
      
    ));
}
add_action('customize_register', 'proNitu_customizer_register');