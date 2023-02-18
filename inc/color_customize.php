<?php 
/****************************
   * Theme Colors option
****************************/
function proNitu_color_customizer_register($wp_customize){
  $wp_customize->add_section('nitu_colors', array(
    'title' =>__('Theme Colors', 'proNitu'),
    'description' =>__('If need you can change your theme color', 'proNitu'),
  ));
  $wp_customize->add_setting('nitu_bg_color', array(
    'default'=> '#fff'
  ));
  $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'nitu_bg_color', array(
    'label' => 'Background Color',
    'section' => 'nitu_colors',
    'setting' => 'nitu_bg_color',
  )));
  // Button background Color
  $wp_customize->add_setting('nitu_primary_color', array(
    'default'=> '#aa245c'
  ));
  $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'nitu_primary_color', array(
    'label' => 'Button Background',
    'section' => 'nitu_colors',
    'setting' => 'nitu_primary_color',
  )));
  // Button Text Color
  $wp_customize->add_setting('nitu_btn_color', array(
    'default'=> '#333'
  ));
  $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'nitu_btn_color', array(
    'label' => 'Button Text Color',
    'section' => 'nitu_colors',
    'setting' => 'nitu_btn_color',
  )));
  
   // Text Color
   $wp_customize->add_setting('nitu_text_color', array(
    'default'=> '#fff'
  ));
  $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'nitu_text_color', array(
    'label' => 'Text Color',
    'section' => 'nitu_colors',
    'setting' => 'nitu_text_color',
  )));
  
}
add_action('customize_register', 'proNitu_color_customizer_register');
    
/*********************************
 * Theme Color function
 ********************************/

 function proNitu_theme_color_customize(){
   ?>
<style>
body {
  background: <?php echo get_theme_mod('nitu_bg_color');
  ?>
}

:root {
  --pink: <?php echo get_theme_mod('nitu_primary_color');
  ?>
}

:root {
  --white: <?php echo get_theme_mod('nitu_text_color');
  ?>
}

:root {
  --btn: <?php echo get_theme_mod('nitu_btn_color');
  ?>
}
</style>
<?php } 
add_action('wp_head','proNitu_theme_color_customize');