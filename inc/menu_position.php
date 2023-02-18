<?php 

/*============ Header Menu Position ======*/ 

function proNitu_menu_customize_register($wp_customize){
  $wp_customize->add_section('proNitu_menu_positon', array(
    'title' =>__('Menu Position Option', 'proNitu'),
    'description' =>__('If you intrested to change your menu position, You can do', 'proNitu'),
  ));
  $wp_customize->add_setting('proNitu_menu_position', array(
    'default' => 'Right Menu',
  ));
  $wp_customize->add_control('proNitu_menu_position', array(
    'label' => 'Menu Position',
    'description' => 'Select your menu position',
    'setting' => 'proNitu_menu_position',
    'section' => 'proNitu_menu_positon',
    'type' => 'radio',
    'choices' => array(
      'left_menu' => 'Left Menu',
      'right_menu' => 'Right Menu',
      'center_menu' => 'Center Menu',
    )
  ));
}
add_action('customize_register', 'proNitu_menu_customize_register');