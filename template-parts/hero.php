<div class="hero">
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