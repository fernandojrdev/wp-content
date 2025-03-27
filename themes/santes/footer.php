<footer id="footer">
  <?php get_template_part('template-parts/newsletter'); ?>

  <div class="links py-5">
    <div class="container-xxl">
      <div class="row gap-3">
        <div class="col item">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/dermo-logo.svg" alt="Logo da DERMOMED" class="img-fluid">
          <span class="title fw-bold">
            DERMOMED é a empresa em que você pode confiar!
          </span>
          <div class="sociais">
            <span class="fw-bold">
              Nossas redes sociais
            </span>
            <div class="sociais__redes">
              <a href="https://www.facebook.com/oficialdermomed" target="_blank" rel="noopener noreferrer">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/facebook-icon.svg" alt="Logo do Facebook" class="img-fluid">
              </a>
              <a href="https://www.instagram.com/oficialdermomed/" target="_blank" rel="noopener noreferrer">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/instagram-icon.svg" alt="Logo do Instagram" class="img-fluid">
              </a>
              <a href="https://www.youtube.com/@oficialdermomed" target="_blank" rel="noopener noreferrer">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/youtube-icon.svg" alt="Logo do Youtube" class="img-fluid">
              </a>
            </div>
          </div>
        </div>

        <div class="col item">
          <span class="title text-uppercase fw-bold">
            Institucional
          </span>
          <?php
          wp_nav_menu(array(
            'theme_location' => 'menu-rodape',
            'menu_class'     => 'footer-menu',
            'container'      => 'nav',
            'container_class' => 'footer-nav',
          ));
          ?>
        </div>

        <div class="col item">
          <span class="title text-uppercase fw-bold">
            Formas de pagamento
          </span>
          <ul>
            <?php
            wp_list_categories(array(
              'title_li' => '',
            ));
            ?>
          </ul>
        </div>

        <div class="col item">
          <span class="title text-uppercase fw-bold">
            Central de atendimento
          </span>
          <div class="canais">
            <a href="https://wa.me/5515996282696" target="_blank" rel="noopener noreferrer" class="canais__wrapper">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/whats-icon.svg" alt="Logo do Whatsapp" class="img-fluid">
               (15) 99628-2696
            </a>
            <a href="mailto:contato@santesoticas.com.br" class="canais__wrapper">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/mailto-icon.svg" alt="Ícone de email" class="img-fluid">
              contato@santesoticas.com.br
            </a>
            <a href="tel:5519999316939" target="_blank" rel="noopener noreferrer" class="canais__wrapper">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/tel-icon.svg" alt="Ícone de telefone" class="img-fluid">
                SAC: (19) 99931-6939
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="copyright">
    <div class="container-xxl">
      <div class="copy">
        <small>&reg; Todos os direitos reservados | Óticas Santês - Hera Comercio de Produtos Oticos LTDA | CNPJ: 33.250.163-0001/81</small>
      </div>
      <a href="http://www.agenciadelucca.com.br" target="_blank" rel="noopener noreferrer" class="delucca" aria-label="Agência Delucca">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/delucca-logo.svg" alt="Agência Delucca" class="img-fluid">
      </a>
    </div>
  </div>
</footer>
<?php wp_footer(); ?>
</body>

</html>