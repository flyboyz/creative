<?php
get_header();
if ( have_posts() ):
	get_template_part( 'template-parts/hero' );
	?>
	<section class="content">
		<div class="container">
			<?php the_content() ?>
		</div>
	</section>
	<?php
	get_template_part( 'template-parts/photo-gallery' );
	get_template_part( 'template-parts/map' );
endif;
get_footer();
