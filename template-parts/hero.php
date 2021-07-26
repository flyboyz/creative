<div class="hero">
	<div class="hero__image aspect-w-3 sm:aspect-w-8 aspect-h-3">
		<?php the_post_thumbnail( 'full-hd' ); ?>
	</div>
	<div class="hero__overlay">
		<div class="hero__container">
			<?php if ( is_single() ): ?>
				<div class="hero__title">
					<?php the_title() ?>
				</div>
				<div class="hero__age">
					Возрастное ограничение: <?php the_age(); ?>
				</div>
				<div class="hero__cost">
					<div class="">
						<?php the_cost(); ?>
					</div>
					<?php echo file_get_contents( get_template_directory() . '/images/icons/ticket-side.svg' ); ?>
				</div>
			<?php else: ?>
				<div class="hero__text">
					<?php echo get_field( 'hero_text' ); ?>
				</div>
			<?php endif; ?>
		</div>
	</div>
</div>