<?php

// Lier le style.css
wp_enqueue_style( 
    'style.css',
    get_stylesheet_uri(), 
    array(), 
    '1.0'
);

// Lier le JS
wp_enqueue_script( 
    'js/script.js',
);
