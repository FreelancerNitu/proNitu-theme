<section id="Related-Post">
  <div class="container">
    <div class="row">
      <div class="title wow fadeInUp">
        <h4>Related Post</h4>
        <hr class="dotted-hr">
      </div>

      <?php
        $related = new WP_Query(
          array(
           'category_in' => wp_get_post_categories($post->ID),
           'posts_per_page' => 4,
           'post__not_in' => array($post->ID),
              )
        );
          if($related->have_posts()){ 
            while($related->have_posts()) 
            { $related->the_post();
      ?>
      <div class="col-md-12 col-x-12 col-xl-6">
        <div class="child_service wow zoomIn">
          <?php 
          $guff_image = wp_get_attachment_image_src(get_post_thumbnail_id()); 
          ?>
          <a href="<?php the_permalink(); ?>"><img src="<?php echo esc_url($guff_image[0]); ?>"
              alt="<?php the_title(); ?>"></a>
          <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
          <p class="custom-dt"><i class="fas fa-calendar-alt"></i>
            </i><?php echo the_time('D, j - F Y');?>
            <span>At</span> <i class="fas fa-clock"></i> <?php echo the_time('g:i a');?>
          </p>
          <p><?php the_excerpt(); ?></p>
        </div>
      </div>
      <?php }  wp_reset_postdata(); } ?>
    </div>
  </div>
</section>