<!doctype html>
<html <?php
language_attributes(); ?>>
<head>
    <meta charset="<?php
	bloginfo( 'charset' ); ?>"/>
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
	<?php
	wp_head(); ?>
</head>
<body <?php
body_class(); ?>>
<?php
wp_body_open(); ?>
<header class="header bg-white shadow-md">
	<div class="container flex justify-between items-center">
		<a href="/" class="flex items-center">
			<img src="<?php
			echo get_template_directory_uri() ?>/images/logo.png"
                 class="max-h-20 mr-3" alt="logo">
        </a>
		<?php
		wp_nav_menu( [
			'theme_location' => 'header',
			'container'      => '',
			'menu_class'     => 'header-menu flex flex-1 justify-center mx-10',
		] ); ?>
	    <div class="right-block">
		    <div class="hamburger" id="sidebarButton" data-fancybox data-src="#sidebar">
			    <div class="bar bar_1"></div>
			    <div class="bar bar_2"></div>
			    <div class="bar bar_3"></div>
		    </div>
	    </div>
    </div>
</header>
<main>