<?php

namespace Roots\Sage\Plugins;

/**
 * Theme Plugins
 */
function register_required_plugins() {

    $plugins = array(
        array(
            'name'               => 'Advanced Custom Fields Pro',
            'slug'               => 'advanced-custom-fields-pro',
            'source'             => '/advanced-custom-fields-pro.zip',
            'required'           => true,
            'force_activation'   => true,
            'force_deactivation' => true,
        ),
        array(
            'name'               => 'Gravity Forms',
            'slug'               => 'gravityforms',
            'source'             => '/gravityforms.zip',
            'required'           => true,
            'force_activation'   => true,
            'force_deactivation' => true,
        ),
				array(
            'name'               => 'Advanced Custom Fields: Gravityforms Add-on',
            'slug'               => 'acf-gravityforms-add-on',
            'required'           => true,
            'force_activation'   => true,
            'force_deactivation' => true,
        ),
				array(
            'name'               => 'Advanced Custom Fields: Post2Post Add-on',
            'slug'               => 'post-2-post-for-acf',
            'required'           => true,
            'force_activation'   => true,
            'force_deactivation' => true,
        ),
				array(
						'name'               => 'yoast SEO',
						'slug'               => 'wordpress-seo',
						'required'           => true,
						'force_activation'   => true,
						'force_deactivation' => true,
				),
				array(
            'name'               => 'bbPress',
            'slug'               => 'bbpress',
            'required'           => true,
            'force_activation'   => true,
            'force_deactivation' => true,
        ),
    );

    $config = array(
        'id'           => 'sage',
        'default_path' => get_template_directory() . '/lib/plugins',
        'menu'         => 'tgmpa-install-plugins',
        'parent_slug'  => 'themes.php',
        'capability'   => 'edit_theme_options',
        'has_notices'  => true,
        'dismissable'  => true,
        'is_automatic' => true,
    );

    tgmpa( $plugins, $config );
}
add_action( 'after_setup_theme', __NAMESPACE__ . '\\register_required_plugins' );
