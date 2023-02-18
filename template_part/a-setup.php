<?php
$config = get_option('proNitu_options');

  if(have_posts()) :
    while(have_posts()) : the_post();
  ?>
<div class="page-section">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="blog-single-wrap">
          <div class="header">
            <div class="post-thumb">
              <a href="<?php the_permalink(); ?>"> <?php echo the_post_thumbnail('post-thumbnails'); ?></a>
            </div>
            <div class="meta-header">
              <div class="post-author">
                <?php
                  $user = wp_get_current_user();
                    if ($user) :
	               ?>
                <div class="avatar">
                  <img src=" <?php echo esc_url( get_avatar_url($user->ID) ); ?>" />
                </div>
                <?php endif; ?>
              </div>

              <!-- Social Button -->
              <div class="post-sharer">
                <?php
                $icons = $config['header_icon_list'];
                  foreach( $icons as $icon){
                ?>
                <a href="<?php $icon['social_link'];?>" target="_blank"><i class="<?php $icon['social_icon'];?>"
                    aria-hidden="true"></i></a>
                <?php
              
              }
                ?>

              </div>
            </div>
          </div>
          <h1 class=" post-title"><a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a></h1>
          <div class="post-meta">
            <div class="post-date">
              <p><i class="fas fa-calendar"></i> <?php echo the_time('D, j-F, Y');?>
                <span>at</span> <i class="fas fa-clock"></i> <?php echo the_time('g:i a');?>
              </p>
            </div>
          </div>
          <div class="post-content">
            <?php the_content();?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php
    endwhile;
     else :
      ?>
<p class="text-center"><?php _e('No post found')?></p>
<?php
 endif; ?>

<!-- Page nave here -->
<div id=" page_nav">
  <?php if('proNitu_pagenav'){proNitu_pagenav();}else{?>
  <?php next_posts_link();?>
  <?php previous_posts_link();?>
  <?php } ?>
</div>