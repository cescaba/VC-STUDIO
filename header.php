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
        </nav>
        <div class="nav__cta">
            <a href="#contacto" class="nav__contact">Contacto</a>
            <button class="nav__menu" aria-label="Menú">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M3 6h18M3 12h18M3 18h18"></path>
                </svg>
            </button>
        </div>
    </header>

    <main>