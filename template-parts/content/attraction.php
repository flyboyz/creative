<a href="<?= get_the_permalink() ?>" class="card">
	<?php
	the_post_thumbnail() ?>
    <div class="card__panel">
        <div class="card__inner-title"><?= the_title() ?></div>
        <div class="card__author">
            <span>zxc</span>
        </div>
    </div>
</a>