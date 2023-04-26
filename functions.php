<?php 
    // Função para registrar os Scripts e o CSS
    function cbaa_scripts() {
        // Desregistra o jQuery do Wordpress
        wp_deregister_script('jquery');

        // Registra o jQuery Novo
        wp_register_script( 'jquery', get_template_directory_uri() . '/js/libs/jquery.js', [], "3.4.1", true );

        // Rigistra o plugin do slider
        wp_register_script( 'plugins-script', get_template_directory_uri() . '/js/plugins/owl.carousel.min.js', ['jquery'], false, true);
        
        // Registrar Main
        wp_register_script( 'main-script', get_template_directory_uri() . '/js/main.js', ['jquery', 'plugins-script'], false, true );

        // Carrega o Script	wp_enqueue_script( 'main-script' );
        wp_enqueue_script( 'main-script' );	
    }
    add_action( 'wp_enqueue_scripts', 'cbaa_scripts' );

    function cbaa_css() {
        wp_register_style( 'cbaa-style', get_template_directory_uri() . '/style.css', [], false, false );
    
        wp_register_style('owl-carousel', get_template_directory_uri() . '/js/plugins/owl.carousel.min.css', [], false, false);
    
        wp_enqueue_style( 'owl-carousel' );
        wp_enqueue_style( 'cbaa-style' );
    }
    add_action( 'wp_enqueue_scripts', 'cbaa_css' );

    // Funções para Limpar o Header
    remove_action('wp_head', 'rsd_link');
    remove_action('wp_head', 'wlwmanifest_link');
    remove_action('wp_head', 'start_post_rel_link', 10, 0 );
    remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
    remove_action('wp_head', 'feed_links_extra', 3);
    remove_action('wp_head', 'wp_generator');
    remove_action('wp_head', 'print_emoji_detection_script', 7);
    remove_action('admin_print_scripts', 'print_emoji_detection_script');
    remove_action('wp_print_styles', 'print_emoji_styles');
    remove_action('admin_print_styles', 'print_emoji_styles'); 

    // Habilitar Menus
    add_theme_support('menus');

    // Registrar Menu
    function register_my_menu() {
        register_nav_menu('menu-principal',__( 'Menu Principal' ));
    }
    add_action( 'init', 'register_my_menu' );

    function custom_login_logo() {
        echo '<style type="text/css">
            h1 a { background-image: url(' . get_stylesheet_directory_uri() . '/images/logo.svg) !important; background-size: 200px!important; width: 250px!important;cursor-pointer:default!important; pointer-events:none!important }
        </style>';
    }
    add_action('login_head', 'custom_login_logo');

    // páginas de opção
    if( function_exists('acf_add_options_page') ) {
        // página de opções
        $option_page = acf_add_options_page(array(
            'page_title'    => 'CBAA – GERAL', // título
            'menu_title'    => 'CBAA – GERAL', // Texto do menu
            'menu_slug'     => 'personalizar', // slug
            'capability'    => 'edit_posts', // quem pode acessar
            'position' => 2,
            'redirect'  => true
        ));
    }
?>