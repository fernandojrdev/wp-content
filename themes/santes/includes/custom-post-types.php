<?php 

function fullbanner_registrer() {
    
    $labels = array(
        'name'                  => _x('Fullbanner', 'post type general name'),
        'singular_name'         => _x('Fullbanner', 'post type singular name'),
        'add_new'               => _x('Adicionar Fullbanner', 'fullbanner'),
        'add_new_item'          => __('Adicionar Fullbanner', 'fullbanner'),
        'edit_item'             => __('Editar Fullbanner'),
        'new_item'              => __('Novo Fullbanner'),
        'view_item'             => __('Ver Fullbanner'),
        'search_slider'         => __('Procurar Fullbanner'),
        'not_found'             => __('Nada Encontrado'),
        'not_found_in_trash'    => __('Nada encontrado no lixo'),
        'parent_item_colon'     => '' ,
    );
    $args = array(
        'exclude_from_search' => true,
        'labels'                => $labels,
        'public'                => true,
        'publicly_queryable'    => true,
        'show_uri'              => true,
        'query_var'             => true,
        'rewrite'               => true,
        'has_archive'           => true,
        'menu_icon'             => 'dashicons-images-alt',
        'capability_type'       => 'post',
        'hierarchical'          => false,
        'menu_position'         => 6,
        'supports'              => array('title', 'thumbnail'), 
    );
    register_post_type('fullbanner',$args);
}
add_action('init', 'fullbanner_registrer', 0);

function top20_registrer() {
    
    $labels = array(
        'name'                  => _x('TOP 20', 'post type general name'),
        'singular_name'         => _x('TOP 20', 'post type singular name'),
        'add_new'               => _x('Adicionar TOP 20', 'TOP 20'),
        'add_new_item'          => __('Adicionar TOP 20', 'TOP 20'),
        'edit_item'             => __('Editar TOP 20'),
        'new_item'              => __('Novo TOP 20'),
        'view_item'             => __('Ver TOP 20'),
        'search_slider'         => __('Procurar TOP 20'),
        'not_found'             => __('Nada Encontrado'),
        'not_found_in_trash'    => __('Nada encontrado no lixo'),
        'parent_item_colon'     => '' ,
    );
    $args = array(
        'exclude_from_search' => true,
        'labels'                => $labels,
        'public'                => true,
        'publicly_queryable'    => true,
        'show_uri'              => true,
        'query_var'             => true,
        'rewrite'               => true,
        'has_archive'           => true,
        'menu_icon'             => 'dashicons-images-alt',
        'capability_type'       => 'post',
        'hierarchical'          => false,
        'menu_position'         => 6,
        'supports'              => array('title', 'thumbnail'), 
    );
    register_post_type('top20',$args);
}
add_action('init', 'top20_registrer', 0);

function sidebarbanner_registrer() {
    
    $labels = array(
        'name'                  => _x('Banner Lateral', 'post type general name'),
        'singular_name'         => _x('Banner Lateral', 'post type singular name'),
        'add_new'               => _x('Adicionar Banner Lateral', 'Banner Lateral'),
        'add_new_item'          => __('Adicionar Banner Lateral', 'Banner Lateral'),
        'edit_item'             => __('Editar Banner Lateral'),
        'new_item'              => __('Novo Banner Lateral'),
        'view_item'             => __('Ver Banner Lateral'),
        'search_slider'         => __('Procurar Banner Lateral'),
        'not_found'             => __('Nada Encontrado'),
        'not_found_in_trash'    => __('Nada encontrado no lixo'),
        'parent_item_colon'     => '' ,
    );
    $args = array(
        'exclude_from_search' => true,
        'labels'                => $labels,
        'public'                => true,
        'publicly_queryable'    => true,
        'show_uri'              => true,
        'query_var'             => true,
        'rewrite'               => true,
        'has_archive'           => true,
        'menu_icon'             => 'dashicons-images-alt',
        'capability_type'       => 'post',
        'hierarchical'          => false,
        'menu_position'         => 6,
        'supports'              => array('title', 'thumbnail'), 
    );
    register_post_type('Banner Lateral',$args);
}
add_action('init', 'sidebarbanner_registrer', 0);

?>