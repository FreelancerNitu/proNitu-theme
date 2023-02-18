<?php
// The Template Displaying For Main Header
?>
<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>" class="no-js">

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

  <!-- Back to top button -->
  <div class="back-to-top"></div>

  <!-- Header area starts here -->
  <div id="mobilemenu"></div>
  <header id="header-area" class="<?php echo get_theme_mod('proNitu_menu_position'); ?>">
    <!-- Top Header Starts Here  -->
    <div class="top-header-area">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div class="first-text">
              <?php
              $config = get_option('proNitu_options');
              ?>
              <div class="address">
                <p><i class="<?php echo $config['address_icon']; ?>"></i> <?php echo $config['top_address']; ?>
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4 text-center">
            <div class="email">
              <a href="mailto:<?php $config['top_email']; ?>">
                <p><i class="<?php echo $config['email_icon']; ?>"></i> <?php echo $config['top_email']; ?></p>
              </a>
            </div>
          </div>
          <div class="col-md-4 text-end">
            <div class="phone_number">
              <a href="tel: <?php $config['top_phone']; ?>">
                <p><i class="<?php echo $config['phone_icon']; ?>"></i> <?php echo $config['top_phone']; ?></p>
              </a>
            </div>
          </div>

        </div>
      </div>
    </div>
    <!-- Top Header Ends Here -->

    <div class="main-header">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <div class="logo">
              <a href="<?php echo home_url(); ?>"> <img src=" <?php echo get_theme_mod('proNitu_logo'); ?>"
                  alt="Logo"></a>
            </div>
          </div>
          <div class="col-md-9">
            <nav id="main_menu">
              <?php wp_nav_menu(array('theme_location' =>  'main_menu', 'menu_class' => 'inner_menu'))?>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- Header area ends here -->