<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package storefront
 */

?>
<div id="post-<?php the_ID(); ?>" class="container">
	<div class="container">
		<div class="page-head">
			<?php if ( apply_filters( 'woocommerce_show_page_title', true ) ) : ?>
			<h2><?php the_title(); ?></h2>
			<?php endif; ?>
			<?php
			/**
			 * Functions hooked in to storefront_content_top
			 *
			 * @hooked woocommerce_breadcrumb - 10
			 */
			do_action( 'storefront_content_top' );
			?>
		</div>
	<?php
	/**
	 * Functions hooked in to storefront_page add_action
	 *
	 * @hooked storefront_page_header          - 10
	 * @hooked storefront_page_content         - 20
	 */
	do_action( 'storefront_page' );
	?>
	</div>
</div><!-- #post-## -->
