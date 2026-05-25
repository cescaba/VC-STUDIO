<?php
/**
 * Customizer settings
 */

if (!defined('ABSPATH')) {
    exit;
}

function vcstudio_customize_register($wp_customize) {
    // Add custom color sections
    $wp_customize->add_section('vcstudio_colors', array(
        'title'       => __('VC Studio Colors', 'vcstudio-theme'),
        'description' => __('Personaliza los colores del tema', 'vcstudio-theme'),
        'priority'    => 30,
    ));

    // Primary color
    $wp_customize->add_setting('vcstudio_primary_color', array(
        'default'           => '#2f00ff',
        'sanitize_callback' => 'sanitize_hex_color',
    ));

    $wp_customize->add_control(
        new WP_Customize_Color_Control($wp_customize, 'vcstudio_primary_color', array(
            'label'       => __('Color primario', 'vcstudio-theme'),
            'section'     => 'vcstudio_colors',
            'settings'    => 'vcstudio_primary_color',
        ))
    );

    // Secondary color
    $wp_customize->add_setting('vcstudio_secondary_color', array(
        'default'           => '#17bebb',
        'sanitize_callback' => 'sanitize_hex_color',
    ));

    $wp_customize->add_control(
        new WP_Customize_Color_Control($wp_customize, 'vcstudio_secondary_color', array(
            'label'       => __('Color secundario', 'vcstudio-theme'),
            'section'     => 'vcstudio_colors',
            'settings'    => 'vcstudio_secondary_color',
        ))
    );
}
add_action('customize_register', 'vcstudio_customize_register');
