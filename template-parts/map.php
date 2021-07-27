<?php
$heading = is_single() ? 'Где находится ' . get_the_title() . '?' : 'Где мы находимся?';
$coord   = get_field( 'coord' ) ?? '45.1884, 33.3592';
$zoom    = get_field( 'coord' ) ? 17 : 15;
?>
<section class="p-0">
	<h2 class="heading dots"><?php echo $heading ?></h2>
	<div class="map">
		<?php echo do_shortcode( "[yamap center='$coord' zoom='$zoom' height='100%' type='yandex#map' controls='typeSelector;zoomControl' mobiledrag='0'][yaplacemark coord='$coord' icon='islands#dotIcon' color='#de547b' name='Placemark'][/yamap]" ) ?>
	</div>
</section>