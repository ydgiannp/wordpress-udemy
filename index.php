<?php
/**
 * The main template file
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists
 *
 * Methods for TimberHelper can be found in the /lib sub-directory
 *
 * @package  WordPress
 * @subpackage  Timber
 * @since   Timber 0.1
 */
$context = Timber::context();

$metro_args = array(
    'post_type' => 'post',
    'posts_per_page' => 4,
    'tax_query' =>
        array(
            'taxonomy' => 'category',
            'field' => 'slug',
            'terms' => 'metropolitan'
        )
);

$context['metropolitan_posts'] = Timber::get_posts( $metro_args );

$olahraga_args = array(
    'post_type' => 'post',
    'posts_per_page' => 4,
    'tax_query' =>
        array(
            'taxonomy' => 'category',
            'field' => 'slug',
            'terms' => 'olahraga'
        )
);

$context['sport_posts'] = Timber::get_posts( $olahraga_args );

$opini_args = array(
    'post_type' => 'post',
    'posts_per_page' => 4,
    'tax_query' =>
        array(
            'taxonomy' => 'category',
            'field' => 'slug',
            'terms' => 'opini'
        )
);

$context['opini_posts'] = Timber::get_posts( $opini_args );

$context['menu'] = new Timber\Menu( 'menu-1' );

$context['sport'] = new Timber\Term('olahraga');
$context['metro'] = new Timber\Term('metropolitan');
$context['opini'] = new Timber\Term('opini');


$templates = array( 'index.twig' );

if ( is_home() ) {
	array_unshift( $templates, 'front-page.twig', 'home.twig' );
}

Timber::render( $templates, $context );

?>