<?php
/**
 * The template for displaying single pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_child
 * @since Twenty Twenty Child 1.0
 */

get_header('frontpage');
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
