<?php
/*
Template Name: Cliëntenpagina
*/
$clientenraad = get_field('clientenraadlid', 'option');
?>
<?php get_header(); ?>

<div class="container">

  <div class="clientenraad">
    <div class="row">
      <div class="col-md-10 offset-md-1">
        <div class="row">
          <div class="titels">
            <h3>Wie zijn we?</h3>
            <h2>Over ons</h2>
          </div>
        <?php
          the_content();

          if($clientenraad):

            foreach($clientenraad as $lid):
              $naam = $lid['naam'];
              $functie = $lid['functie'];
              $afbeelding = $lid['afbeelding']['url'];
            ?>
            <div class="col-md-4">
              <div class="persoon">
                <div class="afbeelding-container">
                  <span class="afbeelding" style="background-image: url('<?=$afbeelding?>')"></span>
                </div>
                <div class="gegevens">
                  <h3><?=$naam;?></h3>
                  <p><?=$functie;?></p>
                </div>

              </div>
            </div>
            <?php
            endforeach;

          endif;

        ?>
        </div>
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
