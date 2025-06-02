<?php
/**
 * Title: Storegrid Hero Section
 * Slug: wcs-storegrid/storegrid-hero
 * Categories: banner
 * Block Types: core/post-content
 * Post Types: post, page
 * Viewport Width: 1400
 * @package wcs-storegrid
 */

?>
<!-- wp:cover {"url":"<?php echo esc_url( get_theme_file_uri( 'assets/images/hero.jpg' ) ); ?>","dimRatio":50,"minHeight":500,"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}}} -->
<div class="wp-block-cover alignfull" style="padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);min-height:500px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim"></span><img class="wp-block-cover__image-background" alt="" src="<?php echo esc_url( get_theme_file_uri( 'assets/images/hero.jpg' ) ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:heading {"textAlign":"center","level":1,"textColor":"white"} -->
<h1 class="wp-block-heading has-text-align-center has-white-color has-text-color"><?php esc_html_e('Welcome to the Woods','wcs-storegrid') ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","textColor":"white"} -->
<p class="has-text-align-center has-white-color has-text-color"><?php esc_html_e('Discover the magic of nature and explore the beauty of the woods.','wcs-storegrid') ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"white","textColor":"base","className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-base-color has-white-background-color has-text-color has-background wp-element-button" style="text-transform:uppercase"><?php esc_html_e('Explore','wcs-storegrid') ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div></div>
<!-- /wp:cover -->