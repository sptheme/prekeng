<?php
/*
Template Name: Slideshow
*/?>

<?php get_header(); ?>
	
	<?php // get all home meta
		$home_meta  = get_post_meta( $post->ID ); ?>

	<!-- Start Slideshow -->
	<?php $meta_photos = explode( ',', get_post_meta( $post->ID, 'sp_page_gallery', true ) ); if ( !empty($meta_photos) ) : ?>
	<div id="slideshow-section" class="bg-flower">
		<div class="container clearfix">
			<?php 
				$photo_options = get_post_meta( $post->ID, 'sp_photo_options', true );
				$slide_effect = get_post_meta( $post->ID, 'sp_slide_effect', true );
				if ( $photo_options == 'slideshow' ) :  
					echo sp_get_meta_slideshow( $meta_photos, $slide_effect ); 
				else :
					echo sp_meta_gallery_html( $meta_photos );
				endif;
			?>
		</div>
	</div> <!-- #home-slider-section -->	
	<?php endif; ?>

	<?php do_action( 'sp_start_content_wrap_html' ); ?>
		<div class="main">
		<?php
			// Start the Loop.
			while ( have_posts() ) : the_post();

				// Include the page content template.
				get_template_part( SP_TEMPLATES . '/posts/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) {
					comments_template();
				}
			endwhile;
		?>
			
		</div><!-- #main -->
	<?php get_sidebar();?>
	<?php do_action( 'sp_end_content_wrap_html' ); ?>		

	
<?php get_footer(); ?>