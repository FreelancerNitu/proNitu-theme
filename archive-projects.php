<?php
get_header();
/*
* The template for displaying Projects Pages
*/ 
?>

<section id="body_area">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="archive_title">
          <h1 class="title">All Projects</h1>
        </div>
      </div>
      <?php get_template_part('template_part/project-child'); ?>
    </div>
  </div>
</section>

<section>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h4>Template: Archive-projects.php</h4>
      </div>
    </div>
  </div>
</section>

<?php
get_footer();
?>