<!DOCTYPE html>
<html <?php language_attributes(); ?>
 <head>
   <title><?php bloginfo('name'); ?> &raquo; <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>
   <meta charset="<?php bloginfo( 'charset' ); ?>">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
   <?php wp_head(); ?>
 </head>
 <body <?php body_class(); ?>>
   <header class="my-logo">
   <h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo('name'); ?></a></h1>
 </header>
 <?php wp_nav_menu( array( 'header-menu' => 'header-menu' ) ); ?>

  <div id="page">

    <nav class="gtco-nav" role="navigation">
      <div class="gtco-container">
        
        <div class="row">
          <div class="col-sm-2 col-xs-12">

            <div id="gtco-logo"><a href="index.html"><img src="<?php echo get_theme_file_uri() ?>/assets/image/vidrotemp-logo.png"></div>


          </div>
          <div class="col-xs-10 text-right menu-1">
            <ul>
              <li class="active"><a href="index.html">Inicio</a></li>
              <li><a href="/about">Nosotros</a></li>
              <li><a href="/services">Servicios</a></li>
              <li><a href="/portfolio">Portafolio</a></li>
              <li><a href="/contact">Contacto</a></li>
            </ul>
          </div>
       </div>
    </nav>
  </div>