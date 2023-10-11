<?php
/*
Template Name: Custom Template
Description: This is a Auto template for my WordPress site.
*/
?>



<!DOCTYPE html>
<html <?php language_attributes( ); ?>>

<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <?php wp_head(); ?>

<body>

  <header class="header header-private">
    <div class="container">
      <div class="header__top">
        <div class="logo" >
          <?php the_custom_logo(); ?>
        </div>
        <a class="phone" href="tel:<?php the_field('call_number', 6); ?>"><?php the_field('phone', 6); ?></a>
      </div>
      
    </div>
  </header>