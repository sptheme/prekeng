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

	<!-- Start Welcome message or slogan -->
	<div id="welcome-section">	
		<div class="container clearfix">
	<?php
		// Start welcome message
		while ( have_posts() ) : the_post(); ?>
			
			<?php the_content(); ?>
			
	<?php endwhile; ?>
		</div>
	</div> <!-- .welcome -->

	<!-- Start Facilities highlight -->
	<!-- <div id="facility-section">
		<div class="container clearfix">
		<h3 class="section-title"><?php echo $home_meta['sp_facility_title'][0]; ?></h3>
		<p class="desc"><?php echo $home_meta['sp_facility_desc'][0]; ?></p>
		<?php 
			$parent_page_id = $home_meta['sp_facility_page_id'][0];
			$post_column = $home_meta['sp_column_item'][0];
			$args = array ( 'child_of' => $parent_page_id, 'sort_column' => 'menu_order' ); 
			echo sp_grid_featured_page( $args, $post_column );
		?>
		</div> 
	</div> --> <!-- .facilitys -->

	<!-- <div id="about-section">
		<div class="container clearfix">
		<h3 class="section-title">Tamarind Residence</h3>
		<p class="desc">Our apartment is a green oasis located in the southeast outskirts of Phnom Penh with only six exclusive, brand new apartments. All with a great view on the very large garden.</p>
		<a class="button" href="#">See Building Detail</a>
		</div>
	</div> --> <!-- #about-section -->

	
<?php get_footer(); ?>