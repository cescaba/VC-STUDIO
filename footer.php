<?php
/**
 * Footer template
 */
?>
    </main>

    <footer>
        <div class="footer-content">
            <div>
                <div class="footer-company"><?php bloginfo('name'); ?></div>
                <div class="footer-info"><?php bloginfo('description'); ?></div>
                <a href="mailto:<?php echo antispambot(get_option('admin_email')); ?>" class="footer-contact"><?php echo antispambot(get_option('admin_email')); ?></a>
                <div class="footer-info">+34 652 102 478 · +51 982 602 769</div>
            </div>

            <div class="footer-section">
                <h4><?php _e('Index', 'vcstudio-theme'); ?></h4>
                <a href="#servicios"><?php _e('Servicios', 'vcstudio-theme'); ?></a>
                <a href="#portfolio"><?php _e('Portafolio', 'vcstudio-theme'); ?></a>
                <a href="#proceso"><?php _e('Proceso', 'vcstudio-theme'); ?></a>
                <a href="#contacto"><?php _e('Contacto', 'vcstudio-theme'); ?></a>
            </div>

            <div class="footer-section">
                <h4><?php _e('Síguenos', 'vcstudio-theme'); ?></h4>
                <a href="#">Instagram →</a>
                <a href="#">LinkedIn →</a>
                <a href="#">Behance →</a>
                <a href="#">Youtube →</a>
            </div>

            <div class="footer-section">
                <h4><?php _e('Legal', 'vcstudio-theme'); ?></h4>
                <a href="#"><?php _e('Términos', 'vcstudio-theme'); ?></a>
                <a href="#"><?php _e('Privacidad', 'vcstudio-theme'); ?></a>
                <a href="#"><?php _e('Cookies', 'vcstudio-theme'); ?></a>
            </div>
        </div>

        <div class="footer-bottom">
            <div><?php _e('STUDIO', 'vcstudio-theme'); ?></div>
            <div>© 2019–<?php echo date('Y'); ?> <?php bloginfo('name'); ?></div>
            <div><?php _e('Aceptando proyectos', 'vcstudio-theme'); ?> · Q<?php echo date('q'); ?> <?php echo date('Y'); ?></div>
            <div>V.<?php echo date('Y.m'); ?> · <?php _e('Hecho en Lima', 'vcstudio-theme'); ?></div>
        </div>
    </footer>

    <script>
      document.querySelectorAll('.pf__card-play-btn').forEach(btn => {
        btn.addEventListener('click', (e) => {
          e.preventDefault();
          e.stopPropagation();
          const videoId = btn.dataset.video;
          const video = document.getElementById(videoId);
          if (video) {
            if (video.paused) {
              video.play();
              btn.style.opacity = '0';
            } else {
              video.pause();
              btn.style.opacity = '1';
            }
          }
        });
      });

      document.querySelectorAll('.pf__card-video').forEach(video => {
        video.addEventListener('play', () => {
          const btn = video.parentElement.querySelector('.pf__card-play-btn');
          if (btn) btn.style.opacity = '0';
        });
        video.addEventListener('pause', () => {
          const btn = video.parentElement.querySelector('.pf__card-play-btn');
          if (btn) btn.style.opacity = '1';
        });
      });
    </script>

    <?php wp_footer(); ?>
</body>
</html>
