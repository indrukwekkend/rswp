<?php

namespace Roots\Sage\Posts;

/**
 * Theme Post Types
 */
function register_cuztom_post_types() {

	// Registering Custom Post Types
	// https://codex.wordpress.org/Function_Reference/register_post_type

	// Activiteiten
	$labels = [
		'name' => _x( 'Activiteiten', 'General Name', 'sage' ),
		'singular_name' => _x( 'Activiteit' , 'Singular Name', 'sage' ),
		'add_new' => _x('Nieuwe activiteit', 'sage'),
		'add_new_item' => _x('Activiteit toevoegen', 'sage'),
		'edit_item' => _x('Activiteit aanpassen', 'sage'),
		'new_item' => _x('Nieuwe activiteit toevoegen', 'sage'),
		'view_item' => _x('Bekijk activiteit', 'sage'),
		'view_items' => _x('Bekijk activiteiten', 'sage'),
	];

	$args = [
		'label' => __( 'Activiteiten', 'sage' ),
		'description' => __( 'Activiteiten', 'sage' ),
		'labels' => $labels,
		'supports' => ['title', 'editor', 'thumbnail',],
		'hierarchical' => false,
		'menu_position' => 5, // 5 - below posts, 15 - below links, 20 - below pages, 25 - below comments, 60 below first seperator, 65 - below plugins, 70 - below users, 75 - below tools, 80 - below settings, 100 - below second seperator
		'menu_icon' => 'dashicons-universal-access', // https://developer.wordpress.org/resource/dashicons
	];
	$post_type = register_cuztom_post_type( 'activity', $args );

	// Vacatures
	$labels = [
		'name' => _x( 'Vacatures', 'General Name', 'sage' ),
		'singular_name' => _x( 'Vacature' , 'Singular Name', 'sage' ),
		'add_new' => _x('Nieuwe vacature', 'sage'),
		'add_new_item' => _x('Vacature toevoegen', 'sage'),
		'edit_item' => _x('Vacature aanpassen', 'sage'),
		'new_item' => _x('Nieuwe vacature toevoegen', 'sage'),
		'view_item' => _x('Bekijk vacature', 'sage'),
		'view_items' => _x('Bekijk vacatures', 'sage'),
	];

	$args = [
		'label' => __( 'Vacatures', 'sage' ),
		'description' => __( 'Vacatures', 'sage' ),
		'labels' => $labels,
		'supports' => ['title', 'editor', 'thumbnail',],
		'hierarchical' => false,
		'menu_position' => 6, // 5 - below posts, 15 - below links, 20 - below pages, 25 - below comments, 60 below first seperator, 65 - below plugins, 70 - below users, 75 - below tools, 80 - below settings, 100 - below second seperator
		'menu_icon' => 'dashicons-id-alt', // https://developer.wordpress.org/resource/dashicons
	];
	$post_type = register_cuztom_post_type( 'vacancy', $args );

	// Locaties
	$labels = [
		'name' => _x( 'Locaties', 'General Name', 'sage' ),
		'singular_name' => _x( 'Locatie' , 'Singular Name', 'sage' ),
		'add_new' => _x('Nieuwe locatie', 'sage'),
		'add_new_item' => _x('Locatie toevoegen', 'sage'),
		'edit_item' => _x('Locatie aanpassen', 'sage'),
		'new_item' => _x('Nieuwe locatie Toevoegen', 'sage'),
		'view_item' => _x('Bekijk locatie', 'sage'),
		'view_items' => _x('Bekijk locaties', 'sage'),
	];

	$args = [
		'label' => __( 'Locatie', 'sage' ),
		'description' => __( 'Locaties', 'sage' ),
		'labels' => $labels,
		'supports' => ['title', 'editor', 'thumbnail',],
		'hierarchical' => false,
		'menu_position' => 9, // 5 - below posts, 15 - below links, 20 - below pages, 25 - below comments, 60 below first seperator, 65 - below plugins, 70 - below users, 75 - below tools, 80 - below settings, 100 - below second seperator
		'menu_icon' => 'dashicons-location', // https://developer.wordpress.org/resource/dashicons
	];
	$post_type = register_cuztom_post_type( 'location', $args );


	// Diensten
	$labels = [
		'name' => _x( 'Diensten', 'General Name', 'sage' ),
		'singular_name' => _x( 'Dienst' , 'Singular Name', 'sage' ),
		'add_new' => _x('Nieuwe dienst', 'sage'),
		'add_new_item' => _x('Dienst toevoegen', 'sage'),
		'edit_item' => _x('Dienst aanpassen', 'sage'),
		'new_item' => _x('Nieuwe dienst toevoegen', 'sage'),
		'view_item' => _x('Bekijk dienst', 'sage'),
		'view_items' => _x('Bekijk diensten', 'sage'),
	];

	$args = [
		'label' => __( 'Diensten', 'sage' ),
		'description' => __( 'Diensten', 'sage' ),
		'labels' => $labels,
		'supports' => ['title', 'editor', 'thumbnail',],
		'hierarchical' => false,
		'menu_position' => 7, // 5 - below posts, 15 - below links, 20 - below pages, 25 - below comments, 60 below first seperator, 65 - below plugins, 70 - below users, 75 - below tools, 80 - below settings, 100 - below second seperator
		'menu_icon' => 'dashicons-category', // https://developer.wordpress.org/resource/dashicons
	];
	$post_type = register_cuztom_post_type( 'service', $args );
}
add_action( 'init', __NAMESPACE__ . '\\register_cuztom_post_types' );

