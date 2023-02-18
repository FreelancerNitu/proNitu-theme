<?php
// The Main Template Header
  get_header();
?>

<!-- Main Section Starts Here -->
<section id="main-page">
  <div class=" container">
    <div class="row">
      <div class="col-md-8">
        <?php get_template_part('template_part/blog_setup'); ?>
      </div>
      <div class="col-md-4">
        <?php get_sidebar('sidebar-1'); ?>
      </div>
    </div>
  </div>
</section>
<!-- Main Section Ends Here -->

<?php
// The Main Template Footer
  get_footer();
?>