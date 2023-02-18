<?php
// Main Header Calling
get_header();
?>

<section id="page-section">
  <div class=" container">
    <div class="row">
      <div class="col-md-8">
        <?php get_template_part('template_part/post_setup'); ?>
      </div>
      <div class="col-md-4">
        <?php get_sidebar('sidebar-1'); ?>
      </div>
    </div>
  </div>
</section>

<!-- Template Name -->
<section>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h4>Template: Page.php</h4>
      </div>
    </div>
  </div>
</section>

<?php
// Main Footer Calling
get_footer();
?>