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
            <a href="mailto:info@vcstudio.agency" class="footer-contact">info@vcstudio.agency</a>
            <div class="footer-tel">+34 655 103 474 · +51 992 632 769</div>
        </div>

        <div class="footer-section">
            <h4><?php _e('Index', 'vcstudio-theme'); ?></h4>
            <a href="#servicios"><?php _e('Servicios', 'vcstudio-theme'); ?></a>
            <a href="#portafolio"><?php _e('Portafolio', 'vcstudio-theme'); ?></a>
            <a href="#proceso"><?php _e('Proceso', 'vcstudio-theme'); ?></a>
            <a href="#contacto"><?php _e('Contacto', 'vcstudio-theme'); ?></a>
        </div>

        <div class="footer-section">
            <h4><?php _e('Síguenos', 'vcstudio-theme'); ?></h4>
          <a href="https://www.instagram.com/vcstudio.peru/" target="_blank">Instagram <svg width="11" height="11" viewBox="0 0 24 24" fill="none" aria-hidden="true" focusable="false"><path d="M7 17L17 7M9 7h8v8" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
          <a href="https://www.linkedin.com/company/vc-studio-agency/" target="_blank">LinkedIn <svg width="11" height="11" viewBox="0 0 24 24" fill="none" aria-hidden="true" focusable="false"><path d="M7 17L17 7M9 7h8v8" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
          <a href="https://www.behance.net/vc_studio/" target="_blank">Behance <svg width="11" height="11" viewBox="0 0 24 24" fill="none" aria-hidden="true" focusable="false"><path d="M7 17L17 7M9 7h8v8" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
        </div>

        
    </div>

   

    <div class="footer-bottom">
        <div class="credits-left">© 2019–<?php echo date('Y'); ?> VCSTUDIO</div>
        
    </div>
</footer>

    <script>
      const togglePortfolioVideo = (video) => {
        if (!video) {
          return;
        }

        if (video.paused) {
          video.play();
        } else {
          video.pause();
        }
      };

      const syncPortfolioVideoState = (video) => {
        if (!video) {
          return;
        }

        const container = video.closest('.pf__card-video-container');
        const btn = container ? container.querySelector('.pf__card-play-btn') : null;
        const isPlaying = !video.paused && !video.ended;

        if (container) {
          container.classList.toggle('is-playing', isPlaying);
        }

        if (btn) {
          btn.setAttribute('aria-label', isPlaying ? 'Pausar video' : 'Reproducir video');
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
        syncPortfolioVideoState(video);

        video.addEventListener('play', () => {
          syncPortfolioVideoState(video);
        });
        video.addEventListener('pause', () => {
          syncPortfolioVideoState(video);
        });
        video.addEventListener('ended', () => {
          syncPortfolioVideoState(video);
        });
      });
    </script>

    <?php wp_footer(); ?>
</body>
</html>
