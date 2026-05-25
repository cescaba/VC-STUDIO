# Instrucciones de instalación - VC Studio Theme

## 1. Requisitos previos

- WordPress 5.9 o superior
- PHP 7.4 o superior
- Acceso FTP o SFTP al servidor

## 2. Instalación del tema

### Opción A: Instalación manual (FTP)

1. Descarga la carpeta `vcstudio-theme`
2. Conecta al servidor vía FTP
3. Navega a `/wp-content/themes/`
4. Sube la carpeta `vcstudio-theme`

### Opción B: Instalación desde WordPress Admin

1. Ve a **Apariencia → Temas**
2. Haz clic en **Añadir tema**
3. Busca "VC Studio" o sube el archivo ZIP del tema
4. Haz clic en **Instalar** y luego **Activar**

## 3. Configuración inicial

### 3.1 Configurar la página de inicio

1. Ve a **Ajustes → Lectura**
2. Selecciona **Una página estática** como página de inicio
3. Elige **Portada** como página de inicio
4. Haz clic en **Guardar cambios**

### 3.2 Crear la página de inicio

Si no existe:
1. Ve a **Páginas → Añadir nueva**
2. Título: "Portada"
3. Deja el contenido vacío (el tema lo genera automáticamente)
4. Publica la página

### 3.3 Configurar información de la empresa

1. Ve a **Ajustes → General**
2. Completa:
   - **Título del sitio**: "VC Studio"
   - **Lema**: "Lima, Perú – Madrid, España"
   - **Correo electrónico de administración**: tu@email.com

### 3.4 Crear el menú de navegación

1. Ve a **Apariencia → Menús**
2. Crea un nuevo menú llamado "Menú Principal"
3. Añade elementos (si es que quieres expandir más allá de la portada)
4. Asigna el menú a **Ubicación de menú de pantalla** → **Menú Principal**

## 4. Personalización

### Cambiar colores

1. Ve a **Apariencia → Personalizar**
2. Ve a la sección **VC Studio Colors**
3. Ajusta:
   - Color primario (azul)
   - Color secundario (turquesa)
4. Previsualiza y guarda

### Editar el logo

1. Ve a **Apariencia → Personalizar**
2. Ve a **Identidad del sitio**
3. Carga tu logo personalizado
4. Guarda cambios

### Cambiar contenido de secciones

Edita directamente en `front-page.php`:
- Línea 1-30: Hero section
- Línea 31-100: Services section
- Línea 101-200: Portfolio section
- Y así sucesivamente...

## 5. Estructura de archivos clave

```
vcstudio-theme/
├── front-page.php         ← Edita aquí el contenido principal
├── header.php             ← Encabezado (menú, logo)
├── footer.php             ← Pie de página
├── functions.php          ← Funciones del tema
├── assets/
│   ├── css/main.css       ← Estilos (variables CSS en :root)
│   └── js/main.js         ← Scripts (scroll nav activo)
└── inc/
    └── customizer.php     ← Configuración del Customizer
```

## 6. Tips de mantenimiento

### Backup

Antes de hacer cambios:
```bash
# Crear backup de la carpeta del tema
cp -r wp-content/themes/vcstudio-theme wp-content/themes/vcstudio-theme-backup
```

### Actualizar de forma segura

1. Deactiva el tema
2. Crea un backup
3. Actualiza archivos vía FTP
4. Reactiva el tema
5. Prueba en navegador

### Soporte de plugins recomendados

- **Yoast SEO** - Optimización SEO
- **Akismet** - Anti-spam comentarios
- **WP Rocket** - Caché y optimización
- **Backup WordPress** - Backups automáticos

## 7. Troubleshooting

### Tema no aparece en Apariencia → Temas

✓ Verifica que la carpeta esté en `/wp-content/themes/`
✓ Revisa permisos (deben ser 755)
✓ Asegúrate que `style.css` existe en la raíz

### Error en funciones PHP

✓ Verifica versión de PHP (requiere 7.4+)
✓ Busca errores en `wp-content/debug.log`
✓ Desactiva otros plugins para aislar el problema

### CSS no carga

✓ Limpia caché (Ctrl+F5)
✓ Verifica permisos de `/assets/css/`
✓ Revisa console del navegador (F12)

### Menú no aparece

✓ Ve a **Apariencia → Menús**
✓ Asigna menú a "Menú Principal"
✓ Verifica que existe contenido en `header.php`

## 8. Contacto y soporte

Para reportar bugs o solicitar ayuda:
- Email: contacto@vcstudio.agency
- Web: https://vcstudio.agency

---

**Versión del tema**: 1.0.0  
**Última actualización**: 2026
