<?php
/**
 * Template Name: Blank Template
 * Template Post Type: post, page
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_child
 * @since Twenty Twenty Child 1.0
 */

get_header('blank');
?>

<main id="site-content" role="main">

	<?php

	if ( have_posts() ) {

		while ( have_posts() ) {
			the_post();

			get_template_part( 'template-parts/content', 'blank' );
		}
	}

	?>

</main><!-- #site-content -->

<?php get_footer('blank'); ?>
