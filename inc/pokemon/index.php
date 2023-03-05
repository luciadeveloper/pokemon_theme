<?php

require_once(__DIR__.'/postype-pokemon.php');

function poketheme_scripts() {
	wp_enqueue_script( 'pokemon-js', get_template_directory_uri() . '/inc/pokemon/scripts.js', array(), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'poketheme_scripts' );


/**
 * Instantiate class, creating post type Pokemon
 */
global $pokemon;
$pokemon = new Pokemon\Pokemon();
