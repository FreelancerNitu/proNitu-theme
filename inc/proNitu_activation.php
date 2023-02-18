<?php

require_once get_template_directory(). '/inc/class-tgm-plugin-activation.php';

function proNitu_activation(){
  $plugins = array(
    array(
     'name'  =>__('Advanced Custom Fields', 'proNitu'),
     'slug' => 'advanced-custom-fields',
     'required' => true,
    ),
    array(
      'name' =>__('proNitu Custom Post Types','proNitu'),
      'slug' => 'proNitu-custom-post-types',
      'source' => 'https://github.com//FreelancerNitu/proNitu_custom_post/archive/refs/heads/main.zip',
      'required' => true,
     ),
     array(
      'name' =>__('proNitu Custom Widgets','proNitu'),
      'slug' => 'proNitu-custom-widgets',
      'source' => 'https://github.com//FreelancerNitu/proNitu_custom_widgets/archive/refs/heads/main.zip',
      'required' => true,
     ),
     array(
      'name' =>__('proNitu Color Customizer','proNitu'),
      'slug' => 'proNitu-color-customizer',
      'source' => 'https://github.com//FreelancerNitu/proNitu_color_customizer/archive/refs/heads/main.zip',
      'required' => true,
     ),
  );

  $config = array(
    'id' => 'painting_plugins_activation',
    'menu' => 'painting-plugins-activation',
    'parent_slug' => 'themes.php',
    'has_notices' => true,
  );
  tgmpa( $plugins, $config);
}
add_action('tgmpa_register', 'proNitu_activation');



















?>