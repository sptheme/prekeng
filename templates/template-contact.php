<?php
/*
 * Template Name: Contact
 */?>

<?php get_header(); ?>
<?php do_action( 'sp_start_content_wrap_html' ); ?>
	<?php $latlng = explode(',', get_post_meta($post->ID, 'sp_lat_long_map', true)); ?>
	<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
	<script type="text/javascript">					
		jQuery(document).ready(function ($){
			var location = new google.maps.LatLng(<?php echo $latlng[0]; ?>,<?php echo $latlng[1]; ?>);
			var mapOptions = {
				zoom: 12,
				center: location
			}
			var map = new google.maps.Map(document.getElementById('branch-map'), mapOptions);
			var contentString = '<div class="map-item-info clearfix">'+
					'<img src="<?php echo aq_resize(sp_post_thumbnail("medium"), 147, 102, true); ?>">'+
	  				'<ul class="branch-info">'+
	  				'<li class="name"><h5><?php bloginfo("name"); ?></h5><li>'+
	  				'<li class="address"><?php echo get_post_meta($post->ID, "sp_address", true); ?><li>'+
	  				'<li><span class="attr">Email</span><span class="value"><a href="mailto:<?php echo get_post_meta($post->ID, "sp_email", true); ?>"><?php echo get_post_meta($post->ID, "sp_email", true); ?></a></span><li>'+
	  				'<li><span class="attr">Phone</span><span class="value"><?php echo get_post_meta($post->ID, "sp_phone", true); ?></span><li>'+
	  				'</ul>'+
					'</div>';
			var infoWindow = new google.maps.InfoWindow();

			var marker = new google.maps.Marker({
				position: location,
				map: map
			});
			google.maps.event.addListener(marker, 'click', function() {
				map.panTo(marker.getPosition());
				infoWindow.setContent(contentString);
			    infoWindow.open(map,marker);
			});
			google.maps.event.addListener(map, "click", function(){
				infoWindow.close();
			});
		});
	</script>
	<div id="branch-map"></div>

    <div class="main clearfix">
    	<div class="two-third">
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
		</div><!-- .two-third -->

		<div class="one-third last">
		<p><?php echo get_post_meta($post->ID, 'sp_intro_text', true); ?></p>
		<p><?php echo get_post_meta($post->ID, "sp_address", true); ?></p>
		<p>E-mail: <a href="mailto:<?php echo get_post_meta($post->ID, "sp_email", true); ?>"><?php echo get_post_meta($post->ID, "sp_email", true); ?></a><br>
		Phone: <?php echo get_post_meta($post->ID, "sp_phone", true); ?></p>

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
					$('#distance-photo').parent().attr('href', distancePhotos[distancePhoto]);
					$('#distance-photo').attr('src', distancePhotos[distancePhoto]);
				});
			});
		</script>
		
		<form id="distance-map">
			<label for="distance-select"><h5>Distance Table</h5></label>
			<select name="distance-select" id="distance-select">
			<?php foreach ($distance_maps as $key => $photo) { ?>
				<option value="<?php echo $key; ?>"><?php echo $photo['title']; ?></option>
			<?php } ?>
			</select>
		</form>
		<a href="<?php echo $distance_maps[0]['distance_map_photo'];?>">
			<img id="distance-photo" src="<?php echo $distance_maps[0]['distance_map_photo'];?>">
		</a>
		</div> <!-- .one-third .last -->
	</div><!-- #main -->
	<?php get_sidebar();?>
<?php do_action( 'sp_end_content_wrap_html' ); ?>
	
<?php get_footer(); ?>