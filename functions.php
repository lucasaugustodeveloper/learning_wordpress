<?php
// ativando menu dinamico
function register_my_menus() {
    register_nav_menus (
        array(
                'header-menu' => __('Menu Header')
            )
    );
}

add_action('init', register_my_menus);

// Meus post- types
function register_post_types() {
    // Habilidades
    register_post_type('habilidades',
        array(
            'labels' => array(
                'name' => __('Habilidades'),
                'singular_name' => __('Habilidade')
            ),
            'public' => true,
            'has_archive' => true,
            'menu_icon' => 'dashicons-welcome-learn-more',
            'supports' => array('title', 'thumbnail', 'page-attributes')
        )
    );

    register_post_type('slide',
        array(
            'labels' => array(
                'name' => __('Slides'),
                'singular_name' => __('Slide')
            ),
            'public' => true,
            'has_archive' => true,
            'menu_icon' => 'dashicons-format-gallery',
            'supports' => array('title', 'page-attributes', 'editor')
        )
    );
}
add_action('init', register_post_types);

// Tamanho dinamico para thumbs
function register_size_thumbs() {
    // ativando suporte a imagem destacada
    add_theme_support('post-thumbnails');

    add_image_size('portfolio_thumb', 265, 150, true);
}
add_action('after_setup_theme', 'register_size_thumbs');
