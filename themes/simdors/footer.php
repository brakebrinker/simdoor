<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package storefront
 */

?>

		</div><!-- .col-full -->
	</div><!-- #content -->

	<?php do_action( 'storefront_before_footer' ); ?>

	<footer>
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-sm-6">
				<?php
				/**
				 * Functions hooked in to storefront_footer action
				 *
				 * @hooked storefront_footer_widgets - 10
				 * @hooked storefront_credit         - 20
				 */
				do_action( 'storefront_footer' ); ?>
				</div>
				<div class="col-md-1 col-md-offset-7 col-sm-2 col-sm-offset-4">
				<?php do_action( 'storefront_footer_sub' ); ?>
				</div>
			</div>
		</div><!-- .col-full -->
		<div class="container">
			<div class="row">
				
			</div>
		</div>
	</footer><!-- #colophon -->

	<?php do_action( 'storefront_after_footer' ); ?>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
