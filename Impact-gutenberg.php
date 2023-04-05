<?php
/*
 * Plugin name: Impact gutenberg
 * Plugin URI: http://alkoweb.ru
 * Author: Petrozavodsky
 * Author URI: http://alkoweb.ru
 * Requires PHP: 7.4
 * Version: 1.0.0
 * License: GPLv3
 */

add_action('init', 'impact_gutenberg_register_block_type');
function impact_gutenberg_register_block_type()
{
    register_block_type(__DIR__);
}

add_action('enqueue_block_editor_assets', 'impact_gutenberg_assets');

function impact_gutenberg_assets()
{
    wp_enqueue_style(
        'impact-gutenberg-block',
        plugin_dir_url(__FILE__) . 'public/css/style.css',
        [],
        '1.0.0'
    );
}