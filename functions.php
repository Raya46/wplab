<?php

function load_style(){
    wp_enqueue_style('main-style', get_stylesheet_uri());
    wp_enqueue_style('home-style', get_theme_file_uri('styles/home-style.css'));
    wp_enqueue_style('login-style', get_theme_file_uri('styles/login-style.css'));
}

function load_scripts(){
    wp_enqueue_script('hello-js', get_theme_file_uri('scripts/hello.js'), [], '1.0', true);
}

function tema_register(){
    register_nav_menu('navbar-menu', 'Navbar Menu');
}

function temaaku_login_errors(){
    session_start();
    $_SESSION['errors'] = ['Username or Password invalid'];
    wp_redirect(home_url('/login'));
}

function temaaku_register_post_type(){
    register_post_type('blogs_post', [
        'public' => true,
        'menu_position' => 4,
        'menu_icon' => 'dashicons-airplane',
        'labels' => [
            'name' => 'Blogs',
            'add_new_item' => 'Add new blog',
            'edit_item' => 'Edit the blog',
            'all_items' => 'All of our blogs',
            'singular_name' => 'Blog',
        ],
        'rewrite' => [
            'with_front' => false,
        ]
    ]);
    flush_rewrite_rules(false);
}

function katakan_halo_shortcode($attributes){
    $name = $attributes['name'] ?? '';
    return "<h2>Halo Selamat Pagi $name</h2>";
}
function register_shortcodes(){
    add_shortcode('katakanhalo', 'katakan_halo_shortcode');
}

add_action('wp_enqueue_scripts', 'load_scripts');
add_action('wp_enqueue_scripts', 'load_style');
add_action('init', 'tema_register');
add_action('login_errors', 'temaaku_login_errors');
add_action('init', 'temaaku_register_post_type');
add_action('init', 'register_shortcodes');


?>