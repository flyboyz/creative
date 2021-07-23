<?php

$post_type = get_post_type();
get_header();
?>
	<section>
		<div class="container">
			<h1 class="heading dots"><?= get_the_archive_title() ?></h1>
			<?php
			if ( have_posts() ):
				?>
				<div class="cards-grid">
					<?php
					while ( have_posts() ):
						the_post();
						get_template_part( "template-parts/content/$post_type" );
					endwhile; ?>
				</div>
			<?php
			else:
				get_template_part( "template-parts/content/none" );
			endif; ?>
		</div>
	</section>
<?php
get_footer();
