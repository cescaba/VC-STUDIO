<?php
/**
 * Front page template
 */
get_header();
?>

<!-- HERO -->
<section class="hero" id="index">
    <video class="hero-video" autoplay muted loop playsinline>
        <source src="<?php echo get_template_directory_uri(); ?>/video-hero.mp4" type="video/mp4">
    </video>

    <div class="hero-content">
        <h1><?php _e('Construimos sitios web que ', 'vcstudio-theme'); ?><span class="accent"><?php _e('funcionan', 'vcstudio-theme'); ?></span>.</h1>
        <p class="hero-description"><?php _e('Estudio de diseño y desarrollo web para marcas que toman su presencia digital en serio.', 'vcstudio-theme'); ?></p>

        <div class="hero-cta">
            <a href="#servicios" class="btn-hero btn-hero--primary"><?php _e('Conoce más', 'vcstudio-theme'); ?></a>
            <a href="#contacto" class="btn-hero btn-hero--secondary"><?php _e('Escríbenos', 'vcstudio-theme'); ?></a>
        </div>
    </div>
</section>

<!-- SERVICIOS -->
<section id="servicios" class="services-section">
    <span class="section-label"><?php _e('SERVICIOS', 'vcstudio-theme'); ?></span>

    <div class="services-intro">
        <h2><?php _e('Diseño, ', 'vcstudio-theme'); ?><span class="accent"><?php _e('desarrollo', 'vcstudio-theme'); ?></span> <?php _e('y ', 'vcstudio-theme'); ?><span class="muted"><?php _e('consultoría', 'vcstudio-theme'); ?></span>.</h2>
        <div class="services-intro-text">
            <p><?php _e('Cuatro disciplinas integradas. Cada servicio se calibra al estado, objetivo y madurez digital del proyecto.', 'vcstudio-theme'); ?></p>
        </div>
    </div>

    <div class="services-grid">
        <!-- Servicio 1 -->
        <article class="service-card">
            <div class="service-details">
                <div class="service-header">
                    <h3><?php _e('Diseño Web', 'vcstudio-theme'); ?></h3>
                    <div class="service-tags">UI • UX • PROTOTIPO</div>
                </div>
                <p class="service-description"><?php _e('Sitios a medida centrados en marca, contenido y conversión. Investigación, arquitectura de información, wireframes, UI de alta fidelidad y prototipo navegable entregado en Figma.', 'vcstudio-theme'); ?></p>
            </div>
            <div class="service-specs">
                <div class="spec">
                    <span class="spec-label"><?php _e('Diseño personalizado', 'vcstudio-theme'); ?></span>
                    <span class="spec-value">Único para tu marca</span>
                </div>
                <div class="spec">
                    <span class="spec-label"><?php _e('UX optimizado', 'vcstudio-theme'); ?></span>
                    <span class="spec-value">Fácil y agradable de usar</span>
                </div>
                <div class="spec">
                    <span class="spec-label"><?php _e('Prototipo interactivo', 'vcstudio-theme'); ?></span>
                    <span class="spec-value">Lo apruebas antes de desarrollar</span>
                </div>
            </div>
        </article>

        <!-- Servicio 2 -->
        <article class="service-card">
            <div class="service-details">
                <div class="service-header">
                    <h3><?php _e('Desarrollo', 'vcstudio-theme'); ?></h3>
                    <div class="service-tags">NEXT.JS • CMS</div>
                </div>
                <p class="service-description"><?php _e('Sitios de alto rendimiento con optimización técnica, SEO estratégico y experiencia impecable en cualquier dispositivo. Integraciones a medida, CMS editable y motor de analítica.', 'vcstudio-theme'); ?></p>
            </div>
            <div class="service-specs">
                <div class="spec">
                    <span class="spec-label"><?php _e('Responsive', 'vcstudio-theme'); ?></span>
                    <span class="spec-value">Perfecto en móviles, tablet y desktop</span>
                </div>
                <div class="spec">
                    <span class="spec-label"><?php _e('SEO', 'vcstudio-theme'); ?></span>
                    <span class="spec-value">Google / IA</span>
                </div>
                <div class="spec">
                    <span class="spec-label"><?php _e('Hosting', 'vcstudio-theme'); ?></span>
                    <span class="spec-value">Alojamiento seguro y rápido</span>
                </div>
            </div>
        </article>

        <!-- Servicio 3 -->
        <article class="service-card">
              <div class="service-details">
                <div class="service-header">
                    <h3><?php _e('Branding Digital', 'vcstudio-theme'); ?></h3>
                    <div class="service-tags">IDENTIDAD • GUIDELINES • ARTE</div>
                </div>
                <p class="service-description"><?php _e('Sistemas de identidad pensados para entornos digitales. Logotipo, tipografía, paleta, sistema visual y manual de marca con todas las piezas listas para llevarlas a producto.', 'vcstudio-theme'); ?></p>
            </div>
            <div class="service-specs">
                <div class="spec">
                    <span class="spec-label"><?php _e('Identidad completa', 'vcstudio-theme'); ?></span>
                    <span class="spec-value">logo, colores, tipografía</span>
                </div>
                <div class="spec">
                    <span class="spec-label"><?php _e('Aplicable en todo', 'vcstudio-theme'); ?></span>
                    <span class="spec-value">web, redes, impresos</span>
                </div>
                <div class="spec">
                    <span class="spec-label"><?php _e('Manual de marca', 'vcstudio-theme'); ?></span>
                    <span class="spec-value"><?php _e('guía clara de cómo usar tu identidad', 'vcstudio-theme'); ?></span>
                </div>
            </div>
        </article>

        <!-- Servicio 4 -->
        <article class="service-card">
            <div class="service-details">
                <div class="service-header">
                    <h3><?php _e('Mantenimiento', 'vcstudio-theme'); ?></h3>
                    <div class="service-tags">PERFORMANCE • SEGURIDAD • EVOLUCIÓN</div>
                </div>
                <p class="service-description"><?php _e('Rendimiento, seguridad y evolución continua. Auditorías trimestrales, optimización de Core Web Vitals, iteración basada en datos y soporte dedicado para plataformas en producción.', 'vcstudio-theme'); ?></p>
            </div>
            <div class="service-specs">
                <div class="spec">
                    <span class="spec-label">Respuesta en 24 horas</span>
                    <span class="spec-value">rápido cuando necesitas ayuda</span>
                </div>
                <div class="spec">
                    <span class="spec-label">Seguridad y actualizaciones</span>
                    <span class="spec-value">protección contra ataques y vulnerabilidades</span>
                </div>
                <div class="spec">
                    <span class="spec-label">Reportes mensuales</span>
                    <span class="spec-value">sabes cómo está performando tu sitio</span>
                </div>
            </div>
        </article>
    </div>
