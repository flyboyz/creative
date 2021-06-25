<a href="<?php echo get_the_permalink(); ?>" class="card">
	<div class="h-full w-full aspect-w-16 aspect-h-9">
		<?php
		the_post_thumbnail( 'large', [ 'class' => 'card__image' ] ) ?>
	</div>
	<div class="card__info">
		<div class="card__cost">
			<?php echo file_get_contents( get_template_directory() . '/images/icons/ticket.svg' ); ?>
			<span><?php the_cost() ?></span>
		</div>
		<div class="flex justify-between">
			<div class="card__title"><?php the_title(); ?></div>
			<div class="card__age"><?php the_age(); ?></div>
		</div>
	</div>
</a>