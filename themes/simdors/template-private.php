<?php
/**
 * The template for displaying the homepage.
 *
 * This page template will display any functions hooked into the `homepage` action.
 * By default this includes a variety of product displays and the page content itself. To change the order or toggle these components
 * use the Homepage Control plugin.
 * https://wordpress.org/plugins/homepage-control/
 *
 * Template name: Двери для частных
 *
 * @package storefront
 */
get_header(); ?>

<main>		
	<div class="banner" id="slide3">
	  <div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="content">
					<div>
						<h3>Услуги компании</h3>
						<?php
						/**
						 * Functions hooked in to storefront_content_top
						 *
						 * @hooked woocommerce_breadcrumb - 10
						 */
						do_action( 'storefront_content_top' );
						?>
					</div>
					<?php while ( have_posts() ) : the_post(); ?>
					<h2><?php the_title(); ?></h2>
					<?php the_content(); ?>
					<p class="important"><?php echo get_field('private_subtext', get_the_ID()); ?></p>
					<a href="<?php echo get_field('private_link_to', get_the_ID()); ?>" class="button">Узнать подробнее</a>
					<?php endwhile; // End of the loop. ?>
				</div>
			</div>
		</div>
	  </div>
	</div>
	<div class="advantages2 container">
		<h2 class="center">Наши преимущества</h2>
		<div class="row">
			<div class="col-md-3 col-sm-6">
				<img src="<?php echo get_field('our_benefits_img_1', get_queried_object_id()); ?>" alt="">
				<span><?php echo get_field('our_benefits_title_1', get_queried_object_id()); ?></span>
			</div>
			<div class="col-md-3 col-sm-6">
				<img src="<?php echo get_field('our_benefits_img_2', get_queried_object_id()); ?>" alt="">
				<span><?php echo get_field('our_benefits_title_2', get_queried_object_id()); ?></span>
			</div>
			<div class="col-md-3 col-sm-6">
				<img src="<?php echo get_field('our_benefits_img_3', get_queried_object_id()); ?>" alt="">
				<span><?php echo get_field('our_benefits_title_3', get_queried_object_id()); ?></span>
			</div>
			<div class="col-md-3 col-sm-6">
				<img src="<?php echo get_field('our_benefits_img_4', get_queried_object_id()); ?>" alt="">
				<span><?php echo get_field('our_benefits_title_4', get_queried_object_id()); ?></span>
			</div>
		</div>
	</div>
	<div id="banner3" style="background: url(<?php echo get_field('reliability_img', get_queried_object_id()); ?>) no-repeat center;">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<h2><?php echo get_field('reliability_title', get_queried_object_id()); ?></h2>
					<p class="text"><?php echo get_field('reliability_text', get_queried_object_id()); ?></p>
					<p class="important"><?php echo get_field('reliability_subtext', get_queried_object_id()); ?></p>
				</div>
			</div>
		</div>
	</div>
	<div class="container good-wrapper">
		<h2 class="center">наша продукция</h2>
		<div class="row">
			<?php
				/**
				 * woocommerce_shop_filter hook.
				 *
				 * @hooked woocommerce_products_list_front - 10
				 */
				do_action( 'woocommerce_shop_products_front' );
			?>
		</div>
		<a href="<?php echo esc_url( apply_filters( 'woocommerce_return_to_shop_redirect', wc_get_page_permalink( 'shop' ) ) ); ?>" class="button all">Посмотреть все</a>
	</div>
	<div id="banner4">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-6">
					<div class="call-form">
						<h2 class="center">Заказать звонок</h2>
						<?php echo do_shortcode('[contact-form-7 id="112" title="Заказать звонок"]'); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</main>

<?php get_footer(); ?>