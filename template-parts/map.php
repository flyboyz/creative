<?php
$heading = is_single() ? 'Где находится ' . get_the_title() . '?' : 'Где мы находимся?';
?>
<section class="pb-0">
	<h2 class="heading dots"><?php echo $heading ?></h2>
	<img src="<?= get_template_directory_uri() ?>/images/map.png" alt="map" class="block">
</section>