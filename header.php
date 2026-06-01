<?php
/**
 * Header template
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Audiowide&family=Poppins:wght@400;600;700;900&display=swap"
        rel="stylesheet">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <header class="nav">
    <a href="#" class="nav__brand">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-vc-white.png" alt="VC Studio" class="nav__brand-img">
    </a>
    
    <nav class="nav__links">
        <a href="#servicios">Servicios</a>
        <a href="#portafolio">Portafolio</a>
        <a href="#proceso">Proceso</a>
        <a href="#contacto" class="nav__link-contact-mobile">Contacto</a>
    </nav>
    
    <div class="nav__cta">
        <a href="#contacto" class="nav__contact">Contacto</a>
        
        <button class="nav__menu" aria-label="Menú" onclick="toggleMenu()">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round">
            <line x1="4" y1="6" x2="20" y2="6" class="line-top"></line>
            <line x1="4" y1="12" x2="20" y2="12" class="line-main"></line>
            <line x1="4" y1="18" x2="20" y2="18" class="line-bottom"></line>
            
            <line x1="5" y1="5" x2="19" y2="19" class="line-x1"></line>
            <line x1="19" y1="5" x2="5" y2="19" class="line-x2"></line>
        </svg>
        </button>
    </div>
</header>

    <main>