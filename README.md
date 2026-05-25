# VC Studio Theme

Tema de WordPress profesional para VC Studio - Estudio de diseño y desarrollo web.

## Estructura de carpetas

```
vcstudio-theme/
├── style.css              # Header del tema (requerido por WordPress)
├── functions.php          # Funciones del tema
├── front-page.php         # Plantilla de portada
├── header.php             # Plantilla de encabezado
├── footer.php             # Plantilla de pie
├── index.php              # Plantilla por defecto
├── assets/
│   ├── css/
│   │   └── main.css       # Estilos principales
│   └── js/
│       └── main.js        # Scripts principales
└── template-parts/        # Componentes reutilizables (carpeta para expansiones futuras)
```

## Instalación

1. Coloca esta carpeta en `/wp-content/themes/`
2. Ve a WordPress Admin → Apariencia → Temas
3. Activa "VC Studio Theme"

## Características

- ✅ Diseño responsive (mobile-first)
- ✅ Optimizado para rendimiento
- ✅ Soporta traducciones (i18n)
- ✅ CSS separado en archivo externo
- ✅ JavaScript modular
- ✅ Cumple estándares WordPress

## Secciones incluidas

1. **Hero** - Introducción con estadísticas
2. **Servicios** - 4 tarjetas de servicios
3. **Portfolio** - Grid de 8 proyectos
4. **Proceso** - 4 fases del trabajo
5. **Stack** - Plataformas y tecnologías
6. **CTA** - Llamada a la acción

## Personalización

### Colores

Modifica las variables CSS en `assets/css/main.css`:

```css
:root {
  --bg: #0b0a0d;           /* Fondo oscuro */
  --text: #f6f4f3;         /* Texto principal */
  --text-muted: #999;      /* Texto tenue */
  --border: #333;          /* Bordes */
  --accent: #2f00ff;       /* Color primario (azul) */
  --accent-alt: #17bebb;   /* Color secundario (turquesa) */
  --accent-warm: #e59500;  /* Color terciario (naranja) */
}
```

### Información de la empresa

Actualiza en WordPress Admin:
- Nombre del sitio → Ajustes → Título del sitio
- Descripción → Ajustes → Lema
- Email de contacto → Ajustes → Correo electrónico de administración

## Requerimientos

- WordPress 5.9+
- PHP 7.4+
- Navegadores modernos (Chrome, Firefox, Safari, Edge)

## Compatibilidad de navegadores

- Chrome/Edge (últimas 2 versiones)
- Firefox (últimas 2 versiones)
- Safari 14+
- Mobile browsers

## Notas de desarrollo

- Los scripts se cargan en el footer para mejor rendimiento
- CSS es crítico y se carga inline (via wp_head)
- El tema soporta `wp_body_open()` para compatibilidad
- Traducciones soportadas en directorio `/languages`

## Soporte

Para reportar bugs o sugerir mejoras, contacta con el equipo de VC Studio.
