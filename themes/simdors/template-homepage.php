<?php
/**
 * The template for displaying the homepage.
 *
 * This page template will display any functions hooked into the `homepage` action.
 * By default this includes a variety of product displays and the page content itself. To change the order or toggle these components
 * use the Homepage Control plugin.
 * https://wordpress.org/plugins/homepage-control/
 *
 * Template name: Homepage
 *
 * @package storefront
 */
$sliderPosts = get_field('slide_choise', get_queried_object_id());
$count = 0;
$benefitsPosts = get_field('benefits_choise', get_queried_object_id());
$reviewPosts = get_field('reviews_choise', get_queried_object_id());
$countRew = 0;

get_header(); ?>
	<main>
		<div id="slider" class="carousel slide" data-interval="3000" data-ride="carousel">
			<ol class="carousel-indicators">
			<?php foreach($sliderPosts as $post){ setup_postdata($post); ?>
				<li data-target="#slider" data-slide-to="<?php echo $count; ?>" class="<?php if ($count == 0) { echo 'active'; } ?>"></li>	
				<?php $count++; ?>
			<?php 
			  }
			  wp_reset_postdata();
			?>
			</ol>   
			<?php $count = 0; ?>
			<div class="carousel-inner">
			<?php foreach($sliderPosts as $post){ setup_postdata($post); 
			$count++;
			?>
		  	<div class="<?php if ($count == 1) { echo 'active'; } ?> item" id="slide<?php echo $count; ?>" style="background-image: url(?php echo get_field('slide_img', get_the_ID()); ?>);">
		  	  <div class="container">
		  	  	<div class="row">
		  	  		<div class="col-md-6">
		  				<div class="content">
		  					<h2><?php the_title(); ?></h2>
		  					<?php the_content(); ?>
		  					<p class="important"><?php echo get_field('link_to', get_the_ID()); ?></p>
		  					<a href="<?php echo get_field('subtext', get_the_ID()); ?>" class="button">Узнать подробнее</a>
		  				</div>
		  			</div>
		  	  	</div>
		  	  </div>
		  	</div>
		  <?php 
		    }
		    wp_reset_postdata();
		  ?>
		  </div>		 
		</div>
		<div class="container video">
			<div class="row">
				<div class="col-md-6 col-md-push-6 col-sm-12">
					<h2>О нас</h2>
					<p><?php echo get_field('about_text', get_queried_object_id()); ?></p>
					<p class="important"><?php echo get_field('about_subtext', get_queried_object_id()); ?></p>
				</div>
				<div class="col-md-6 col-md-pull-6 col-sm-12">
					<iframe width="100%" height="366" src="<?php echo get_field('about_video_link', get_queried_object_id()); ?>" frameborder="0" allowfullscreen></iframe>
				</div>
				
			</div>
		</div>
		<div class="advantages background">
			<div class="container">
				<div class="row">
					<h2 class="center">Наши преимущества</h2>
					<p class="important"><?php echo get_field('benefits_text', get_queried_object_id()); ?></p>
					<?php foreach($benefitsPosts as $post){ setup_postdata($post); ?>
						<div class="col-md-3 col-sm-6">
							<img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), full); ?>" alt=""/>
							<h5><?php the_title(); ?></h5>
							<p class="text"><?php the_content(); ?></p>	
						</div>
					<?php 
					  }
					  wp_reset_postdata();
					?>
				</div>
			</div>
		</div>
		<div class="container products">
			<div class="row">
				<div class="col-md-6">
					<div class="text">
						<h2><?php echo get_field('products_title_1', get_queried_object_id()); ?></h2>
						<p><?php echo get_field('products_text_1', get_queried_object_id()); ?></p>
						<a href="" class="button">Подробнее</a>
					</div>
				</div>
				<div class="col-md-6">
					<div class="text">
						<h2><?php echo get_field('products_title_2', get_queried_object_id()); ?></h2>
						<p><?php echo get_field('products_text_2', get_queried_object_id()); ?></p>
						<a href="" class="button">Подробнее</a>
					</div>
				</div>
			</div>
		</div>
		<div class="production background">
			<h2 class="center">Наше производство</h2>
			<div class="container">
				<div class="col-md-3 col-sm-6">
					<div class="pic" id="metal"></div>
					<div class="text">
						<h4><b>Металлические</b> двери</h4>
						<a href="#" class="button">Подробнее</a>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="pic" id="fire-resist"></div>
					<div class="text">
						<h4><b>Противопожарные</b> двери</h4>
						<a href="#" class="button">Подробнее</a>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="pic" id="tech"></div>
					<div class="text">
						<h4><b>Технические</b> двери</h4>
						<a href="#" class="button">Подробнее</a>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="pic" id="nonstandart"></div>
					<div class="text">
						<h4><b>Нестандартные</b> двери и люки</h4>
						<a href="#" class="button">Подробнее</a>
					</div>
				</div>
			</div>
		</div>
		<div class="container reviews">
			<h2 class="center">Отзывы</h2>
			<div id="rev-slider" class="carousel slide" data-interval="3000" data-ride="carousel">
				<ol class="carousel-indicators">
				<?php foreach($reviewPosts as $post){ setup_postdata($post); ?>
					<li data-target="#rev-slider" data-slide-to="<?php echo $countRew; ?>" class="<?php if ($countRew == 0) { echo 'active'; } ?>"></li>	
					<?php $countRew++; ?>
				<?php 
				  }
				  wp_reset_postdata();
				?>
				</ol>   
				<?php $countRew = 0; ?>
				<div class="carousel-inner">
				<?php foreach($reviewPosts as $post){ setup_postdata($post); 
					$countRew++;
					?>
				  	<div class="<?php if ($countRew == 1) { echo 'active'; } ?> item" id="review<?php echo $countRew; ?>">
						<div class="col-md-2 col-md-offset-1">
							<img src="<?php echo get_field('review_img', get_the_ID()); ?>" alt="">
						</div>
			  	  		<div class="col-md-8">
		  					<h3><?php the_title(); ?></h3>
		  					<span class="company"><?php echo get_field('review_position', get_the_ID()); ?></span>
		  					<p class="text"><?php echo get_field('review_text', get_the_ID()); ?></p>
			  			</div>
				  	</div>
				<?php 
				  }
				wp_reset_postdata();
				?>
				</div>
				<a class="carousel-control left" href="#rev-slider" data-slide="prev">
					<span class="fa-angle-left"></span>
				</a>
				<a class="carousel-control right" href="#rev-slider" data-slide="next">
					<span class="fa-angle-right"></span>
				</a>				
			</div>
		</div>
		<div class="license">
			<h2 class="center">Лицензии</h2>
			<?php $images = acf_photo_gallery('license_choise', get_queried_object_id()); 
			if( count($images) ):
			foreach($images as $image):
				$id = $image['id']; // The attachment id of the media
				$title = $image['title']; //The title
				$caption= $image['caption']; //The caption
				$full_image_url= $image['full_image_url']; //Full size image url
				$full_image_url = acf_photo_gallery_resize_image($full_image_url, 231, 327); //Resized size to 262px width by 160px height image url
				$thumbnail_image_url= $image['thumbnail_image_url']; //Get the thumbnail size image url 150px by 150px
				$url= $image['url']; //Goto any link when clicked
				$target= $image['target']; //Open normal or new tab
				$alt = get_field('photo_gallery_alt', $id); //Get the alt which is a extra field (See below how to add extra fields)
				$class = get_field('photo_gallery_class', $id); //Get the class which is a extra field (See below how to add extra fields)
			?>
			<img src="<?php echo $full_image_url; ?>" alt="<?php echo $title; ?>" title="<?php echo $title; ?>">
			<?php endforeach; endif; ?>
		</div>
	</main>

	<?php
	get_footer();