</section>

<!-- PORTFOLIO -->
<section id="portafolio">
    <span class="section-label">PROYECTOS</span>

    <div class="services-intro">
        <h2><?php _e('Proyectos', 'vcstudio-theme'); ?></h2>
        <div class="services-intro-text">
            <p><?php _e('Trabajo destacado entre 2021–2026. Marcas de gastronomía, hospitalidad, retail, consultoría y tecnología.', 'vcstudio-theme'); ?></p>
        </div>
    </div>
<div class="pf">
      <div class="pf__card pf__card--w8">
        <div class="pf__card-media">
          <div class="pf__card-video-container">
            <video class="pf__card-video" poster="<?php echo get_template_directory_uri(); ?>/assets/img/casona-screen.png" id="pf-casona-video" muted>
              <source src="<?php echo get_template_directory_uri(); ?>/assets/img/casonavideo.mp4" type="video/mp4">
            </video>
            <button class="pf__card-play-btn" data-video="pf-casona-video" aria-label="Reproducir video">
              <svg class="pf__icon pf__icon--play" width="48" height="48" viewBox="0 0 48 48" fill="none" aria-hidden="true">
                <circle cx="24" cy="24" r="24" fill="white" opacity="0.9"/>
                <path d="M20 16L20 32L32 24L20 16Z" fill="#0b0a0d"/>
              </svg>
              <svg class="pf__icon pf__icon--pause" width="48" height="48" viewBox="0 0 48 48" fill="none" aria-hidden="true">
                <circle cx="24" cy="24" r="24" fill="white" opacity="0.9"/>
                <rect x="18" y="16" width="4" height="16" rx="1" fill="#0b0a0d"/>
                <rect x="26" y="16" width="4" height="16" rx="1" fill="#0b0a0d"/>
              </svg>
            </button>
          </div>
          <span class="pf__card-num">Mantenimiento · Desarrollo</span>
        </div>
        <div class="pf__card-info">
          <span class="pf__card-name">Casona</span>
          <div class="pf__card-meta-row">
            <div class="pf__card-meta"><span>Shopify</span> · <span>Plantilla Personalizada</span></div>
            <span class="pf__card-arrow">
              <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M7 17L17 7M9 7h8v8"></path></svg>
            </span>
          </div>
        </div>
      </div>

      <div class="pf__card pf__card--w4">
        <div class="pf__card-media" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/ALMA-portada.png'); background-size: cover; background-position: center;">
          <span class="pf__card-num">BRANDING</span>
        </div>
        <div class="pf__card-info">
          <span class="pf__card-name">Alma Lima</span>
          <div class="pf__card-meta-row">
            <div class="pf__card-meta"><span>HOSPITALIDAD</span></div>
            <span class="pf__card-arrow">
              <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M7 17L17 7M9 7h8v8"></path></svg>
            </span>
          </div>
        </div>
      </div>

      <div class="pf__card pf__card--w6">
        <div class="pf__card-media">
          <div class="pf__card-video-container">
            <video class="pf__card-video" poster="<?php echo get_template_directory_uri(); ?>/assets/img/huit-img.png" id="pf-huit-video" muted>
              <source src="<?php echo get_template_directory_uri(); ?>/assets/img/huit-video.mp4" type="video/mp4">
            </video>
            <button class="pf__card-play-btn" data-video="pf-huit-video" aria-label="Reproducir video">
              <svg class="pf__icon pf__icon--play" width="48" height="48" viewBox="0 0 48 48" fill="none" aria-hidden="true">
                <circle cx="24" cy="24" r="24" fill="white" opacity="0.9"/>
                <path d="M20 16L20 32L32 24L20 16Z" fill="#0b0a0d"/>
              </svg>
              <svg class="pf__icon pf__icon--pause" width="48" height="48" viewBox="0 0 48 48" fill="none" aria-hidden="true">
                <circle cx="24" cy="24" r="24" fill="white" opacity="0.9"/>
                <rect x="18" y="16" width="4" height="16" rx="1" fill="#0b0a0d"/>
                <rect x="26" y="16" width="4" height="16" rx="1" fill="#0b0a0d"/>
              </svg>
            </button>
          </div>
          <span class="pf__card-num">DISEÑO · Desarrollo</span>
        </div>
        <div class="pf__card-info">
          <span class="pf__card-name">Huit</span>
          <div class="pf__card-meta-row">
            <div class="pf__card-meta"><span>WORDPRESS</span> · <span>Plantilla Personalizada</span></div>
            <span class="pf__card-arrow">
              <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M7 17L17 7M9 7h8v8"></path></svg>
            </span>
          </div>
        </div>
      </div>

      <div class="pf__card pf__card--w6">
        <div class="pf__card-media">
          <div class="pf__card-video-container">
            <video class="pf__card-video" poster="<?php echo get_template_directory_uri(); ?>/assets/img/kama-img.png" id="pf-kama-video" muted>
              <source src="<?php echo get_template_directory_uri(); ?>/assets/img/kama-video.mp4" type="video/mp4">
            </video>
            <button class="pf__card-play-btn" data-video="pf-kama-video" aria-label="Reproducir video">
              <svg class="pf__icon pf__icon--play" width="48" height="48" viewBox="0 0 48 48" fill="none" aria-hidden="true">
                <circle cx="24" cy="24" r="24" fill="white" opacity="0.9"/>
                <path d="M20 16L20 32L32 24L20 16Z" fill="#0b0a0d"/>
              </svg>
              <svg class="pf__icon pf__icon--pause" width="48" height="48" viewBox="0 0 48 48" fill="none" aria-hidden="true">
                <circle cx="24" cy="24" r="24" fill="white" opacity="0.9"/>
                <rect x="18" y="16" width="4" height="16" rx="1" fill="#0b0a0d"/>
                <rect x="26" y="16" width="4" height="16" rx="1" fill="#0b0a0d"/>
              </svg>
            </button>
          </div>
          <span class="pf__card-num">DISEÑO · Desarrollo</span>
        </div>
        <div class="pf__card-info">
          <span class="pf__card-name">Kama</span>
          <div class="pf__card-meta-row">
            <div class="pf__card-meta"><span>WORDPRESS </span> · <span>Plantilla Personalizada</span></div>
            <span class="pf__card-arrow">
              <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M7 17L17 7M9 7h8v8"></path></svg>
            </span>
          </div>
        </div>
      </div>

      <div class="pf__card pf__card--w4 pf__card--kanapka">
        <div class="pf__card-media">
          <div class="pf__card-video-container">
            <video class="pf__card-video" poster="<?php echo get_template_directory_uri(); ?>/assets/img/kanapka-img.jpg" id="pf-kanapka-video" muted>
              <source src="<?php echo get_template_directory_uri(); ?>/assets/img/kanapka-video.webm" type="video/webm">
            </video>
            <button class="pf__card-play-btn" data-video="pf-kanapka-video" aria-label="Reproducir video">
              <svg class="pf__icon pf__icon--play" width="48" height="48" viewBox="0 0 48 48" fill="none" aria-hidden="true">
                <circle cx="24" cy="24" r="24" fill="white" opacity="0.9"/>
                <path d="M20 16L20 32L32 24L20 16Z" fill="#0b0a0d"/>
              </svg>
              <svg class="pf__icon pf__icon--pause" width="48" height="48" viewBox="0 0 48 48" fill="none" aria-hidden="true">
                <circle cx="24" cy="24" r="24" fill="white" opacity="0.9"/>
                <rect x="18" y="16" width="4" height="16" rx="1" fill="#0b0a0d"/>
                <rect x="26" y="16" width="4" height="16" rx="1" fill="#0b0a0d"/>
              </svg>
            </button>
          </div>
          <span class="pf__card-num">Branding</span>
        </div>
        <div class="pf__card-info">
          <span class="pf__card-name">Kanapka</span>
          <div class="pf__card-meta-row">
            <div class="pf__card-meta"><span>Cafetería</span></div>
            <span class="pf__card-arrow">
              <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M7 17L17 7M9 7h8v8"></path></svg>
            </span>
          </div>
        </div>
      </div>

      <div class="pf__card pf__card--w9">
        <div class="pf__card-media">
          <div class="pf__card-video-container">
            <video class="pf__card-video" id="pf-latinhall-video" poster="<?php echo get_template_directory_uri(); ?>/assets/img/latinhall-portada.png" muted playsinline>
              <source src="<?php echo get_template_directory_uri(); ?>/assets/img/latinhal-video.webm" type="video/webm">
            </video>
            <button class="pf__card-play-btn" data-video="pf-latinhall-video" aria-label="Play video">
              <svg width="48" height="48" viewBox="0 0 48 48" fill="none">
                <circle cx="24" cy="24" r="24" fill="white" opacity="0.9"/>
                <path d="M19 15v18l12-9z" fill="#0b0a0d"/>
              </svg>
            </button>
          </div>
          <span class="pf__card-num">DISEÑO · Desarrollo</span>
        </div>
        <div class="pf__card-info">
          <span class="pf__card-name">Latin Hall</span>
          <div class="pf__card-meta-row">
            <div class="pf__card-meta"><span>E-commerce · Prestashop</span></div>
            <span class="pf__card-arrow">
              <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M7 17L17 7M9 7h8v8"></path></svg>
            </span>
          </div>
        </div>
      </div>

      <div class="pf__card pf__card--w6">
        <div class="pf__card-media">
          <div class="pf__card-video-container">
            <video class="pf__card-video" id="pf-sirensips-video" poster="<?php echo get_template_directory_uri(); ?>/assets/img/sirensips-img.png" muted playsinline>
              <source src="<?php echo get_template_directory_uri(); ?>/assets/img/sirensips-video.webm" type="video/webm">
            </video>
            <button class="pf__card-play-btn" data-video="pf-sirensips-video" aria-label="Play video">
              <svg width="48" height="48" viewBox="0 0 48 48" fill="none">
                <circle cx="24" cy="24" r="24" fill="white" opacity="0.9"/>
                <path d="M20 16L20 32L32 24L20 16Z" fill="#0b0a0d"/>
              </svg>
            </button>
          </div>
          <span class="pf__card-num">Diseño · Desarrollo</span>
        </div>
        <div class="pf__card-info">
          <span class="pf__card-name">Siren Sips</span>
          <div class="pf__card-meta-row">
            <div class="pf__card-meta"><span>E-commerce · Woocommerce</span></div>
            <span class="pf__card-arrow">
              <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M7 17L17 7M9 7h8v8"></path></svg>
            </span>
          </div>
        </div>
      </div>

      <div class="pf__card pf__card--w6">
        <div class="pf__card-media">
          <div class="pf__card-video-container">
            <video class="pf__card-video" id="pf-rubicon-video" poster="<?php echo get_template_directory_uri(); ?>/assets/img/rubicon-portada.png" muted playsinline>
              <source src="<?php echo get_template_directory_uri(); ?>/assets/img/rubicon-video.webm" type="video/webm">
            </video>
            <button class="pf__card-play-btn" data-video="pf-rubicon-video" aria-label="Play video">
              <svg width="48" height="48" viewBox="0 0 48 48" fill="none">
                <circle cx="24" cy="24" r="24" fill="white" opacity="0.9"/>
                <path d="M20 16L20 32L32 24L20 16Z" fill="#0b0a0d"/>
              </svg>
            </button>
          </div>
          <span class="pf__card-num">Diseño · Desarrollo</span>
        </div>
        <div class="pf__card-info">
          <span class="pf__card-name">Rubicon & Partners</span>
          <div class="pf__card-meta-row">
            <div class="pf__card-meta"><span>Wordpress · Página Institucional</span></div>
            <span class="pf__card-arrow">
              <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M7 17L17 7M9 7h8v8"></path></svg>
            </span>
          </div>
        </div>
      </div>
    </div>
    <div class="portfolio-cta">
        <a href="#" class="btn"><?php _e('VER ARCHIVO COMPLETO', 'vcstudio-theme'); ?> →</a>
    </div>
