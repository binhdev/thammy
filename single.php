<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package thammy
 */

get_header();
?>
<div class="clear"></div>
<div class="container">
	<div class="map-border">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );

			// the_post_navigation();


		endwhile; // End of the loop.
		?>

	</div>
</div>
<?php
get_footer();
?>
