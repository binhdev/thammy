<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package thammy
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<section class="title-section">
    <div class="title-wrapper">
      <div class="container">
        <div class="border-title aligncenter">
            <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
            <h6>Tôn vinh vẻ đẹp tự nhiên - Hoàn hảo đến từng đường nét</h6>
        </div>
      </div>
    </div>
	</section>

	<?php thammy_post_thumbnail(); ?>

	<div class="entry-content">
		<?php
		the_content( sprintf(
			wp_kses(
				/* translators: %s: Name of current post. Only visible to screen readers */
				__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'thammy' ),
				array(
					'span' => array(
						'class' => array(),
					),
				)
			),
			get_the_title()
		) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php //thammy_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
