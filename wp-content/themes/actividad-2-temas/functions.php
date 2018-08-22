
<?php

function dl_enqueue_style() {
    $theme_data = wp_get_theme();
   
    wp_register_style('fonts', 'https://fonts.googleapis.com/css?family=Merriweather:300,400|Montserrat:400,700');
    wp_register_style('animate', get_parent_theme_file_uri('/assets/css/animate.css'), null, $theme_data->get( 'Version' ), 'screen');
    wp_register_style('bootstrap', get_parent_theme_file_uri('/assets/css/bootstrap.css'), null, $theme_data->get( 'Version' ), 'screen');
    wp_register_style('flexslider', get_parent_theme_file_uri('/assets/css/flexslider.css'), null, $theme_data->get( 'Version' ), 'screen');
    wp_register_style('icomoon', get_parent_theme_file_uri('/assets/css/icomoon.css'), null, $theme_data->get( 'Version' ), 'screen');
    wp_register_style('owlcarouselmin', get_parent_theme_file_uri('/assets/css/owl.carousel.min.css'), null, $theme_data->get( 'Version' ), 'screen');
    wp_register_style('owlthemedefaultmin', get_parent_theme_file_uri('/assets/css/owl.theme.default.min.css'), null, $theme_data->get( 'Version' ), 'screen');
    wp_register_style('style', get_parent_theme_file_uri('/assets/css/style.css'), null, $theme_data->get( 'Version' ), 'screen');
    wp_register_style('themify-icons', get_parent_theme_file_uri('/assets/css/themify-icons.css'), null, $theme_data->get( 'Version' ), 'screen');

    wp_enqueue_style('fonts');
    wp_enqueue_style('animate');
    wp_enqueue_style('bootstrap');
    wp_enqueue_style('flexslider');
    wp_enqueue_style('icomoon');
    wp_enqueue_style('owlcarouselmin');
    wp_enqueue_style('owlthemedefaultmin');
    wp_enqueue_style('style');
    wp_enqueue_style('themify-icons');
  }
  add_action( 'wp_enqueue_scripts', 'dl_enqueue_style')
?>