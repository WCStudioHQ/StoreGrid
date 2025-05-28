<?php

/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package storegrid
 * @since 1.0.0
 */

// Add theme support for post formats.
if (! function_exists('storegrid_theme_support')) {
	/**
	 * Adds theme support for post formats.
	 * This function adds support for various post formats in the Storegrid theme.
	 * @since 1.0.0
	 *
	 * @return void
	 */
	function storegrid_theme_support()
	{
		add_theme_support(
			'post-formats',
			[
				'aside',
				'audio',
				'chat',
				'gallery',
				'image',
				'link',
				'quote',
				'status',
				'video'
			]
		);

		add_editor_style(get_parent_theme_file_uri('assets/css/editor-style.css'));
	}
}

add_action('after_setup_theme', 'storegrid_theme_support');


// add theme scripts.
if (! function_exists('storegrid_styles')) {
	/**
	 * Enqueue the CSS files.
	 * This function enqueues the main stylesheet and a custom stylesheet for the Storegrid theme.
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
}
add_action('wp_enqueue_scripts', 'storegrid_styles');


// Register custom block patterns.
if (! function_exists('storegrid_block_patterns')) {
	/**
	 * Register block patterns.
	 * This function registers custom block patterns for the Storegrid theme.
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
}
add_action('init', 'storegrid_block_patterns');

// Register custom block styles.
if (! function_exists('storegrid_register_block_styles')) {
	/**
	 * Register custom block styles.
	 * This function registers custom styles for the core paragraph block.
	 * @since 1.0.0
	 *
	 * @return void
	 */

	function storegrid_register_block_styles()
	{
		$styles = [
			[
				'block' => 'core/paragraph',
				'style' => [
					'name'  => 'highlight',
					'label' => __('Highlight', 'storegrid'),
					'inline_style' => '.is-style-highlight { background-color: var(--wp--preset--color--secondary); padding: 5px; }',
				],
			],
			[
				'block' => 'core/list',
				'style' => [
					'name'  => 'colored-marker',
					'label' => __('Colored Marker', 'storegrid'),
					'inline_style' => '.is-style-colored-marker li::marker { color: var(--wp--preset--color--primary); }',
				],
			],
		];

		foreach ($styles as $item) {
			register_block_style($item['block'], $item['style']);
		}
	}
}
add_action('init', 'storegrid_register_block_styles');
