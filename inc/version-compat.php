<?php
/**
 
 */
function zigzagblog_after_switch_theme() {
	switch_theme( WP_DEFAULT_THEME );
	unset( $_GET['activated'] );
	add_action( 'admin_notices', 'zigzagblog_upgrade_notice' );
}
add_action( 'after_switch_theme', 'zigzagblog_after_switch_theme' );

function zigzagblog_upgrade_notice() {
	$message = sprintf(  'zigzagblog requires at least WordPress version 5.1. You are running %s version . Please upgrade and try again.', strval($GLOBALS['wp_version'] ) );
	printf( '<div class="error"><p>%s</p></div>', esc_html($message ) );
}

function zigzagblog_preview() {
	if ( isset( $_GET['preview'] ) ) {
		$message =sprintf(  'zigzagblog requires at least WordPress version 5.1. You are running version %s. Please upgrade and try again.', strval($GLOBALS['wp_version']) );
		wp_die( esc_html($message) );
	}
}
add_action( 'template_redirect', 'zigzagblog_preview' );
