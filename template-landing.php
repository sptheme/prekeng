<?php
/*
Template Name: Landing page
*/?>

<?php get_header(); ?>
	
	<?php // get all home meta
		$home_meta  = get_post_meta( $post->ID ); ?>

	<!-- Start Slideshow -->
	<div id="slideshow-section" class="bg-flower">
		<div class="container">
			<?php 
				$slide_number = 5;
				$slide_effect = 'slide';
				$args = array( 'posts_per_page' => $slide_number, 'post_type' => 'slideshow', 'suppress_filters' => false );
				echo sp_get_slideshow_post( $args, $slide_effect );
			?>
		</div>
	</div> <!-- #home-slider-section -->	

	<?php do_action( 'sp_start_content_wrap_html' ); ?>
		<div class="main">
	<!-- Start Welcome message or slogan -->
	<div id="welcome-section">	
	<?php
		// Start welcome message
		while ( have_posts() ) : the_post(); ?>
			
			<?php the_content(); ?>
			
	<?php endwhile; ?>
	</div> <!-- .welcome -->

	</div><!-- #main -->
	<?php get_sidebar();?>
	<?php do_action( 'sp_end_content_wrap_html' ); ?>	

	
<?php get_footer(); ?>