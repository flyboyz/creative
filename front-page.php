<?php

$attractions = new WP_Query( [
	'post_type'      => 'attraction',
	'posts_per_page' => - 1,
] );

get_header();
if ( have_posts() ) {
	the_post();
}
get_template_part( 'template-parts/hero' );
?>
	<div class="container mx-auto">
		<?php
		the_content(); ?>
	</div>
	<div class="container mx-auto">
		<div class="heading"><span>Наши музеи</span></div>
		<div class="attraction-list">
			<?php
			while ( $attractions->have_posts() ) {
				$attractions->the_post();
				get_template_part( 'template-parts/content/attraction' );
			}
			wp_reset_postdata();
			?>
		</div>
	</div>
<?php
get_template_part( 'template-parts/feedback' );
get_template_part( 'template-parts/faq' );
get_template_part( 'template-parts/contacts' );
get_footer();
