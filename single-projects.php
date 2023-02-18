<?php
get_header();
?>

<section id="single-project">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <div class="single_post">
          <?php get_template_part('template_part/a-setup', get_post_format() ); ?>
          <!-- Related Post -->
          <?php get_template_part('template_part/related_posts'); ?>
        </div>
      </div>

      <div class="col-md-4">
        <?php get_sidebar('sidebar-1'); ?>
      </div>
    </div>
  </div>
  </sectioni>


  <!-- Template Name -->
  <section>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h4>Template: Single-Project.php</h4>
        </div>
      </div>
    </div>
  </section>

  <?php
get_footer();
?>