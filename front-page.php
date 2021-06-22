<?php

$attractions = get_posts( [
	'post_type' => 'attraction',
] );

get_header();
if ( have_posts() ):
	?>
    <div class="top-image">
		<?php
		the_post_thumbnail(); ?>
    </div>
	<?php
	the_post();
endif;
?>
    <div class="container mx-auto">
		<?php
		the_content(); ?>
    </div>
    <div class="container mx-auto">
        <div class="heading"><span>Наши музеи</span></div>
        <div class="grid grid-cols-3">
			<?php
			foreach ( $attractions as $attraction ): ?>
                <div class="card">
					<?php
					echo get_the_post_thumbnail( $attraction->ID, 'large',
						[ 'class' => 'card__back' ] ) ?>
                    <span class="card__title"><?php
						echo $attraction->post_title ?></span>
                </div>
			<?php
			endforeach; ?>
        </div>
    </div>
    <div class="section">
        <div class="heading"><span>Отзывы</span></div>
    </div>
    <div class="section">
        <div class="heading"><span>Вопросы и ответы</span></div>
    </div>
    <div class="section section_no-padding map">
        <div class="heading"><span>Контакты</span></div>
        <img src="<?= get_template_directory_uri() ?>/images/map.png" alt="map">
    </div>
<?php
get_footer();