/*
 * Modified Post Update messages
 */
function post_updated_messages ( $msg ) {

    global $post;

		$view_post_link_html = sprintf( ' <a href="%1$s">%2$s</a>', esc_url( get_permalink ( $post->ID ) ), __( "Activiteit bekijken", 'sage' ));
    $preview_post_link_html = sprintf( ' <a target="_blank" href="%1$s">%2$s</a>', esc_url( get_preview_post_link( $post->ID ) ), __( "Activiteit voorvertonen", 'sage' ));
    $scheduled_post_link_html = sprintf( ' <a target="_blank" href="%1$s">%2$s</a>', esc_url( get_permalink ( $post->ID ) ), __( "Activiteit voorvertonen", 'sage' ));
    $scheduled_date = date_i18n( __( 'M j, Y @ H:i' ), strtotime( $post->post_date ) );

    $msg[ 'activity' ] = array (
			0 => '', // Unused. Messages start at index 1.
			1 => __( "#Actor <strong>%s</strong> has been updated successfully.", 'sage' ) . $view_post_link_html,
			2 => __( 'Custom field updated.' ),
			3 => __( 'Custom field deleted.' ),
			4 => ( ! empty( $post->post_title ) ? sprintf( __( "The profile of <strong>%s</strong> updated.", 'sage' ), $post->post_title ) : __( "Actor's profile updated.", 'sage' )),
			5 => isset($_GET['revision']) ? sprintf( __( "Actor's profile restored to revision from %s.", 'sage' ), wp_post_revision_title( (int) $_GET['revision'], false ) ) : false,
			6 => __( "Actor's profile published.", 'sage' ) . $view_post_link_html,
			7 => __( "Actor's profile saved.", 'sage' ),
			8 => __( "Actor's profile submitted.", 'sage' ) . $preview_post_link_html,
			9 => ( ! empty( $post->post_title ) ? sprintf( __( "The profile of <strong>%s</strong> has been scheduled for publishing on <strong>%s</strong>.", 'sage' ), $post->post_title, $scheduled_date ) : sprintf( __( "Actor's profile without <strong>NAME</strong> scheduled for: %s", 'sage' ), $scheduled_date )) . $scheduled_post_link_html,
			10 => __( "Actor's profile draft <strong>updated</strong> successfully.", 'sage' ) . $preview_post_link_html,);

	return $msg;

}
//add_filter( 'post_updated_messages', __NAMESPACE__ . '\\post_updated_messages', 10, 1 );
?>
