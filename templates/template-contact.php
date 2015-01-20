<?php
/*
 * Template Name: Contact
 */?>

<?php get_header(); ?>
<?php do_action( 'sp_start_content_wrap_html' ); ?>
    <div class="main clearfix">
    	<div class="two-third">
    	<?php
			// Start the Loop.
			while ( have_posts() ) : the_post();

				// Include the page content template.
				get_template_part( SP_TEMPLATES . '/posts/content', 'page' );
				get_template_part( 'content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) {
					comments_template();
				}
			endwhile;
		?>
		</div><!-- .two-third -->

		<div class="one-third last">
		<?php $distance_maps = get_post_meta( $post->ID, 'sp_map_gallery', true ); ?>
		<script type="text/javascript">
			jQuery(document).ready(function ($){
				var distancePhotos = [
				<?php foreach ($distance_maps as $photo) { ?>
					'<?php echo $photo["distance_map_photo"]; ?>',
				<?php } ?>
				];
				$('#distance-select').change(function(){
					var distancePhoto = $(this).val();
					$('#distance-photo-full').attr('href', distancePhotos[distancePhoto]);
					$('#distance-photo').attr('src', distancePhotos[distancePhoto]);
				});
			});
		</script>
		
		<form id="distance-map">
			<label for="distance-select">Distance Table</label>
			<select name="distance-select" id="distance-select">
			<?php foreach ($distance_maps as $key => $photo) { ?>
				<option value="<?php echo $key; ?>"><?php echo $photo['title']; ?></option>
			<?php } ?>
			</select>
		</form>
		<a id="distance-photo-full" href="<?php echo $distance_maps[0]['distance_map_photo'];?>">
			<img id="distance-photo" src="<?php echo $distance_maps[0]['distance_map_photo'];?>">
		</a>
		</div> <!-- .one-third .last -->
	</div><!-- #main -->
	<?php get_sidebar();?>
<?php do_action( 'sp_end_content_wrap_html' ); ?>
	
<?php get_footer(); ?>