<?php
require_once( __DIR__ . '/vendor/autoload.php' );
$timber = new Timber\Timber();
Timber::$dirname = array( 'templates', 'templates/shared/mods', 'twigs', 'views' );



function wpdocs_theme_name_scripts() {
    wp_enqueue_style( 'style-css', get_stylesheet_uri() );
    wp_enqueue_style( 'bootstrao-css', get_template_directory_uri() . '/assets/css/bootstrap.min.css' );
    wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), '1.0.0', true );
}

add_action( 'wp_enqueue_scripts', 'wpdocs_theme_name_scripts' );

// Add theme support for Featured Images
add_theme_support('post-thumbnails', array(
'post',
'page',
'custom-post-type-name',
));


register_sidebar( array(
    'id'          => 'single_sidebar',
    'name'        => 'Single Sidebar',
    'description' => 'Letaknya di Samping Single'
    )
);

?>