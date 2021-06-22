<?php

get_header();
if ( have_posts() ):
	the_post();
	?>
    <div class="container mx-auto">
		<?php
		the_title( '<h1 class="heading"><span>', '</span></h1>' );
		the_content();
		?>
    </div>
<?php
endif;
get_footer();
