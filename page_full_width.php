<?php
/*
 * Template Name: Full Width Page
 */
  get_header();
?>
<section id="full-page">
  <div class=" container">
    <div class="row">
      <div class="col-md-12">
        <?php
          if(have_posts()) :
           while(have_posts()) : the_post();
         ?>
        <div class="blog_area">
          <div class="post-details">
            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
          </div>
          <div class="post_thumb">
            <a href="<?php the_permalink(); ?>"><?php echo the_post_thumbnail('post-thumbnails'); ?>
            </a>
          </div>
          <div class="post-details">
            <?php the_content();?>
          </div>
        </div>
        <?php
          endwhile;
           else :
              _e('No post found');
           endif;
         ?>

        <!-- Page nave starts here -->
        <div id="page_nav">
          <?php if('proNitu_pagenav'){proNitu_pagenav();}else{?>
          <?php next_posts_link();?>
          <?php previous_posts_link();?>
          <?php } ?>
        </div>
        <!-- Page nave ends here -->

      </div>
    </div>
  </div>
</section>

<!-- Page Name -->
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <h1>Template: Page-Full-width.php</h1>
    </div>
  </div>
</div>

<?php 
// Get main template Header 
 get_footer(); 
?>