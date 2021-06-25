<?php

get_header();
if ( have_posts() ):
	get_template_part( 'template-parts/hero' );
	?>
	<div class="age">Возрастное ограничение: <?php the_age(); ?></div>
	<div class="content bg-main">
		<div class="container mx-auto">
			<?php the_content() ?>
		</div>
	</div>
	<?php get_template_part( 'template-parts/feedback' ); ?>
	<div class="heading"><span>Где находится <?php the_title() ?>?</span></div>
	<img src="<?= get_template_directory_uri() ?>/images/map.png" alt="map" class="block">
<?php
endif;
get_footer();
