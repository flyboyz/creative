<?php

define( 'CHANGED_PLUGINS', [ 'advanced-custom-fields-pro', 'shmapper' ] );

/**
 * Disable update changed plugins
 */
function disable_plugins_update( $update ) {
	if ( ! is_array( CHANGED_PLUGINS ) || count( CHANGED_PLUGINS ) == 0 ) {
		return $update;
	}

	if ( $update ) {
		foreach ( $update->response as $name => $val ) {
			foreach ( CHANGED_PLUGINS as $plugin ) {
				if ( stripos( $name, $plugin ) !== false ) {
					unset( $update->response[ $name ] );
				}
			}
		}
	}

	return $update;
}

add_filter( 'site_transient_update_plugins', 'disable_plugins_update' );


/**
 * Replace standard WP logo
 */
function change_login_logo() {
	$is_prod = $_SERVER['HTTP_HOST'] === 'creative.ru';
	?>
    <style type="text/css">
        body.login div#login h1 a {
            padding: 20px 40px;
            background: white url('<?= get_template_directory_uri() ?>/images/logo.png') no-repeat center;
            background-size: 100px;
        <?= $is_prod ?: 'background-blend-mode: luminosity;' ?> border-radius: 6px;
            box-shadow: 0 1px 3px rgba(0, 0, 0, .35);
        }

        #loginform .button-primary {
            background: #353535;
            border-color: black;
            box-shadow: 0 1px 0 grey;
            text-shadow: 0 -1px 1px black,
            1px 0 1px black,
            0 1px 1px black,
            -1px 0 1px black;
        }
    </style>
	<?php
}

add_action( 'login_enqueue_scripts', 'change_login_logo' );

function wide_editor() {
	echo '<style>
    .block-editor .wp-block {
      max-width: 1040px;
    }
  </style>';
}

add_action( 'admin_head', 'wide_editor' );


/**
 * Tags removing
 */
function unregister_taxonomy_post_tag() {
	register_taxonomy( 'post_tag', [] );
}

add_action( 'init', 'unregister_taxonomy_post_tag' );