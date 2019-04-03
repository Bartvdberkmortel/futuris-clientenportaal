<!DOCTYPE html>
<html lang="nl">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="apple-touch-icon" sizes="180x180" href="/img/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/img/favicon-16x16.png">
    <link rel="manifest" href="/img/site.webmanifest">
    <link rel="mask-icon" href="/img/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title><?php bloginfo( 'title' ); ?></title>
    <?php wp_head(); ?>
  </head>
  <body>
    <header>

      <nav class="navbar navbar-expand-md navbar-light" role="navigation">
        <div class="container">
      	<!-- Brand and toggle get grouped for better mobile display -->
      	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
      		<span class="navbar-toggler-icon"></span>
      	</button>
      	<a class="navbar-brand" href="#"><img src="<?php bloginfo('template_url'); ?>/img/logo-futuris.svg"></a>
      		<?php
      		wp_nav_menu( array(
      			'theme_location'    => 'primary',
      			'depth'             => 2,
      			'container'         => 'div',
      			'container_class'   => 'collapse navbar-collapse',
      			'container_id'      => 'bs-example-navbar-collapse-1',
      			'menu_class'        => 'nav navbar-nav ml-auto',
      			'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
      			'walker'            => new WP_Bootstrap_Navwalker(),
      		) );
      		?>
      	</div>
      </nav>

      <div class="container">
        <div class="intro">
          <?php if( get_field('titel') ) : ?>
            <h1><?php the_field('titel'); ?></h1>
          <?php elseif (is_singular('post')): ?>
            <h1><?php the_title(); ?></h1>
          <?php elseif (is_singular('cr_vergadering')): ?>
            <h1>Vergaderingen</h1>
          <?php elseif (is_singular('agenda')): ?>
            <h1><?php the_title(); ?></h1>
          <?php else: ?>
            <h1><?php the_field('standaard_titel', 'option'); ?></h1>
          <?php endif; ?>

          <?php if( get_field('subtitel') ) : ?>
            <h2><?php the_field('subtitel'); ?></h2>
          <?php elseif (is_singular('post')): ?>
            <h2><?php the_date(); ?> | <?php the_author(); ?></h2>
          <?php elseif (is_singular('cr_vergadering')): ?>
            <h2>Alle in’s & out’s van de laatste vergaderingen</h2>
          <?php elseif (is_singular('agenda')): ?>
            <h2><?php the_author(); ?> | <?php the_field( 'locatie' )?></h2>
          <?php else: ?>
            <h2><?php the_field('standaard_subtitel', 'option'); ?></h2>
          <?php endif; ?>

        </div>
      </div>

    </header>


    <div class="content">
