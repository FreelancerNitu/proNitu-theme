<?php
get_header();
?>

<section id="audio-page">
  <div class=" container">
    <div class="row">
      <div class="col-md-12">
        <div class="single_post">
          <?php get_template_part('template_part/post_setup', get_post_format() ); ?>
          <div class="audio-area">
            <audio src="<?php echo $post->guid; ?>" alt="<?php the_title(); ?>"></audio>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Template Name -->
<section>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h4>Template: Audio.php</h4>
      </div>
    </div>
  </div>
</section>

<?php
get_footer();
?>