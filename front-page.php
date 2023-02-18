<?php
get_header();

?>

<!-- Owl Carsoule starts here -->
<section id="owl-area">
  <div id="owl-slider" class="owl-carousel owl-theme">
    <?php
    query_posts('post_type=slider&post_status=publish&posts_per_page=-1&order=ASC&paged='. get_query_var('post'));
    if(have_posts()) :
      while(have_posts()) : the_post();
    ?>
    <div>
      <a href="<?php the_permalink(); ?>"> <?php echo the_post_thumbnail('slider'); ?>
      </a>
    </div>
    <?php
    endwhile;
    endif;
    ?>
  </div>
</section>

<!--========== Project starts here ========-->
<section id="projects">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <?php 
         $config= get_option('proNitu_options');
        ?>
        <div class="C-title wow fadeInUp">
          <h1 class="cat"> <?php echo $config['first_heading'];?></h1>
        </div>
      </div>
      <?php
      query_posts('post_type=projects&post_status=publish&posts_per_page=4&order=ASC&paged=' . get_query_var('post'));
      if(have_posts()) :
        while(have_posts()) : the_post();
      ?>
      <div class="col-md-12 col-sm-12 col-xl-6">
        <div class="child_service wow zoomIn">
          <h2><?php the_title(); ?></h2>
          <p class="custom-author">পোস্ট করেছেন <?php the_author();?> </p>
          <p class="custom-dt"><i class="fas fa-calendar-alt"></i>
            </i><?php echo the_time('D, j - F Y');?>
            <span>At</span> <i class="fas fa-clock"></i> <?php echo the_time('g:i a');?>
          </p>
          <?php echo the_post_thumbnail('projects'); ?>
          <?php the_excerpt(); ?>
        </div>
        <div class="custom-cat wow zoomIn">
          <?php the_category(); ?>
        </div>
      </div>
      <?php
      endwhile;
    endif;
      ?>

    </div>
    <div class="row">
      <div class="col-md-12 text-center">
        <?php 
        $config = get_option('proNitu_options');
        ?>
        <div class="project-link">
          <a href="<?php print home_url() ?>/projects">
            <?php echo $config['first_btn_text']; ?>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>


<!--========== Service starts here ========-->
<section id="service">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <?php 
         $config= get_option('proNitu_options');
        ?>
        <div class="C-title wow fadeInUp">
          <h1 class="cat"><?php echo $config['second_heading'];?></h1>
        </div>
      </div>
      <?php
      query_posts('post_type=service&post_status=publish&posts_per_page=8&order=ASC&paged=' . get_query_var('post'));
      if(have_posts()) :
        while(have_posts()) : the_post();
      ?>
      <div class="col-md-6 col-sm-12 col-xl-4">
        <div class="child_service wow zoomIn">
          <h2><?php the_title(); ?></h2>
          <p class="custom-author">পোস্ট করেছেন <?php the_author();?> </p>
          <p class="custom-dt"><i class="fas fa-calendar-alt"></i>
            </i><?php echo the_time('D, j - F Y');?>
            <span>At</span> <i class="fas fa-clock"></i> <?php echo the_time('g:i a');?>
          </p>
          <?php the_post_thumbnail('service');?>
          <?php the_excerpt(); ?>
        </div>
        <div class="custom-cat wow zoomIn">
          <?php the_category(); ?>
        </div>
      </div>
      <?php
      endwhile;
    endif;
      ?>
      <!-- Page nave here -->
      <!-- <div id="page_nav">
        <?php if('proNitu_pagenav'){proNitu_pagenav();}else{?>
        <?php next_posts_link();?>
        <?php previous_posts_link();?>
        <?php } ?>
      </div> -->

    </div>
    <div class="row">
      <div class="col-md-12 text-center">
        <?php
        $config = get_option('proNitu_options');
        ?>
        <div class="service-link">
          <a href="<?php print home_url() ?>/service">
            <?php echo $config['second_btn_text']; ?>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>


<!--========== Display Post by category ========-->