</section>
<div class="banner">
  <div class="banner__track">
    <span>Diseño Web</span><span class="dot">✦</span>
    <span>Desarrollo a medida</span><span class="dot">✦</span>
    <span>Branding digital</span><span class="dot">✦</span>
    <span>Consultoría</span><span class="dot">✦</span>
    <!-- Se duplican los items para que el loop sea continuo -->
    <span>Diseño Web</span><span class="dot">✦</span>
    <span>Desarrollo a medida</span><span class="dot">✦</span>
    <span>Branding digital</span><span class="dot">✦</span>
    <span>Consultoría</span><span class="dot">✦</span>
  </div>
</div>
<!-- PROCESS -->
<section id="proceso">
    <span class="section-label">MÉTODO</span>

    <div class="services-intro">
        <h2><?php _e('Cómo ', 'vcstudio-theme'); ?><span class="accent"><?php _e('trabajamos', 'vcstudio-theme'); ?></span>.</h2>
        <div class="services-intro-text">
          <p><?php _e('Cuatro fases con entregables claros y revisiones semanales. Sin sorpresas en el calendario ni en el presupuesto.', 'vcstudio-theme'); ?></p>
        </div>
    </div>
<div>
  <div class="container">
    <div class="process">
      <article class="step">
        <div class="step__head">
          <span>FASE 01</span>
          <span>Semana 1</span>
        </div>
        <div class="step__num">01</div>
        <div>
          <h3 class="step__title">Descubrir</h3>
          <p class="step__desc">Investigación, definición de objetivos y arquitectura.</p>
          <ul class="step__list">
            <li>Kick-off</li>
            <li>Research</li>
            <li>Entrevistas</li>
            <li>Sitemap</li>
          </ul>
        </div>
      </article>

      <article class="step">
        <div class="step__head">
          <span>FASE 02</span>
          <span>Semana 2–3</span>
        </div>
        <div class="step__num">02</div>
        <div>
          <h3 class="step__title">Diseñar</h3>
          <p class="step__desc">UI de alta fidelidad y prototipo navegable validado.</p>
          <ul class="step__list">
            <li>Wireframes</li>
            <li>Sistema visual</li>
            <li>UI hi-fi</li>
            <li>Prototipo</li>
          </ul>
        </div>
      </article>

      <article class="step">
        <div class="step__head">
          <span>FASE 03</span>
          <span>Semana 4–6</span>
        </div>
        <div class="step__num">03</div>
        <div>
          <h3 class="step__title">Construir</h3>
          <p class="step__desc">Desarrollo a medida, integración CMS y optimización.</p>
          <ul class="step__list">
            <li>Maquetación</li>
            <li>CMS</li>
            <li>Animación</li>
          </ul>
        </div>
      </article>

      <article class="step">
        <div class="step__head">
          <span>FASE 04</span>
          <span>Semana 7+</span>
        </div>
        <div class="step__num">04</div>
        <div>
          <h3 class="step__title">Evolucionar</h3>
          <p class="step__desc">Lanzamiento, SEO técnico e iteración basada en datos.</p>
          <ul class="step__list">
            <li>Deploy</li>
            <li>Analítica</li>
            <li>SEO</li>
          </ul>
        </div>
      </article>
    </div>
  </div>
