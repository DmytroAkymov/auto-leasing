
  <footer class="footer">
    <div class="container">
      <div class="footer__inner">
        <div class="logo" >
          <?php the_custom_logo(); ?>
        </div>

        <div class="social footer__social">
          <a class="social__link" href="<?php the_field('link_to_instagram'); ?>">
            <img class="social__img" src="<?php bloginfo('template_url'); ?>/assets/images/icon/instagram.svg" alt="instagram icon">
          </a>
          <a class="social__link" href="<?php the_field('link_to_telegram'); ?>">
            <img class="social__img" src="<?php bloginfo('template_url'); ?>/assets/images/icon/telegram.svg" alt="telegram icon">
          </a>
          <a class="social__link" href="<?php the_field('link_to_whatsapp'); ?>">
            <img class="social__img" src="<?php bloginfo('template_url'); ?>/assets/images/icon/whatsapp.svg" alt="whatsapp icon">
          </a>
          <a class="social__link" href="<?php the_field('link_to_facebook'); ?>">
            <img class="social__img" src="<?php bloginfo('template_url'); ?>/assets/images/icon/facebook.svg" alt="facebook icon">
          </a>
        </div>

        <a class="footer__copy" href="#">
          Политика конфиденциальности
        </a>
      </div>
    </div>
  </footer>


<?php
  	wp_footer();
?>
</body>

</html>