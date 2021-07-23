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
				<div class="hero__cost">
					<?php the_cost(); ?>
				</div>
			<?php else: ?>
				<div class="hero__text">
					<?php echo get_field( 'hero_text' ); ?>
				</div>
			<?php endif; ?>
		</div>
	</div>
</div>