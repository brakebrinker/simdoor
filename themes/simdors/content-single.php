<?php
/**
 * Template used to display post content on single pages.
 *
 * @package storefront
 */

?>

<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
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
	do_action( 'storefront_single_post_top' );

	/**
	 * Functions hooked into storefront_single_post add_action
	 *
	 * @hooked rem storefront_post_header          - 10
	 * @hooked storefront_post_meta            - 20
	 * @hooked storefront_post_content         - 30
	 */
	do_action( 'storefront_single_post' );

	/**
	 * Functions hooked in to storefront_single_post_bottom action
	 *
	 * @hooked storefront_post_nav         - 10
	 * @hooked storefront_display_comments - 20
	 */
	do_action( 'storefront_single_post_bottom' );
	?>
	</div>
</div><!-- #post-## -->
