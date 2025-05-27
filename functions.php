<?php

/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package storegrid
 * @since 1.0.0
 */

/**
 * Enqueue the CSS files.
 *
 * @since 1.0.0
 *
 * @return void
 */
function storegrid_styles()
{
	wp_enqueue_style(
		'storegrid-style',
		get_stylesheet_uri(),
		[],
		wp_get_theme()->get('Version')
	);
	wp_enqueue_style(
		'storegrid-main-style',
		get_template_directory_uri() . '/assets/css/main.css',
		[],
		wp_get_theme()->get('Version')
	);
}
add_action('wp_enqueue_scripts', 'storegrid_styles');

/**
 * Register block patterns.
 *
 * @since 1.0.0
 * @return void
 */

function storegrid_block_patterns()
{
	if (! WP_Block_Patterns_Registry::get_instance()->is_registered('storegrid/two-column-post')) {
		register_block_pattern(
			'storegrid/two-column-post',
			[
				'title'       => __('Two Column Post', 'storegrid'),
				'description' => __('A two-column layout for displaying posts.', 'storegrid'),
				'content'     => file_get_contents(get_template_directory() . '/patterns/two-column-post.php'),
				'categories'  => ['storegrid'],
				'keywords'    => ['post', 'two-column', 'layout'],
			]
		);
	}
	if (! WP_Block_Patterns_Registry::get_instance()->is_registered('storegrid/storegrid-hero')) {
		register_block_pattern(
			'storegrid/storegrid-hero',
			[
				'title'       => __('Storegrid Hero Section', 'storegrid'),
				'description' => __('A hero section with a cover image, heading, and button.', 'storegrid'),
				'content'     => file_get_contents(get_template_directory() . '/patterns/hero.php'),
				'categories'  => ['banner'],
				'keywords'    => ['hero', 'cover', 'image', 'heading', 'button'],
			]
		);
	}
}
add_action('init', 'storegrid_block_patterns');
