<?php 
define('theme_version', time());

// Adding theme styles and scripts
add_action('wp_enqueue_scripts', 'af_add_theme_scripts');

function af_add_theme_scripts() {

    wp_enqueue_style(
        'theme-styles',
        get_template_directory_uri() . '/assets/styles/styles.css',
    );

    wp_enqueue_script(
        'theme-main-script',
        get_template_directory_uri() . '/assets/js/main.js',
        ['jquery'],
        theme_version,
        true
    );

    // Tailwind
    wp_enqueue_style(
        'tailwind',
        get_template_directory_uri() . '/dist/output.css',
    );

    if(is_front_page()){
        wp_enqueue_script(
            'menu-functionality',
            get_template_directory_uri() . '/assets/js/menu.js',
            ['jquery'],
            theme_version,
            true
        );
    }
}

function menu()
{
    register_nav_menus(array(
        'primary' => 'Primary Navigation'
    ));
}

add_action('after_setup_theme', 'menu');