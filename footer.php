</main>
<footer class="footer py-5 text-white bg-main">
    <div class="container mx-auto flex justify-between items-center">
        <div class="footer-col">
            <div class="flex items-center">
                <img src="<?= get_template_directory_uri() ?>/images/logo.png"
                     class="max-h-20 mr-3" alt="logo">
                <p><?= get_bloginfo( 'name' ) ?>
                    <br>Все права защищены ©&nbsp;<?= date( 'Y' ) ?>
                </p>
            </div>
        </div>
		<?php
		wp_nav_menu( [
			'theme_location' => 'footer_second',
			'container'      => '',
			'menu_class'     => 'footer-col',
		] );
		wp_nav_menu( [
			'theme_location' => 'footer_third',
			'container'      => '',
			'menu_class'     => 'footer-col',
		] ); ?>
    </div>
</footer>
<?php
get_sidebar();
wp_footer();
