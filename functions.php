<?php
/**
 * VC Studio Theme Functions
 */

if (!defined('ABSPATH')) {
    exit;
}

define('VCSTUDIO_THEME_VERSION', '1.0.0');
define('VCSTUDIO_THEME_DIR', get_template_directory());
define('VCSTUDIO_THEME_URI', get_template_directory_uri());

require_once VCSTUDIO_THEME_DIR . '/inc/customizer.php';

/**
 * Setup theme
 */
function vcstudio_theme_setup() {
    load_theme_textdomain('vcstudio-theme', VCSTUDIO_THEME_DIR . '/languages');
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');
    add_theme_support('menus');

    register_nav_menus([
        'primary' => __('Primary Menu', 'vcstudio-theme'),
    ]);
}
add_action('after_setup_theme', 'vcstudio_theme_setup');

/**
 * Enqueue styles and scripts
 */
function vcstudio_theme_enqueue_assets() {
    wp_enqueue_style(
        'vcstudio-main',
        VCSTUDIO_THEME_URI . '/assets/css/main.css',
        [],
        VCSTUDIO_THEME_VERSION
    );

    wp_enqueue_script(
        'vcstudio-main',
        VCSTUDIO_THEME_URI . '/assets/js/main.js',
        [],
        VCSTUDIO_THEME_VERSION,
        true
    );
}
add_action('wp_enqueue_scripts', 'vcstudio_theme_enqueue_assets');

/**
 * Default menu fallback
 */
function vcstudio_default_menu() {
    echo '<nav>';
    echo '<a href="' . esc_url(home_url('/#index')) . '" class="active">' . __('Index', 'vcstudio-theme') . '</a>';
    echo '<a href="' . esc_url(home_url('/#servicios')) . '">' . __('Servicios', 'vcstudio-theme') . '</a>';
    echo '<a href="' . esc_url(home_url('/#portfolio')) . '">' . __('Portafolio', 'vcstudio-theme') . '</a>';
    echo '<a href="' . esc_url(home_url('/#proceso')) . '">' . __('Proceso', 'vcstudio-theme') . '</a>';
    echo '</nav>';
}
