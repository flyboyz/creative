<?php

function register_attraction_post_type() {
	register_post_type( 'attraction', [
		'label'         => null,
		'labels'        => [
			'name'               => 'Аттракцион',
			'singular_name'      => 'Аттракцион',
			'add_new'            => 'Добавить аттракцион',
			'add_new_item'       => 'Добавление аттракциона',
			'edit_item'          => 'Редактирование аттракциона',
			'new_item'           => 'Новый аттракцион',
			'view_item'          => 'Смотреть аттракцион',
			'search_items'       => 'Искать аттракцион',
			'not_found'          => 'Не найдено',
			'not_found_in_trash' => 'Не найдено в корзине',
			'parent_item_colon'  => '',
			'menu_name'          => 'Аттракционы',
			'archives'           => 'Музеи',
		],
		'description'   => '',
		'public'        => true,
		'show_in_menu'  => null,
		'show_in_rest'  => true,
		'rest_base'     => null,
		'menu_position' => 4,
		'menu_icon'     => 'dashicons-bank',
		'hierarchical'  => false,
		'supports'      => [ 'title', 'editor', 'thumbnail' ],
		'taxonomies'    => [ 'category' ],
		'has_archive'   => true,
		'rewrite'       => true,
		'query_var'     => true,
	] );
}

add_action( 'init', 'register_attraction_post_type' );
