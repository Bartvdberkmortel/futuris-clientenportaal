<?php
$facebook = get_field('facebook', 'option');
$vimeo = get_field('vimeo', 'option');
$linkedin = get_field('linkedin', 'option');
$email = get_field('email', 'option');
$telefoonnummer = get_field('telefoonnummer', 'option');
?>
</div>

<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<footer>
  <div class="top-footer">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <img class="logo" src="<?php bloginfo('template_url'); ?>/img/logo-futuris-kleur.svg" alt="">
          <div class="social">
            <a href="<?=$facebook;?>"target="_blank"><i class="fab fa-facebook-f"></i></a>
            <a href="<?=$linkedin;?>"target="_blank"><i class="fab fa-linkedin-in"></i></a>
            <a href="<?=$vimeo;?>"target="_blank"><i class="fab fa-vimeo-v"></i></a>
          </div>
        </div>
        <div class="col-md-4">
          <h3>Sitemap</h3>
          <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
        </div>
        <div class="col-md-4">
          <h3>Contact</h3>
          <ul>
            <a href="mailto:<?=$email;?>"><li><?=$email;?></li></a>
            <a href="tel:<?=$telefoonnummer;?>"><li><?=$telefoonnummer;?></li></a>
          </ul>
        </div>
      </div>

    </div>
  </div>
  <div class="bottom-footer">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div id="copyright">
          &copy; <?php echo esc_html( date_i18n( __( 'Y', 'blankslate' ) ) ); ?> <?php echo esc_html( get_bloginfo( 'name' ) ); ?>
          </div>
        </div>
        <div class="col-md-8">
          <?php wp_nav_menu( array( 'theme_location' => 'footer' ) ); ?>
        </div>
      </div>
    </div>



  </div>
</footer>

</body>
</html>
