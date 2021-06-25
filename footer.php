</main>
<footer class="footer">
	<div class="container mx-auto flex justify-between items-center">
		<div class="flex items-center">
			<img src="<?php echo get_template_directory_uri() ?>/images/logo.png"
			     class="max-h-20 mr-3" alt="logo">
			<div>
				<p class="text-2xl">8 (928) 900-00-00</p>
				<p class="mt-2">Все права защищены ©&nbsp;<?php echo date( 'Y' ) ?></p>
			</div>
		</div>
		<div class="socials">123</div>
		<?php
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
