<?php
$faq = get_field( 'faq' );
?>
<section class="faq">
	<div class="container mx-auto">
		<h2 class="dots">Частые вопросы</h2>
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
	</div>
</section>