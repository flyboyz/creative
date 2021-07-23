<?php
$faq = get_field( 'faq' );
?>
<section class="faq">
	<div class="container max-w-screen-lg">
		<h2 class="heading dots">Частые вопросы</h2>
		<div class="divide-y divide-dashed">
			<?php foreach ( $faq as $item ): ?>
				<article>
					<?php
					echo $item['q'] ? "<header>{$item['q']}</header>" : '';
					echo $item['a'] ? "<p>{$item['a']}</p>" : '';
					?>
				</article>
			<?php endforeach; ?>
		</div>
	</div>
</section>