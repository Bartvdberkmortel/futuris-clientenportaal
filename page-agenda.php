<?php
/*
Template Name: Agendapagina
*/
?>
<?php get_header(); ?>

<div class="container">

  <div class="agenda">
    <div class="row">
      <div class="col-md-10 offset-md-1">
          <!-- <div class="titels">
            <h3>Wie zijn we?</h3>
            <h2>Over ons</h2>
          </div> -->
        <?php

          query_posts(array(
            'post_type' => 'agenda',
            'showposts' => 10
          ) );
          ?>

          <?php while (have_posts()) : the_post(); ?>
            <div class="agenda-item">
              <div class="row">
                <div class="col-md-3">
                  <span><?php the_field( 'datum' )?></span>
                </div>
                <div class="col-md-9">
                  <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                  <p class="data"><?php the_author(); ?> | <?php the_field( 'locatie' )?></p>
                  <p><?php echo wp_trim_words( get_the_content(), 25, '' ); ?> ...</p>
                  <a class="lees-meer" href="<?php the_permalink(); ?>">Lees verder</a>
                </div>
              </div>

              <hr>
            </div>

          <?php endwhile;?>
      </div>
    </div>
    <div class="row">
      <div class="cta-banner">
        <div class="col-md-10 offset-md-1">
          <h2>Aanmelden voor de Cliëntenraad?</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          <?php echo do_shortcode("[contact-form-7 id='108']"); ?>
        </div>
      </div>
    </div>
  </div>

</div>

<?php get_footer(); ?>
