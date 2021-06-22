<?php
/* Template name: Лист бумаги */

get_header();
if ( have_posts() ): ?>
    <div class="container container_fixed container_full-width_m-less">
        <div class="content content_background_white content_border-bottom">
			<?php
			the_title( '<h1 class="text-center">', '</h1>' );
			the_content();
			?>
        </div>
    </div>
<?php
endif;
get_footer();
