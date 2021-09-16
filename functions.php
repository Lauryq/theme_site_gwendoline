<?php

// Lier le style.css
// wp_enqueue_style( 
//     'style.css',
//     get_stylesheet_uri(), 
//     array(), 
//     '1.0'
// );

// Lier le JS
wp_enqueue_script( 
    'js/script.js',
);

// function register_my_menu(){
//   register_nav_menu( 'main-menu', 'Menu principal' );
// }
// add_action( 'after_setup_theme', 'register_my_menu' );

function register_post_types() {
	
    // CPT Portfolio
    $labels = array(
        'name' => 'parcours',
        'all_items' => 'Tous les parcours',  // affiché dans le sous menu
        'singular_name' => 'parcours',
        'add_new_item' => 'Ajouter un parcours',
        'edit_item' => 'Modifier le parcours',
        'menu_name' => 'parcours'
    );

	$args = array(
        'labels' => $labels,
        'public' => true,
        'show_in_rest' => true,
        'has_archive' => true,
        'supports' => array( 'title', 'editor','thumbnail' ),
        'menu_position' => 5, 
        'menu_icon' => 'dashicons-admin-customizer',
	);

	register_post_type( 'parcours', $args );
}
add_action( 'init', 'register_post_types' ); // Le hook init lance la fonction

add_theme_support( 'wp-block-styles' );
add_theme_support( 'align-wide' );