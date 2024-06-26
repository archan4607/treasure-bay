<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package starbelly
 */

?>

<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="single-post-text">
		<?php
			the_content();

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'starbelly' ),
				'after'  => '</div>',
			) );
		?>
	</div>
	
	<?php if ( get_edit_post_link() ) : ?>
	<div class="single-post-bottom">
		<?php
		edit_post_link(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Edit <span class="screen-reader-text">%s</span>', 'starbelly' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				get_the_title()
			),
			'<span class="edit-link">',
			'</span>'
		);
		?>
	</div>
	<?php endif; ?>
</div>
