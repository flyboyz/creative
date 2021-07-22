</main>
<footer class="footer">
    <div class="container flex justify-between items-center">
        <div class="flex items-center">
            <img src="<?php
			echo get_template_directory_uri() ?>/images/logo.png"
                 class="max-h-20 mr-3" alt="logo">
            <div>
                <a href="tel:+79289000000" class="text-2xl">8 (928)
                    900-00-00</a>
                <p class="mt-2">Все права защищены ©&nbsp;<?php
					echo date( 'Y' ) ?></p>
            </div>
        </div>
        <div class="socials">
            <a href="https://www.instagram.com/?hl=ru" class="instagram">
				<?php
				echo file_get_contents( get_template_directory() . '/images/icons/social-instagram.svg' ); ?>
            </a>
            <!--
			<a href="https://ru-ru.facebook.com/" class="facebook">
				<?php
			echo file_get_contents( get_template_directory() . '/images/icons/social-facebook.svg' ); ?>
			</a>
			<a href="https://vk.com/" class="vk">
				<?php
			echo file_get_contents( get_template_directory() . '/images/icons/social-vk.svg' ); ?>
			</a>
			<a href="https://ok.ru/" class="ok">
				<?php
			echo file_get_contents( get_template_directory() . '/images/icons/social-ok.svg' ); ?>
			</a>
			-->
        </div>
		<?php
		wp_nav_menu( [
			'theme_location' => 'footer',
			'container'      => '',
			'menu_class'     => 'footer-col',
		] ); ?>
    </div>
</footer>
<?php
get_sidebar();
wp_footer();
