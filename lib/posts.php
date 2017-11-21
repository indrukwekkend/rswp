<?php

namespace Roots\Sage\Posts;

/**
 * Theme Post Types
 */
function register_cuztom_post_types() {

	// Registering Custom Post Types
	// https://codex.wordpress.org/Function_Reference/register_post_type

	$name = 'book';
	
	$labels = [
		'name' => _x( $name, 'Post Type General Name', 'sage' ),
		'singular_name' => _x( $name , 'Post Type Singular Name', 'sage' ),
	];
	
	$args = [
		'label' => __( 'Post Type', 'sage' ),
		'description' => __( 'Post Type Description', 'sage' ),
		'labels' => $labels,
		'supports' => ['title', 'editor', 'thumbnail',],
		'hierarchical' => false,
		'menu_position' => 5, // 5 - below posts, 15 - below links, 20 - below pages, 25 - below comments, 60 below first seperator, 65 - below plugins, 70 - below users, 75 - below tools, 80 - below settings, 100 - below second seperator
		'menu_icon' => 'dashicons-category', // https://developer.wordpress.org/resource/dashicons
	];
	$book = register_cuztom_post_type( $name, $args );
	
	$book->addTaxonomy('merk');

}
add_action( 'init', __NAMESPACE__ . '\\register_cuztom_post_types' );
?>