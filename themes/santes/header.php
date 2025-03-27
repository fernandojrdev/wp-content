<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title><?php wp_title(); ?></title>

  <?php wp_head(); ?>

  <link href="<?php bloginfo("stylesheet_directory"); ?>/assets/img/favicon.png" rel="icon" size="32x32">
</head>

<body <?php body_class(); ?>>
  <nav class="navbar">
    <div class="navbar__wrapper d-none d-lg-block">
      <div class="navbar__top container-xxl">
        <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/logo.png" alt="Logo" class="img-fluid">
        </a>
        <ul>
          <li class="nav-item">
            <a class="nav-link text-uppercase" href="https://www.dermomed.com.br/pagina/quem-somos/" target="_blank" rel="noopener noreferrer">
              Quem somos
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-uppercase" href="https://www.dermomed.com.br/top-20/" target="_blank" rel="noopener noreferrer">
              Conheça nosso TOP 20
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-uppercase" href="https://www.dermomed.com.br/pagina/contato/" target="_blank" rel="noopener noreferrer">
              Fale conosco
            </a>
          </li>
        </ul>

        <div class="btn__wrapper">
          <form class="search__form d-none" role="search" method="get" action="<?php echo esc_url(home_url('/')); ?>">
            <input class="search__input" type="search" placeholder="Pesquisar..." aria-label="Buscar" name="s" value="<?php echo get_search_query(); ?>">
            <button class="search__submit" type="submit">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/search-icon.svg" alt="Ícone de busca">
            </button>
          </form>

          <a class="btn btn-store" href="https://api.whatsapp.com/send?phone=5515996282696&text=Ol%C3%A1%20%C3%93ticas%20Santes%2C%20tudo%20bem%3F%0A%0APreciso%20de%20um%20or%C3%A7amamento." target="_blank" rel="noopener noreferrer" title="Solicitar orçamento">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/whats-icon.svg" alt="Ícone de carrinho">
            Solicitar orçamento
          </a>
        </div>
      </div>

      <div class="navbar__bottom">
        <?php
        wp_nav_menu(array(
          'theme_location' => 'menu-principal',
          'menu_class'     => 'header-menu text-uppercase',
          'container'      => 'nav',
          'container_class' => 'header-nav container-xxl',
        ));
        ?>
      </div>
    </div>

    <div class="navbar__mobile container-xxl p-3 d-lg-none" data-bs-theme="dark">
      <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/dermo-logo.svg" alt="Logo" class="img-fluid d-lg-none">
      </a>

      <button type="button" class="offcanvas-toggle" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/menu-icon.svg" alt="Ícone de menu">
      </button>

      <div class="offcanvas offcanvas-end d-lg-none" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
        <div class="offcanvas-header">
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
          <form class="search__form" role="search" method="get" action="<?php echo esc_url(home_url('/')); ?>">
            <input class="search__input" type="search" placeholder="Pesquisar..." aria-label="Buscar" name="s" value="<?php echo get_search_query(); ?>">
            <button class="search__submit" type="submit">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/search-icon.svg" alt="Ícone de busca">
            </button>
          </form>

          <a class="btn btn-store" href="https://www.dermomed.com.br/" target="_blank" rel="noopener noreferrer">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/cart-icon.svg" alt="Ícone de carrinho">
            Ir para a loja
          </a>

          <ul class="navbar-nav me-auto">
            <li class="nav-item">
              <a class="nav-link text-uppercase" href="https://www.dermomed.com.br/pagina/quem-somos/" target="_blank" rel="noopener noreferrer">
                Quem somos
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-uppercase" href="https://www.dermomed.com.br/top-20/" target="_blank" rel="noopener noreferrer">
                Conheça nosso TOP 20
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-uppercase" href="https://www.dermomed.com.br/pagina/contato/" target="_blank" rel="noopener noreferrer">
                Fale conosco
              </a>
            </li>
          </ul>

          <?php
          wp_nav_menu(array(
            'theme_location' => 'menu-principal',
            'menu_class'     => 'header-menu',
            'container'      => 'nav',
            'container_class' => 'header-nav',
          ));
          ?>
        </div>
      </div>

    </div>
  </nav>