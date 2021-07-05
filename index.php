<?php

get_header();
if ( have_posts() ):
	the_post();
	?>
	<section>
		<div class="container">
			<?php
			the_title( '<h1 class="heading dots">', '</h1>' );
			the_content();
			?>
		</div>
	</section>
<?php
endif;
get_footer();
