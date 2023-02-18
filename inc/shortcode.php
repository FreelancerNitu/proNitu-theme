<?php 

/**************************************************
        Short code for Slider  
*************************************************/
 function slider_shortcode($atts){
   ob_start();
   $query = new WP_Query(array(
     'post_type' => 'slider',
     'posts_per_page' => -1,
     'order' => 'ASC',
     'orderby' => 'title',
   ));
   if($query->have_posts()){
     ?>
<section id="owl-area">
  <div id="owl-slider" class="owl-carousel owl-theme">
    <?php while ($query->have_posts() ) : $query->the_post(); ?>
    <div>
      <?php echo the_post_thumbnail('slider'); ?>
    </div>
    <?php
      endwhile;
      wp_reset_postdata();
      ?>
  </div>
</section>
<?php 
$myvariable = ob_get_clean();
return $myvariable;

} } 
add_shortcode('slider', 'slider_shortcode');



/**************************************************
      Shortcode for custom service
*************************************************/
 function service_shortcode($atts){
  ob_start();
  $query = new WP_Query(array(
    'post_type' => 'service',
    'posts_per_page' => 6,
    'order' => 'ASC',
    'orderby' => 'title',
  ));
  if($query->have_posts()){
    ?>
<section id="service">
  <div class="container">
    <div class="row">
      <div class="title wow fadeInUp">
        <h1>Our Services</h1>
        <hr class="dotted-hr">
      </div>
      <?php while ($query->have_posts() ) : $query->the_post(); ?>
      <div class="col-md-6">
        <div class="child_service wow zoomIn">
          <h2><?php the_title(); ?></h2>
          <p class="custom-author">Post By <?php the_author();?> </p>
          <p class="custom-dt"><i class="fas fa-calendar"></i>
            </i><?php echo the_time('D, j - F Y');?>
            <span>At</span> <i class="fas fa-clock"></i> <?php echo the_time('g:i a');?>
          </p>
          <?php echo the_post_thumbnail('service'); ?>
          <?php the_excerpt(); ?>
        </div>
        <div class="custom-cat wow zoomIn">
          <?php the_category(); ?>
        </div>
      </div>
      <?php
     endwhile;
     wp_reset_postdata();
     ?>
    </div>
  </div>
</section>
<?php 
$myvariable = ob_get_clean();
return $myvariable;

} } 
add_shortcode('service', 'service_shortcode');

 ?>