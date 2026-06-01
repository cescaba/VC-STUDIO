<?php
/**
 * Footer template
 */
?>
    </main>

    <footer>
    <div class="footer-content">
        <div class="footer-brand-column">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-vc-white.png" alt="VC Studio" class="footer-logo">
            <div class="footer-info">Lima, Perú — Madrid, España</div>
            <a href="mailto:contacto@vcstudio.agency" class="footer-contact">contacto@vcstudio.agency</a>
            <div class="footer-tel">+34 652 102 478 · +51 982 602 769</div>
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
          <a href="#" target="_blank">Instagram <svg width="11" height="11" viewBox="0 0 24 24" fill="none" aria-hidden="true" focusable="false"><path d="M7 17L17 7M9 7h8v8" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
          <a href="#" target="_blank">LinkedIn <svg width="11" height="11" viewBox="0 0 24 24" fill="none" aria-hidden="true" focusable="false"><path d="M7 17L17 7M9 7h8v8" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
          <a href="#" target="_blank">Behance <svg width="11" height="11" viewBox="0 0 24 24" fill="none" aria-hidden="true" focusable="false"><path d="M7 17L17 7M9 7h8v8" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
          <a href="#" target="_blank">Youtube <svg width="11" height="11" viewBox="0 0 24 24" fill="none" aria-hidden="true" focusable="false"><path d="M7 17L17 7M9 7h8v8" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
        </div>

        <div class="footer-section">
            <h4><?php _e('Legal', 'vcstudio-theme'); ?></h4>
            <a href="#"><?php _e('Términos', 'vcstudio-theme'); ?></a>
            <a href="#"><?php _e('Privacidad', 'vcstudio-theme'); ?></a>
            <a href="#"><?php _e('Cookies', 'vcstudio-theme'); ?></a>
        </div>
    </div>

    <div class="footer-brand-giant">
        <span class="white">VC</span><span class="blue">STUDIO</span>
    </div>

    <div class="footer-bottom">
        <div class="credits-left">© 2019–<?php echo date('Y'); ?><?php bloginfo('name'); ?></div>
        <div class="credits-center">
            <span class="status-dot"></span> 
            <?php _e('ACEPTANDO PROYECTOS', 'vcstudio-theme'); ?> · Q<?php echo ceil(date('n') / 3); ?> <?php echo date('Y'); ?>
        </div>
        <div class="credits-right">V.<?php echo date('Y.m'); ?> · <?php _e('HECHO EN LIMA', 'vcstudio-theme'); ?></div>
    </div>
</footer>

    <script>
      const togglePortfolioVideo = (video) => {
        if (!video) {
          return;
        }

        const btn = video.parentElement.querySelector('.pf__card-play-btn');

        if (video.paused) {
          video.play();
          if (btn) btn.style.opacity = '0';
        } else {
          video.pause();
          if (btn) btn.style.opacity = '1';
        }
      };

      document.querySelectorAll('.pf__card-play-btn').forEach(btn => {
        btn.addEventListener('click', (e) => {
          e.preventDefault();
          e.stopPropagation();
          const video = document.getElementById(btn.dataset.video);
          togglePortfolioVideo(video);
        });
      });

      document.querySelectorAll('.pf__card-video-container').forEach(container => {
        container.addEventListener('click', (e) => {
          if (e.target.closest('.pf__card-play-btn')) {
            return;
          }

          const video = container.querySelector('.pf__card-video');
          togglePortfolioVideo(video);
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
