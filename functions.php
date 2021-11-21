<?php

function post_customizado()
{
    register_post_type('solucoes',
        array(
            'labels' => array('name' => 'Soluções'),
            'public' => true,
            'menu_position' => 0,
            'supports' => array('title', 'editor', 'thumbnail'),
            'menu_icon' => 'dashicons-admin-site'
        )
    );
}
add_action('init','post_customizado');

function adicionando_recursos_ao_tema()
{
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'adicionando_recursos_ao_tema');

function registrando_menu()
{
    register_nav_menu(
        'menu-navegacao',
        'Menu navegação'
    );
}

add_action('init', 'registrando_menu');
