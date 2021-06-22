<?php

$post_type = get_post_type();
get_header();
?>
    <div class="container mx-auto">
        <div class="heading">
            <span><?= get_the_archive_title() ?></span>
        </div>
		<?php
		if ( have_posts() ):
			?>
            <div class="grid grid-cols-3">
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
<?php
get_footer();
