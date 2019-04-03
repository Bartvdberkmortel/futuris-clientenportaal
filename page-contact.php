<?php
/*
Template Name: Contactpagina
*/
$facebook = get_field('facebook', 'option');
$vimeo = get_field('vimeo', 'option');
$linkedin = get_field('linkedin', 'option');
$email = get_field('email', 'option');
$telefoonnummer = get_field('telefoonnummer', 'option');
?>
<?php get_header(); ?>

<div class="container">

  <div class="contact">
    <div class="row">
      <div class="col-md-6 offset-md-1">
        <div class="titels">
          <h3>Wij helpen je graag!</h3>
          <h2>Contactformulier</h2>
        </div>
        <p><?php the_content(); ?></p>
        <?php echo do_shortcode("[contact-form-7 id='82']"); ?>
      </div>
      <div class="col-md-3 offset-md-1">
        <div class="titels">
          <h2>Contactgegevens</h2>
        </div>

        <ul>
          <a href="mailto:<?=$email;?>"><li><?=$email;?></li></a>
          <a href="tel:<?=$telefoonnummer;?>"><li><?=$telefoonnummer;?></li></a>
        </ul>
        <div class="social">
          <a href="<?=$facebook;?>"target="_blank"><i class="fab fa-facebook-f"></i></a>
          <a href="<?=$linkedin;?>"target="_blank"><i class="fab fa-linkedin-in"></i></a>
          <a href="<?=$vimeo;?>"target="_blank"><i class="fab fa-vimeo-v"></i></a>
        </div>
      </div>
    </div>
  </div>

</div>

<?php get_footer(); ?>
