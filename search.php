<?php
get_header();
?>

<section class="search-page">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <div class="search_title">
          <h1 class="title">
            <?php 
            printf(__('Search Result For: %s', 'proNitu'), get_search_query());
            ?>
          </h1>
        </div>
        <?php get_template_part('template_part/blog_setup'); ?>
      </div>
      <div class="col-md-4">
        <?php get_sidebar('sidebar-1'); ?>
      </div>
    </div>
  </div>
</section>

<section>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1>Template: Search.php</h1>
      </div>
    </div>
  </div>
</section>
<?php
get_footer();
?>