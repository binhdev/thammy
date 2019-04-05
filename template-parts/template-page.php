<?php
/**
 * Template name: custom
 *
 * @package thammy
 */

?>
<?php
get_header();
?>
<div class="clear"></div>
<div class="container">
	<div class="map-border">
		<?php		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>
	</div>

</div>

<?php
get_footer();
?>
