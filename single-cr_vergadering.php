<?php
/*
Template Name: Vergaderingpagina
*/
?>
<?php get_header(); ?>

<div class="container">

  <div class="vergaderingen">
    <div class="row">
      <div class="col-md-10 offset-md-1">

            <?php $audio    = get_field('audio_opname');  ?>
            <?php $notulen  = get_field('notulen');  ?>

            <div class="titels">
              <h3><?php the_field( 'datum' )?></h3>
              <h2><?php the_title(); ?></h2>
            </div>

            <h3>Introductie</h3>
            <p><?php the_field( 'introductie_tekst' )?></p>

            <h3>Vergadering terugluisteren</h3>
            <audio controls>
              <source src="<?=$audio['url'];?>" type="audio/ogg">
              <source src="<?=$audio['url'];?>" type="audio/mpeg">
            Your browser does not support the audio element.
            </audio>

            <p><?php echo the_content(); ?></p>

            <a class="btn" target="_blank" href="<?=$notulen['url'];?>">Download notulen</a>

      </div>
    </div>
    <div class="row">
      <div class="col-md-10 offset-md-1">
        <div class="voorafgaand">

          <h3>Voorafgaande vergaderingen</h3>
          <div class="andere-vergaderingen">
            <?php
              query_posts(array(
                'post_type' => 'cr_vergadering',
                'showposts' => 11
              ) );
              ?>

              <?php while (have_posts()) : the_post(); ?>
                <div class="agenda-item">
                  <div class="row row-eq-height">
                    <div class="col-md-4">
                      <span><?php the_field( 'datum' )?></span>
                    </div>
                    <div class="col-md-8">
                      <a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
                      <?php the_field( 'locatie' )?>
                    </div>
                  </div>

                </div>


              <?php endwhile;?>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>

<?php get_footer(); ?>
