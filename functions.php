<?php
function codenode_registrar_menu() {
    register_nav_menus(array(
        'menu-principal' => 'Menú Principal'
    ));
}
add_action('after_setup_theme', 'codenode_registrar_menu');

// enlace de estilos
function codenode_cargar_estilos() {
    wp_enqueue_style('codenode-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'codenode_cargar_estilos');