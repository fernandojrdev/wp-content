<?php 

add_theme_support('post-thumbnails');

function my_theme_fonts() {
  ?>
  <style>
  @font-face {
      font-family: 'Roboto';
      font-weight: 400;
      font-style: normal;
      src: url('<?php echo get_template_directory_uri(); ?>/assets/fonts/roboto-regular.ttf') format('ttf');
  }

  @font-face {
      font-family: 'Roboto';
      font-weight: 400;
      font-style: italic;
      src: url('<?php echo get_template_directory_uri(); ?>/assets/fonts/roboto-italic.ttf') format('ttf');
  }

  @font-face {
      font-family: 'Roboto';
      font-weight: 700;
      font-style: normal;
      src: url('<?php echo get_template_directory_uri(); ?>/assets/fonts/roboto-bold.ttf') format('ttf');
  }

  @font-face {
      font-family: 'Roboto';
      font-weight: 700;
      font-style: italic;
      src: url('<?php echo get_template_directory_uri(); ?>/assets/fonts/roboto-boldItalic.ttf') format('ttf');
  }
  </style>
  <?php
}
add_action('wp_head', 'my_theme_fonts');

function load_scripts(){
  wp_enqueue_script( 'swiper', get_template_directory_uri() . '/assets/js/swiper-bundle.min.js', array(), null, true );
  wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), null, true );
  wp_enqueue_script( 'custom', get_template_directory_uri() . '/assets/js/custom.js', array(), null, true );
  
  wp_enqueue_style( 'swiper', get_template_directory_uri() . '/assets/css/swiper-bundle.min.css', 'all');
  wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', '5.3', 'all' );
  wp_enqueue_style( 'custom', get_template_directory_uri() . '/assets/css/custom.css', 'all' );
}

add_action( 'wp_enqueue_scripts', 'load_scripts' );

function menu_register() {
  register_nav_menus(
      array(
          'menu-principal' => __( 'Menu Principal' ),
          'menu-rodape' => __( 'Menu Rodapé' ),
      )
  );
}
add_action( 'init', 'menu_register' );

function set_posts_per_page_for_search($query) {
  if ($query->is_search() && $query->is_main_query()) {
    $query->set('posts_per_page', 24);
  }
}
add_action('pre_get_posts', 'set_posts_per_page_for_search');

require_once get_template_directory() . '/includes/custom-post-types.php';

?>