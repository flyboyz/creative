<?php
$attractions = new WP_Query( [
	'post_type'      => 'attraction',
	'posts_per_page' => - 1,
] );
?>
<section>
	<div class="container">
		<h2 class="dots">Наши музеи</h2>
		<div class="cards-grid">
			<?php
			while ( $attractions->have_posts() ) {
				$attractions->the_post();
				get_template_part( 'template-parts/content/attraction' );
			}
			wp_reset_postdata();
			?>
		</div>
	</div>
</section>