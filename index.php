<?php get_header(); ?>

<div class="container">
  Dit is de index template
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <?php endwhile; endif; ?>

  <?php echo do_shortcode( '[poll id="2"]' ); ?>
</div>


<?php get_footer(); ?>
