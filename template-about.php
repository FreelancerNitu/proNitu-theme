<?php
/*
* Template Name: About Us
*/ 
get_header();
?>
<section class="page-heading">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="header-text">
          <h1> <?php the_title(); ?></h1>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="get-info">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <?php 
        $config = get_option('proNitu_options');
        ?>
        <div class="left-image">
          <img src="<?php echo $config['about_img']['url']; ?>">
        </div>
      </div>
      <div class="col-lg-6 align-self-center">
        <?php 
        $config = get_option('proNitu_options');
        ?>
        <div class="section-heading">
          <h6> <?php echo $config['asub_heading']; ?></h6>
          <h4><?php echo $config['afirst_heading']; ?> <em><?php echo $config['asecond_heading']; ?></em></h4>
          <p><?php echo $config['about_desc']; ?></p>
        </div>
        <div class="row">
          <?php
            $config = get_option('proNitu_options');
            $about_infos = $config['about_info'];
            foreach($about_infos as $about_info){
              ?>
          <div class="col-lg-6 col-md-6">

            <div class="info-item">
              <div class="icon">
                <img src="<?php echo $about_info['info_img']['url']; ?>" alt="">
              </div>
              <h4><?php echo $about_info['info_title']; ?></h4>
              <p><?php echo $about_info['info_desc']; ?></p>
            </div>
          </div>
          <?php } ?>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="simple-cta">
  <div class="container">
    <div class="row">
      <div class="col-lg-5 offset-lg-1">
        <?php 
        $config = get_option('proNitu_options');
        ?>
        <div class="left-image">
          <img src="<?php echo $config['cta_image']['url']; ?>" alt="">
        </div>
      </div>
      <?php 
      $config = get_option('proNitu_options');
      ?>
      <div class="col-lg-5 align-self-center">
        <h6><?php echo $config['cta_subheading']; ?></h6>
        <h4><?php echo $config['cta_heading']; ?></h4>
        <p><?php echo $config['cta_desc']; ?></p>
        <div class="white-button">
          <a href="<?php echo $config['cta_btn_link']; ?>"><?php echo $config['cta_btn_text']; ?></a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Main Footer -->
<?php
get_footer();
?>