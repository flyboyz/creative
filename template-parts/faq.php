<?php
$faq = get_field( 'faq' );
?>
<section class="faq container-lg mx-auto">
	<div class="heading"><span>Частые вопросы</span></div>
	<div class="divide-y divide-dashed">
		<?php foreach ( $faq as $item ): ?>
			<article>
				<header><?php echo $item['q']; ?></header>
				<div>
					<p><?php echo $item['a']; ?></p>
				</div>
			</article>
		<?php endforeach; ?>
	</div>
</section>