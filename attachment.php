<?php
get_header();
?>

<section id="attachement-page">
  <div class=" container">
    <div class="row">
      <div class="col-md-12">
        <div class="single_post">
          <?php get_template_part('template_part/post_setup', get_post_format() ); ?>
          <!-- <?php var_export($post); ?> -->
          <div class="attachment-area">
            <p><a href="<?php echo $post->guid; ?>">Download</a></p>
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
        <h4>Template: Attachment.php</h4>
      </div>
    </div>
  </div>
</section>

<?php
get_footer();
?>