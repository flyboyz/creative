</main>
<footer class="footer">
	<div class="container">
		<div class="footer__col">
			<div class="flex items-center">
				<a href="tel:+79782094887" class="text-3xl">8 978 209-48-87</a>
			</div>
			<p class="mt-2 text-xs">Все права защищены ©&nbsp;<?php echo date( 'Y' ) ?></p>
		</div>
		<div class="footer__col">
			<div class="socials">
				<a href="https://www.instagram.com/evpa_park/" class="instagram"
				   target="_blank" rel="noopener noreferrer" title="Instagram">
					<?php
					echo file_get_contents( get_template_directory() . '/images/icons/social-instagram.svg' ); ?>
				</a>
				<!--
			<a href="https://ru-ru.facebook.com/" class="facebook" target="_blank" rel="noopener noreferrer">
				<?php
				echo file_get_contents( get_template_directory() . '/images/icons/social-facebook.svg' ); ?>
			</a>
			<a href="https://vk.com/" class="vk" target="_blank" rel="noopener noreferrer">
				<?php
				echo file_get_contents( get_template_directory() . '/images/icons/social-vk.svg' ); ?>
			</a>
			<a href="https://ok.ru/" class="ok" target="_blank" rel="noopener noreferrer">
				<?php
				echo file_get_contents( get_template_directory() . '/images/icons/social-ok.svg' ); ?>
			</a>
			-->
			</div>
		</div>
		<div class="footer__col">
			<?php
			wp_nav_menu( [
				'theme_location' => 'footer',
				'container'      => '',
			] ); ?>
		</div>
	</div>
</footer>
<?php
get_sidebar();
wp_footer();
