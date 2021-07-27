<?php
/* Template name: Лист бумаги */

get_header();
if ( have_posts() ): ?>
	<section>
		<div class="container">
			<?php the_title( '<h1 class="heading dots">', '</h1>' ); ?>
		</div>
		<div class="white-list content">
			<?php the_content(); ?>
		</div>
	</section>
<?php
endif;
get_footer();
