<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package starbelly
 */

?>

<h2 class="sb-cate-title sb-mb-15"><?php echo esc_html__( 'Nothing Found', 'starbelly' ); ?></h2>
<div class="sb-text sb-mb-30">
	<?php
  if ( is_home() && current_user_can( 'publish_posts' ) ) :
  	printf(
  		'<p>' . wp_kses(
  			/* translators: 1: link to WP admin new post page. */
  			__( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'starbelly' ),
  			array(
  				'a' => array(
  					'href' => array(),
  				),
  			)
  		) . '</p>',
  		esc_url( admin_url( 'post-new.php' ) )
  	);
  elseif ( is_search() ) : ?>
	<p><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'starbelly' ); ?></p>
  <?php else : ?>
	<p><?php esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'starbelly' ); ?></p>
  <?php endif; ?>
</div>
