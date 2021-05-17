<?php
/**
 * The default template for displaying content
 *
 * Used for both singular and index.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_child
 * @since Twenty Twenty Child 1.0
 */

?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<div class="post-inner <?php echo is_page_template( 'templates/template-full-width.php' ) ? '' : 'thin'; ?> ">

		<div class="entry-content">

			<?php the_post_thumbnail(); ?>

		</div><!-- .entry-content -->

	</div><!-- .post-inner -->
	<div class="section-inner">
	
		<?php edit_post_link(); ?>

	</div><!-- .section-inner -->

</article><!-- .post -->
