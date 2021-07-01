<?php
/* Template name: Лист бумаги */

get_header();
if ( have_posts() ): ?>
	<section>
		<div class="container mx-auto">
			<?php the_title( '<h1 class="dots">', '</h1>' ); ?>
			<div class="bg-white">
				<?php the_content(); ?>
			</div>
		</div>
	</section>
<?php
endif;
get_footer();
