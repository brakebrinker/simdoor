<?php
/**
 * The template for displaying the homepage.
 *
 * This page template will display any functions hooked into the `homepage` action.
 * By default this includes a variety of product displays and the page content itself. To change the order or toggle these components
 * use the Homepage Control plugin.
 * https://wordpress.org/plugins/homepage-control/
 *
 * Template name: Двери для юридических
 *
 * @package storefront
 */
get_header(); ?>
<main>		 
	<div class="banner" id="slide2">
	  <div class="container">
		<div class="row">
			<div class="col-md-6 col-sm-6">
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
					<p class="important"><?php echo get_field('legal_subtext', get_the_ID()); ?></p>
					<a href="<?php echo get_field('legal_link_to', get_the_ID()); ?>" class="button">Узнать подробнее</a>
					<?php endwhile; // End of the loop. ?>
				</div>
			</div>
		</div>
	  </div>
	</div>
	<div class="advantages brown">
		<div class="container">
			<div class="row">
				<h2 class="center">Наши преимущества</h2>
				<p class="important"><?php echo get_field('legal_benefits_subtext', get_queried_object_id()); ?></p>
				<div class="col-md-3 col-sm-6">
					<img src="<?php echo get_field('legal_benefits_img_1', get_queried_object_id()); ?>" alt=""/>
					<h5><?php echo get_field('legal_benefits_title_1', get_queried_object_id()); ?></h5>
					<p class="text"><?php echo get_field('legal_benefits_text_1', get_queried_object_id()); ?></p>	
				</div>
				<div class="col-md-3 col-sm-6">
					<img src="<?php echo get_field('legal_benefits_img_2', get_queried_object_id()); ?>" alt=""/>
					<h5><?php echo get_field('legal_benefits_title_2', get_queried_object_id()); ?></h5>
					<p class="text"><?php echo get_field('legal_benefits_text_2', get_queried_object_id()); ?></p>
				</div>
				<div class="col-md-3 col-sm-6">
					<img src="<?php echo get_field('legal_benefits_img_3', get_queried_object_id()); ?>" alt=""/>
					<h5><?php echo get_field('legal_benefits_title_3', get_queried_object_id()); ?></h5>
					<p class="text"><?php echo get_field('legal_benefits_text_3', get_queried_object_id()); ?></p>
				</div>
				<div class="col-md-3 col-sm-6">
					<img src="<?php echo get_field('legal_benefits_img_4', get_queried_object_id()); ?>" alt=""/>
					<h5><?php echo get_field('legal_benefits_title_4', get_queried_object_id()); ?></h5>
					<p class="text"><?php echo get_field('legal_benefits_text_4', get_queried_object_id()); ?></p>
				</div>
			</div>
		</div>
	</div>
	<div class="production background">
		<h2 class="center">Наше производство</h2>
		<div class="container">
			<?php
				/**
				 * woocommerce_shop_filter hook.
				 *
				 * @hooked woocommerce_category_list_front - 10
				 */
				do_action( 'woocommerce_shop_category_front' );
			?>
		</div>
	</div>
	<div class="container video">
		<div class="row">
			<div class="col-md-6 col-md-push-6 col-sm-12">
				<h2>Презентация</h2>
				<p><?php echo get_field('legal_presentation_text', get_queried_object_id()); ?></p>
				<p class="important"><?php echo get_field('legal_presentation_subtext', get_queried_object_id()); ?></p>
			</div>
			<div class="col-md-6 col-md-pull-6 col-sm-12">
				<iframe width="100%" height="366" src="<?php echo get_field('legal_presentation_video_link', get_queried_object_id()); ?>" frameborder="0" allowfullscreen></iframe>
			</div>
			
		</div>
	</div>
	<div id="banner5">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-6 col-sm-8 col-sm-offset-2">
					<h2>Наши достижения</h2>
					<p><span><?php echo get_field('interlink_decision', get_queried_object_id()); ?></span> Типовых решений</p>
					<p><span><?php echo get_field('interlink_partners', get_queried_object_id()); ?></span> Партнеров</p>
					<p><span><?php echo get_field('interlink_points', get_queried_object_id()); ?></span> Точек продаж</p>
					<p><span><?php echo get_field('interlink_products', get_queried_object_id()); ?></span> Выпущенных изделий</p>
					<a href="<?php echo get_field('interlink_link_to', get_queried_object_id()); ?>" class="button">Узнать больше</a>
				</div>
			</div>
		</div>
	</div>
	<div class="advantages brown">
		<div class="container">
			<div class="row">
				<h2 class="center">Наши предложения</h2>
				<p class="important"><?php echo get_field('legal_offer_subtext', get_queried_object_id()); ?></p>
				<div class="col-md-3 col-sm-6">
					<img src="<?php echo get_field('legal_offer_img_1', get_queried_object_id()); ?>" alt=""/>
					<h5><?php echo get_field('legal_offer_title_1', get_queried_object_id()); ?></h5>
					<p class="text"><?php echo get_field('legal_offer_text_1', get_queried_object_id()); ?></p>	
				</div>
				<div class="col-md-3 col-sm-6">
					<img src="<?php echo get_field('legal_offer_img_2', get_queried_object_id()); ?>" alt=""/>
					<h5><?php echo get_field('legal_offer_title_2', get_queried_object_id()); ?></h5>
					<p class="text"><?php echo get_field('legal_offer_text_2', get_queried_object_id()); ?></p>
				</div>
				<div class="col-md-3 col-sm-6">
					<img src="<?php echo get_field('legal_offer_img_3', get_queried_object_id()); ?>" alt=""/>
					<h5><?php echo get_field('legal_offer_title_3', get_queried_object_id()); ?></h5>
					<p class="text"><?php echo get_field('legal_offer_text_3', get_queried_object_id()); ?></p>
				</div>
				<div class="col-md-3 col-sm-6">
					<img src="<?php echo get_field('legal_offer_img_4', get_queried_object_id()); ?>" alt=""/>
					<h5><?php echo get_field('legal_offer_title_4', get_queried_object_id()); ?></h5>
					<p class="text"><?php echo get_field('legal_offer_text_4', get_queried_object_id()); ?></p>
				</div>
			</div>
		</div>
	</div>
	<div class="good-wrapper background">
		<div class="container">
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