<section id="categories">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="C-title wow fadeInUp">
          <?php
          $config = get_option('proNitu_options');
          ?>
          <h1 class="cat">
            <?php echo $config['first_category']; ?>
          </h1>
        </div>
        <?php
      $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
      
      $args = array(
        'post_type' => 'projects',
        'post_status' => 'publish',
        'cat_name' => ' <?php echo $config["first_category"]?>',
        'posts_per_page' => 3,
        'paged' => $paged,
        );
        $arr_posts = new WP_Query($args);

        if($arr_posts->have_posts()) :
        while($arr_posts->have_posts()) : $arr_posts->the_post();
        ?>
        <div class="col-md-12">
          <div class="child_service wow zoomIn">
            <h2><?php the_title(); ?></h2>
            <?php echo the_post_thumbnail('projects'); ?>
            <?php the_excerpt(); ?>
          </div>
          <div class="custom-cat wow zoomIn">
            <?php the_category(); ?>
          </div>
        </div>

        <?php
      endwhile;
    endif;
      ?>
      </div>

      <!-- Display post by category-->
      <div class="col-md-6">
        <div class="C-title wow fadeInUp">
          <?php
          $config = get_option('proNitu_options');
          ?>
          <h1 class="cat">
            <?php echo $config['sceond_category']; ?>
          </h1>

        </div>
        <?php
      $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
      $args = array(
        'post_type' => 'service',
        'post_status' => 'publish',
        'cat_name' => '<?php echo $config["sceond_category"]; ?>',
        'posts_per_page' => 3,
        'paged' => $paged,
        'order' => 'ASC',
        );
        $arr_posts = new WP_Query($args);

        if($arr_posts->have_posts()) :
        while($arr_posts->have_posts()) : $arr_posts->the_post();
        ?>
        <div class="col-md-12">
          <div class="child_service wow zoomIn">
            <h2><?php the_title(); ?></h2>
            <?php echo the_post_thumbnail('projects'); ?>
            <?php the_excerpt(); ?>
          </div>
          <div class="custom-cat wow zoomIn">
            <?php the_category(); ?>
          </div>
        </div>

        <?php
      endwhile;
    endif;
      ?>
      </div>
    </div>
  </div>
</section>
<!-- DisplY Post by Category -->
<section id="categories">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-xl-8">
        <div class="C-title wow fadeInUp">
          <?php
          $config = get_option('proNitu_options');
          ?>
          <h1 class="cat">
            <?php echo $config['three_category']; ?>
          </h1>
        </div>
        <?php
      $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
      $args = array(
        'post_type' => 'post',
        'post_status' => 'publish',
        'cat_name' => '<?php echo $config["three_category"]; ?>',
        'posts_per_page' => 3,
        'paged' => $paged,
        'order' => 'ASC',
        );
        $arr_posts = new WP_Query($args);

        if($arr_posts->have_posts()) :
        while($arr_posts->have_posts()) : $arr_posts->the_post();
        ?>
        <div class="col">
          <div class="d-child_service wow zoomIn">
            <div class="d-child-img">
              <?php echo the_post_thumbnail('projects'); ?>
            </div>
            <div class="d-child-desh">
              <a href="<?php echo the_permalink(); ?>" class="">
                <h2><?php the_title(); ?></h2>
              </a>
              <div class="post-date">
                <p><i class="fas fa-calendar"></i> <?php echo the_time('D, j-F, Y');?>
                  <span>at</span> <i class="fas fa-clock"></i> <?php echo the_time('g:i a');?>
                </p>
              </div>
              <?php the_excerpt(); ?>
            </div>
          </div>
        </div>
        <?php
      endwhile;
    endif;
      ?>
      </div>

      <!-- Display post by category-->
      <div class="col-md-6 col-xl-4">
        <div class="C-title wow fadeInUp">
          <?php
          $config = get_option('proNitu_options');
          ?>
          <h1 class="cat">
            <?php echo $config['four_category']; ?>
          </h1>
        </div>
        <?php
      $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
      $args = array(
        'post_type' => 'post',
        'post_status' => 'publish',
        'cat_name' => '<?php echo $config["four_category"]; ?>',
        'posts_per_page' => 3,
        'paged' => $paged,
        );
        $arr_posts = new WP_Query($args);

        if($arr_posts->have_posts()) :
        while($arr_posts->have_posts()) : $arr_posts->the_post();
        ?>
        <div class="col">
          <div class="d-child_service wow zoomIn">
            <div class="d2-child-desh">
              <a href="<?php echo the_permalink(); ?>" class="">
                <h2><?php the_title(); ?></h2>
              </a>
              <div class="post-date">
                <p><i class="fas fa-calendar"></i> <?php echo the_time('D, j-F, Y');?>
                </p>
              </div>
            </div>
            <div class="d2-child-img">
              <?php echo the_post_thumbnail('projects'); ?>
            </div>
          </div>
        </div>
        <?php
      endwhile;
    endif;
      ?>
      </div>
    </div>
  </div>
</section>




<?php
get_footer();
?>