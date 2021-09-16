<?php

function custom_theme()
{
    // Ajouter la prise en charge des images mises en avant
    add_theme_support('post-thumbnails');

    // Ajouter automatiquement le titre du site dans l'en-tête du site
    add_theme_support('title-tag');

    // Logo du site 
    add_theme_support('custom-logo');
}
add_action('after_setup_theme', 'custom_theme');


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

    // CPT devenir sponsor
    $labels = array(
        'name' => 'devenir_sponso',
        'all_items' => 'Tous les devenir_sponso',  // affiché dans le sous menu
        'singular_name' => 'devenir_sponso',
        'add_new_item' => 'Ajouter un devenir_sponso',
        'edit_item' => 'Modifier le devenir_sponso',
        'menu_name' => 'devenir_sponso'
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

	register_post_type( 'devenir_sponso', $args );
}
add_action( 'init', 'register_post_types' ); // Le hook init lance la fonction
