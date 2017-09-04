<?php
/**
 *
 * Template name: Партнерам
 *
 * @package storefront
 */
get_header(); ?>
<main>		
	<div class="container">
		<div class="page-head">
			<h2>Партнёрам</h2>
			<div class="breadcrumbs">
				<a href="index.php">Главная</a>
				/
				<span>Партнерам</span>
			</div>
		</div>
		<?php while ( have_posts() ) : the_post(); 
			the_content();
		endwhile; // End of the loop. ?>
		
		<div class="advantages brown ">				
			<div class="row">
				<div class="col-md-3 col-sm-6">
					<img src="<?php echo get_field('about_benefit_img_1', get_the_ID()); ?>" alt=""/>
					<h5><?php echo get_field('about_benefit_title_1', get_the_ID()); ?></h5>
					<p class="text"><?php echo get_field('about_benefit_text_1', get_the_ID()); ?></p>
				</div>
				<div class="col-md-3 col-sm-6">
					<img src="<?php echo get_field('about_benefit_img_2', get_the_ID()); ?>" alt=""/>
					<h5><?php echo get_field('about_benefit_title_2', get_the_ID()); ?></h5>
					<p class="text"><?php echo get_field('about_benefit_text_2', get_the_ID()); ?></p>
				</div>			
				<div class="col-md-3 col-sm-6">
					<img src="<?php echo get_field('about_benefit_img_3', get_the_ID()); ?>" alt=""/>
					<h5><?php echo get_field('about_benefit_title_3', get_the_ID()); ?></h5>
					<p class="text"><?php echo get_field('about_benefit_text_3', get_the_ID()); ?></p>
				</div>
				<div class="col-md-3 col-sm-6">
					<img src="<?php echo get_field('about_benefit_img_4', get_the_ID()); ?>" alt=""/>
					<h5><?php echo get_field('about_benefit_title_4', get_the_ID()); ?></h5>
					<p class="text"><?php echo get_field('about_benefit_text_4', get_the_ID()); ?></p>
				</div>
			</div>
		</div>
		<div class="contact-form">
			<h4>Свяжитесь с нами по контактному телефону:  <a href="tel:+<?php echo preg_replace("/[^0-9]/", '', get_field('about_phone', get_the_ID())); ?>"><?php echo get_field('about_phone', get_the_ID()); ?></a></h4>
			<p>или оставьте ваши контактные данные и мы вам обязательно перезвоним</p>	
			<?php echo do_shortcode('[contact-form-7 id="80" title="Форма партнерам"]'); ?>
		</div>
	</div>
</main>
<?php get_footer(); ?>