<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <!-- FontAwesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <!-- Favicon -->
    <!-- <link rel="icon" type="image/png" href="" /> -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <!-- Google Font Archivo -->
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(). '/assets/style/style.css' ?>">
    <link href="https://fonts.googleapis.com/css2?family=Archivo:ital,wght@1,600&display=swap" rel="stylesheet">
    
    
</head>

<body <?php body_class(); ?>>

<?php wp_body_open(); ?>

 <nav class="navbar">
        <a href="#navigation-menu" class="nav-logo js-anchor-link"><img src="wp-content/themes/theme-gwendoline/assets/images/logo.png" alt=""></a>
        <ul class="nav-menu">
            <li class="nav-item">
                <a href="#parcours" class="nav-link js-anchor-link">Parcours</a>
            </li>
            <li class="nav-item">
                <a href="#actualites" class="nav-link js-anchor-link">Actualités</a>
            </li>
            <li class="nav-item">
                <a href="#sponsors" class="nav-link js-anchor-link">Sponsors</a>
            </li>
            <li class="nav-item">
                <a href="#contact" class="nav-link js-anchor-link">Contact</a>
            </li> 
        </ul>
        <div class="hamburger">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </div>
    </nav>