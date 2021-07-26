<?php
if ( $gallery = get_attraction_gallery() ): ?>
	<section class="gallery">
		<?php
		$gallery = get_attraction_gallery();

		foreach ( $gallery as $image_id ):
			?>
			<div class="aspect-w-1 aspect-h-1">
				<?php echo wp_get_attachment_image( $image_id, 'large' ); ?>
			</div>
		<?php
		endforeach;
		?>
	</section>
<?php
endif;