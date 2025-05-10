<?php
/**
 * Plugin Name: Meta Box Template
 * Plugin URI:  http://metabox.io/plugins/meta-box-template
 * Description: Configure meta boxes easily via YAML templates.
 * Version:     1.2.4
 * Author:      MetaBox.io
 * Author URI:  https://metabox.io
 * License:     GPL2+
 */

// Prevent loading this file directly
if ( ! defined( 'ABSPATH' ) ) {
	return;
}

if ( ! function_exists( 'mb_template_load' ) ) {
	if ( file_exists( __DIR__ . '/vendor' ) ) {
		require __DIR__ . '/vendor/autoload.php';
	}

	add_action( 'init', 'mb_template_load', 0 );

	function mb_template_load() {
		if ( ! defined( 'RWMB_VER' ) ) {
			return;
		}

		list( , $url ) = RWMB_Loader::get_path( __DIR__ );
		define( 'MB_TEMPLATE_DIR', __DIR__ );
		define( 'MB_TEMPLATE_URL', $url );

		$parser = new MBTemplate\Parser;

		if ( is_admin() ) {
			new MBTemplate\Settings( $parser );
		}
		new MBTemplate\Register( $parser );
	}
}
