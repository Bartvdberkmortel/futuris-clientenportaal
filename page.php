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
        $lastposts = get_posts( $args );?>

        <div class="nieuws">
          <div class="titels">
            <h3>Subtitel boven nieuws</h3>
            <h2>Laatste nieuwsberichten</h2>
          </div>

        <?php foreach($lastposts as $post) : setup_postdata($post); ?>

          <div class="nieuwsbericht <?php if ($post === end($lastposts)):?>laatste<?php endif; if ($post === reset($lastposts)):?>eerste<?php endif; ?>">
            <div class="row">
              <div class="col-md-3">
                <?php if (has_post_thumbnail( $post->ID ) ): ?>
                  <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
                  <div class="afbeelding-container">
                    <span class="afbeelding" style="background-image: url('<?php echo $image[0]; ?>')"></span>
                  </div>

                <?php else:
                  $standaardafbeelding = get_field('standaard_nieuwsafbeelding', 'option');
                ?>
                  <div class="afbeelding-container">
                    <span class="afbeelding" style="background-image: url('<?php echo $standaardafbeelding['url']; ?>')"></span>
                  </div>

                <?php endif; ?>

                <!-- <?php the_post_thumbnail('thumbnail', array('class' => 'mx-auto d-block'));?> -->
              </div>
              <div class="col-md-9">
                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <p class="data"><?php the_date(); ?> | <?php the_author(); ?></p>
                <p><?php echo wp_trim_words( get_the_content(), 25, '' ); ?> ...</p>
                <a class="lees-meer" href="<?php the_permalink(); ?>">Lees verder</a>
              </div>
            </div>

            <hr>
          </div>



        <?php endforeach; ?>

        </div>

      <?php endif; ?>

    <?php include('includes/popup.php'); ?>
    </div>
    <div class="col">
      <!-- <?php echo do_shortcode( '[poll id="2"]' ); ?> -->
    </div>

  </div>

</div>


<?php get_footer(); ?>
