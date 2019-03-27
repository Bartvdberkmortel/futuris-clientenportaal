<?php get_header(); ?>

<div class="container">
  <div class="row">
    <div class="col-md-10 offset-md-1">
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <?php endwhile; endif; ?>

      <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Open popup</button> -->

      <!-- Laatste 10 Nieuwsberichten inladen wanneer het de homepagina is -->
      <?php if( is_front_page() ):

        $args = array( 'numberposts' => 10 );
        $lastposts = get_posts( $args );

        foreach($lastposts as $post) : setup_postdata($post); ?>
          <div class="row">
            <div class="col-md-3">
              <?php the_post_thumbnail('thumbnail', array('class' => 'your-class-name'));?>
            </div>
            <div class="col-md-9">
              <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
              <p><?php the_date(); ?> | <?php the_author(); ?></p>
              <?php the_content( $more_link_text , $strip_teaser ); ?> 
            </div>
          </div>
        <?php endforeach;

      endif; ?>

    <?php include('includes/popup.php'); ?>
    </div>
    <div class="col">
      <!-- <?php echo do_shortcode( '[poll id="2"]' ); ?> -->
    </div>

  </div>

</div>


<?php get_footer(); ?>
