<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php $is_title = get_post_meta($post->ID, 'sp_show_title', true); 
		$align_title = get_post_meta($post->ID, 'sp_align_title', true);  
		if ( $is_title == 'on' ) : ?>
		<header class="entry-header">
			<h1 class="entry-title" style="text-align: <?php echo $align_title; ?>;"><?php the_title(); ?></h1>
		</header>
	<?php endif; ?>

	<div class="entry-content">
		<?php the_content(); ?>
	</div><!-- .entry-content -->
</article><!-- #post-## -->