<?php get_header(); ?>

<div class="container">
  <div class="row">
    <div class="col">
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <?php endwhile; endif; ?>

      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
    Open modal
  </button>

    <?php include('includes/popup.php'); ?>
    </div>
    <div class="col">
      <?php echo do_shortcode( '[poll id="2"]' ); ?>
    </div>

  </div>

</div>


<?php get_footer(); ?>
