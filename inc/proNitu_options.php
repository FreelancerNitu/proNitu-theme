<?php 

if(class_exists('CSF')){
  
  $prefix = 'proNitu_options';
  
  CSF::createOptions($prefix, array(
    'menu_title' =>__('Theme Options', 'proNitu'),
    'menu_slug' => 'Theme Options',
    'framework_title' => 'Theme Options - <small>Nitu Barmon</small>',
    'menu_parent' => 'themes.php',
    'menu_type' => 'submenu',
  ));

  // Top Header Options
  CSF::createSection($prefix, array(
    'id' => 'top_heading',
    'title' => __('Top Header', 'proNitu'),
    'fields' => array(
      array(
        'id' => 'top_address',
        'title' => __('Address', 'proNitu'),
        'type' => 'text',
        'desc' =>__('Write Your Address Here', 'proNitu')
      ),
      array(
        'id' => 'address_icon',
        'title' => __('Address Icon', 'proNitu'),
        'type' => 'icon',
        'desc' =>__('Add Your Address Icon Here', 'proNitu')
      ),
      array(
        'id' => 'top_email',
        'title' => __('Email', 'proNitu'),
        'type' => 'text',
        'desc' =>__('Write Your Email Here', 'proNitu')
      ),
      array(
        'id' => 'email_icon',
        'title' => __('Email Icon', 'proNitu'),
        'type' => 'icon',
        'desc' =>__('Add Your Email Icon Here', 'proNitu')
      ),
      array(
        'id' => 'top_phone',
        'title' => __('Phone Number', 'proNitu'),
        'type' => 'text',
        'desc' =>__('Write Your Phone Number Here', 'proNitu')
      ),
      array(
        'id' => 'phone_icon',
        'title' => __('Phone Icon', 'proNitu'),
        'type' => 'icon',
        'desc' =>__('Add Your Phone Icon Here', 'proNitu')
      ),
    )
  ));
  
  // Section Heading options
  CSF::createSection($prefix, array(
    'id' => 'heading_options',
    'title' => __('Heading Options', 'proNitu'),
    'fields' => array(
      array(
      'id' => 'first_heading',
      'type' => 'text',
      'title' => __('First Heading', 'proNitu'),
      'default' => 'Our Projects',
      ),
      array(
        'id' => 'first_btn_text',
        'type' => 'text',
        'title' => __('First Button Text', 'proNitu'),
        'default' => 'View All Projects',
        ),
      array(
        'id' => 'second_heading',
        'type' => 'text',
        'title' => __('Second Heading', 'proNitu'),
        'default' => 'Our Services',
        ),
      array(
        'id' => 'second_btn_text',
        'type' => 'text',
        'title' => __('Second Button Text', 'proNitu'),
        'default' => 'View All Services',
        ),  
     )
  ));
  
  // Icon options
  CSF::createSection($prefix, array(
    'id' => 'header_icons',
    'title' => __('Icon Options', 'proNitu'),
    'fields' => array(
      array(
        'id' => 'header_icon_list',
        'title' => __('Header Icons', 'proNitu'),
        'type' => 'group',
        'button_title' => __('Add new icon', 'proNitu'),
        'fields' => array(
            array(
              'id' => 'social_icon',
              'type' => 'icon',
              'title' => __('Header icon', 'proNitu')
              ),
              array(
              'id' => 'social_link',
              'type' => 'text',
              'title' => __('Social Link', 'proNitu')
              ),
        )
      )
    )
  ));
  
  // Category options
  CSF::createSection($prefix, array(
      'id' => 'category_options',
      'title' => __('Category by Post', 'proNitu'),
      'fields' => array(
        array(
        'id' => 'first_category',
        'type' => 'text',
        'title' => __('First Category', 'proNitu')
        ),
        array(
        'id' => 'sceond_category',
        'type' => 'text',
        'title' => __('Second Category', 'proNitu')
        ),
        array(
        'id' => 'three_category',
        'type' => 'text',
        'title' => __('Third Category', 'proNitu')
        ),
        array(
        'id' => 'four_category',
        'type' => 'text',
        'title' => __('Fouth Category', 'proNitu')
        ),
       )
  ));
  
  // Copyrights options
  CSF::createSection($prefix, array(
      'id' => 'copyright_options',
      'title' => __('Copyrights Option', 'proNitu'),
      'fields' => array(
        array(
        'id' => 'c_icons',
        'type' => 'group',
        'title' => __('Copyrights Icons', 'proNitu'),
        'fields' => array(
          array(
            'id' => 'c_icon',
            'title' =>__('Copyright Icon', 'proNitu'),
            'type' => 'icon'
          ),
          array(
            'id' => 'c_link',
            'title' =>__('Copyright Icon Link'),
            'type' => 'text',
            'desc' => __('Past Your Link Here', 'proNitu')
          ),
        )
        ),
       )
  )); 
 
  // About options
  CSF::createSection($prefix, array(
    'id' => 'about_options',
    'title' => __('About Us Options', 'proNitu'),
  )); 
  // About Info
  CSF::createSection($prefix, array(
    'parent' => 'about_options',
    'title' => __('About Info', 'proNitu'),
    'fields' => array(
      array(
        'id' => 'asub_heading',
        'title' =>__('About Section Sub Heading'),
        'type' => 'text',
        'desc' => __('Write Your About Section Sub Heading Here', 'proNitu'),
        'default' => 'GET INFO',
      ),
      array(
        'id' => 'afirst_heading',
        'title' =>__('About Section First Heading'),
        'type' => 'text',
        'desc' => __('Write Your About Section First Heading Here', 'proNitu'),
        'default' => 'Read More',
      ),
      array(
        'id' => 'asecond_heading',
        'title' =>__('About Section Second Heading'),
        'type' => 'text',
        'desc' => __('Write Your About Section Second Heading Here', 'proNitu'),
        'default' => 'About Us',
      ),
      array(
        'id' => 'about_desc',
        'title' =>__('About Section Description'),
        'type' => 'textarea',
        'desc' => __('Write Your About Section Description Here', 'proNitu'),
        'default' => 'You are allowed 100% to download and use our templates from TemplateMo for your commercial or business websites',
      ),
      array(
        'id' => 'about_img',
        'title' => __('About Section Image', 'proNitu'),
        'type' => 'media',
        'desc' => __('Upload Your Image Here', 'proNitu'),
      ),
      array(
        'id' => 'about_info',
        'type' => 'group',
        'title' => __('About Infos', 'proNitu'),
        'fields' => array(
          array(
            'id' => 'info_img',
            'title' =>__('Info Image', 'proNitu'),
            'type' => 'media'
          ),
          array(
            'id' => 'info_title',
            'title' =>__('Info Title'),
            'type' => 'text',
            'desc' => __('Write Your Info Title Here', 'proNitu'),
            'default' => 'Best Strategy',
          ),
          array(
            'id' => 'info_desc',
            'title' =>__('Info Description'),
            'type' => 'text',
            'desc' => __('Write Your Info Description Here', 'proNitu'),
            'default' => 'Food & truck tumeric taxidermy hoodie chiasore.',
          ),
         )
        ),
    )
  ));
  
  // About CTA Options
  CSF::createSection($prefix, array(
    'parent' => 'about_options',
    'title' => __('CTA Options', 'proNitu'),
    'fields' => array(
      array(
        'id' => 'cta_image',
        'type' => 'media',
        'title' =>__('CTA Image', 'proNitu'),
        'desc' => __('Upload Your CTA Image Here', 'proNitu'),
      ),
      array(
        'id' => 'cta_subheading',
        'type' => 'text',
        'title' =>__('CTA Sub Heading', 'proNitu'),
        'desc' => __('Write Your CTA Sub Heading Here', 'proNitu'),
        'default' => 'Get the sale right now!'
      ),
      array(
        'id' => 'cta_heading',
        'type' => 'text',
        'title' =>__('CTA Heading', 'proNitu'),
        'desc' => __('Write Your CTA Heading Here', 'proNitu'),
        'default' => 'Up to 50% OFF For 1+ courses'
      ),
      array(
        'id' => 'cta_desc',
        'type' => 'textarea',
        'title' =>__('CTA Description', 'proNitu'),
        'desc' => __('Write Your CTA Description Here', 'proNitu'),
        'default' => 'Kogi VHS freegan bicycle rights try-hard green juice probably havent heard of them cliche la croix af chillwave.'
      ),
      array(
        'id' => 'cta_btn_text',
        'type' => 'text',
        'title' =>__('CTA Button Text', 'proNitu'),
        'desc' => __('Write Your CTA Button Text Here', 'proNitu'),
        'default' => 'Hire Me'
      ),
      array(
        'id' => 'cta_btn_link',
        'type' => 'text',
        'title' =>__('CTA Button Link', 'proNitu'),
        'desc' => __('Past Your CTA Button Link Here', 'proNitu'),
        'default' => 'contact-us'
      ),
    )
  ));
}