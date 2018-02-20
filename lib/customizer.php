<?php

namespace Roots\Sage\Customizer;

use Roots\Sage\Assets;

/**
 * Add postMessage support
 */
function customize_register($wp_customize) {
  $wp_customize->get_setting('blogname')->transport = 'postMessage';
}
add_action('customize_register', __NAMESPACE__ . '\\customize_register');

/**
 * Customizer JS
 */
function customize_preview_js() {
  wp_enqueue_script('sage/customizer', Assets\asset_path('scripts/customizer.js'), ['customize-preview'], null, true);
}
add_action('customize_preview_init', __NAMESPACE__ . '\\customize_preview_js');


add_action( 'pre_get_posts', __NAMESPACE__ . '\\my_change_sort_order'); 
function my_change_sort_order($query){

if(is_post_type_archive( 'service' ) && !is_admin(  ) ):
//If you wanted it for the archive of a custom post type use: is_post_type_archive( $post_type )
//Set the order ASC or DESC
$query->set( 'order', 'ASC' );
//Set the orderby
$query->set( 'orderby', 'title' );
endif;    
};
