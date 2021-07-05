<div class="hero w-full aspect-w-7 aspect-h-3">
	<?php the_post_thumbnail( 'full-hd', [ 'class' => 'card__image' ] ); ?>
	<?php if ( is_single() ): ?>
		<div class="hero__content">
			<div class="hero__title">
				<?php the_title() ?>
			</div>
			<div class="hero__cost">
				<?php the_cost(); ?>
			</div>
		</div>
	<?php endif; ?>
</div>