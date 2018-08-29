
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
add_action( 'wp_enqueue_scripts', 'dl_enqueue_style');

function dl_enqueue_scripts() {
    $theme_data = wp_get_theme();

    wp_deregister_script( 'jquery' );
    wp_deregister_script( 'jquery-migrate' );

    wp_register_script('jquery-mio', get_parent_theme_file_uri('assets/js/jquery.min.js'), null, '2.1.4', true);

    wp_register_script('waypoints', get_parent_theme_file_uri('assets/js/jquery.waypoints.min.js'), 'jquery-mio', '2.1.4', true);
    wp_register_script('jquery-easing', get_parent_theme_file_uri('assets/js/jquery.jquery.easing.1.3.js'), 'jquery-mio', '2.1.4', true);
    wp_register_script('bootstrap', get_parent_theme_file_uri('assets/js/bootstrap.min.js'), 'jquery-mio', '2.1.4', true);
    wp_register_script('google_map', get_parent_theme_file_uri('assets/js/google_map.js'), 'jquery-mio', '2.1.4', true);
    wp_register_script('main', get_parent_theme_file_uri('assets/js/main.js'), 'jquery-mio', '2.1.4', true);
    wp_register_script('modernizr', get_parent_theme_file_uri('assets/js/modernizr-2.6.2.min.js'), 'jquery-mio', '2.1.4', true);
    wp_register_script('owl-carousel', get_parent_theme_file_uri('assets/js/owl.carousel.min.js'), 'jquery-mio', '2.1.4', true);
    wp_register_script('respond-min', get_parent_theme_file_uri('assets/js/respond.min.js'), 'jquery-mio', '2.1.4', true);


    wp_enqueue_script('jquery-mio');
    wp_enqueue_script('waypoints');
    wp_enqueue_script('jquery-easing');
    wp_enqueue_script('bootstrap');
    wp_enqueue_script('google_map');
    wp_enqueue_script('main');
    wp_enqueue_script('modernizr');
    wp_enqueue_script('owl-carousel');
    wp_enqueue_script('respond-min');



}

add_action( 'wp_enqueue_scripts', 'dl_enqueue_scripts');
?>

