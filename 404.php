<?php
// Main Template Header
get_header();
?>

<section class="404_page">
  <div class="container">
    <div class="row">
      <div class="col-md-12 error_page">
        <img src="<?php echo get_theme_mod('proNitu_error_image')?>">
        <p>404 Error - Page not Found</p>
        <h1>Looks like something was wrong !</h1>
        <div class="error_search">
          <?php get_search_form(); ?>
        </div>
        <a href="<?php echo home_url(); ?>" class="homepage">Homepage</a>
      </div>
    </div>
  </div>
</section>


<!-- Main Template Footer -->
<?php
get_footer();
?>