</div>
</section>

<!-- STACK -->
<section>
    <div class="stack-header">
        <h2><?php _e('Stack & ', 'vcstudio-theme'); ?><span class="accent"><?php _e('plataformas', 'vcstudio-theme'); ?></span></h2>
        <p><?php _e('Trabajamos con las plataformas adecuadas a cada proyecto. Estas son las que dominamos:', 'vcstudio-theme'); ?></p>
    </div>

    <div class="logos-carousel">
        <div class="logos-track">
            
            <div class="logos-group">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/prestashop.png" alt="PrestaShop">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/woo-commerce.png" alt="WooCommerce">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/shopify.png" alt="Shopify">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/wordpress.png" alt="WordPress">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/webflow.png" alt="Webflow">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/bubble.png" alt="Bubble">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/wix.png" alt="Wix">
                
            </div>

            <div class="logos-group" aria-hidden="true">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/prestashop.png" alt="PrestaShop">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/woo-commerce.png" alt="WooCommerce">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/shopify.png" alt="Shopify">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/wordpress.png" alt="WordPress">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/webflow.png" alt="Webflow">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/bubble.png" alt="Bubble">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/wix.png" alt="Wix">
            </div>

        </div>
    </div>
</section>

<!-- CTA -->
<section class="cta-section" id="contacto">
    <h2>
        <?php _e('¿Listo para dar <br>el ', 'vcstudio-theme'); ?><span class="accent"><?php _e('siguiente', 'vcstudio-theme'); ?></span><br><?php _e('paso?', 'vcstudio-theme'); ?>
    </h2>

    <div class="cta-buttons">
      <a href="mailto:info@vcstudio.agency" class="btn-hero btn-hero--primary">
        info@vcstudio.agency  
        <span class="arrow"> →</span>
      </a>
      <a href="https://wa.me/34655103474?text=Hola%20VC%20Studio%2C%20me%20interesa%20un%20presupuesto%20para%20un%20sitio%20web.%20Mi%20nombre%20es%20%5BNombre%5D%20y%20pueden%20contactarme%20en%20%5BTel%5D.%20Gracias%21" class="btn-hero btn-hero--secondary" target="_blank" rel="noopener noreferrer">
        <?php _e('ESCRIBENOS AL WHATSAPP', 'vcstudio-theme'); ?>
      </a>
    </div>
</section>

<?php get_footer();
