<?php
// The Template For Displaying The Footer
?>
<footer id="footer-area">
  <section id="footer">
    <div class="row">
      <div class="col-md-6 col-xl-4">
        <?php dynamic_sidebar('footer-1'); ?>
      </div>
      <div class="col-md-6 col-xl-4">
        <?php dynamic_sidebar('footer-2'); ?>
      </div>
      <div class="col-md-6 col-xl-4">
        <?php dynamic_sidebar('footer-3'); ?>
      </div>
    </div>
  </section>
  <!-- Copyrights section starts here -->
  <section id="copyright">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <p> <?php echo get_theme_mod('proNitu_copyright_section'); ?>
          </p>
        </div>

      </div>
    </div>
  </section>
</footer>

<?php wp_footer(); ?>
</body>

</html>