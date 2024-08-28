<?php

/*
 * Plugin Name:       Custom Gutenberg Blocks
 * Plugin URI:        httpss://github.com/IkanPakUs/Custom-Gutenberg-Blocks
 * Description:       Make gutenberg block
 * Version:           1.0
 * Requires PHP:      7.2
 * Author:            IkanPakUs
 * Author URI:        https://ikanpakus.github.io
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       custom-gutenberg-block
*/

function cgb_uninstall_plugin() {
    $option_name = 'wporg_option';

    delete_option( $option_name );
    delete_site_option( $option_name );
}

function cgb_enqueue_block_editor() {
    wp_enqueue_style('ikp-cc-style', plugin_dir_url(__FILE__) . 'src/style.css', [], '1.0', 'all');
    wp_enqueue_script('ikp-cc-script', plugin_dir_url(__FILE__) . 'build/index.js', [], '1.0', true);
}

function cgb_enqueue_publish() {
    wp_enqueue_style('ikp-cc-style', plugin_dir_url(__FILE__) . 'src/style.css', [], '1.0', 'all');
    wp_enqueue_script('ikp-cc-script', plugin_dir_url(__FILE__) . 'build/index.js', ['wp-blocks', 'wp-element', 'wp-editor', 'wp-components', 'wp-data', 'wp-i18n'], '1.0', true);

    wp_localize_script('ikp-cc-script', 'Assets', [
        'default_image' => plugin_dir_url(__FILE__) . 'assets/default.png'
    ]);
}

register_uninstall_hook(
	__FILE__,
	'cgb_uninstall_plugin'
);

add_action( 'enqueue_block_editor_assets', 'cgb_enqueue_block_editor');
add_action( 'wp_enqueue_scripts', 'cgb_enqueue_publish');