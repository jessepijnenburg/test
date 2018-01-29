<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php wp_title(); ?></title>
  <?php wp_enqueue_script("jquery"); ?>
  <?php wp_head(); ?>
  </head>
  <body>

  <nav>
    <?php
    $defaults = array (
        'theme_location' => 'primary-menu',
      );
    ?>

   <?php wp_nav_menu( $defaults ); ?>
  </nav>
