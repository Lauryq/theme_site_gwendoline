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

function register_post_types() {
	
    // CPT description
    $labels = array(
        'name' => 'description',
        'all_items' => 'Tous les description',  // affiché dans le sous menu
        'singular_name' => 'description',
        'add_new_item' => 'Ajouter un description',
        'edit_item' => 'Modifier le description',
        'menu_name' => 'description'
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

	register_post_type( 'description', $args );

    // CPT parcours
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

    // CPT Actualités
    $labels = array(
        'name' => 'actualites',
        'all_items' => 'Tous les actualites',  // affiché dans le sous menu
        'singular_name' => 'actualites',
        'add_new_item' => 'Ajouter un actualites',
        'edit_item' => 'Modifier le actualites',
        'menu_name' => 'actualites'
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

	register_post_type( 'actualites', $args );

    // CPT sponsors
    $labels = array(
        'name' => 'sponsors',
        'all_items' => 'Tous les sponsors',  // affiché dans le sous menu
        'singular_name' => 'sponsors',
        'add_new_item' => 'Ajouter un sponsors',
        'edit_item' => 'Modifier le sponsors',
        'menu_name' => 'sponsors'
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

	register_post_type( 'sponsors', $args );
}
add_action( 'init', 'register_post_types' ); // Le hook init lance la fonction
