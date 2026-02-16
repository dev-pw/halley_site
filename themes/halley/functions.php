<?php

/*--------------------------------------------------------------
ESTILOS E SCRIPTS
--------------------------------------------------------------*/
function enqueue_scripts() {

	//VERSÃO DO TEMA
	date_default_timezone_set('America/Sao_Paulo'); // Define o fuso horário
	$data_hora_atual = date('H:i:s');
	$tema_version = $data_hora_atual;

	//BOOTSTRAP JS
	// wp_enqueue_script( 'bootstrap-poppers', 'https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/assets/umd/popper.min.js', array('jquery'), $tema_version, true );
	wp_enqueue_script( 'bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js', array('jquery'), $tema_version, true );

	// Swipper
	wp_enqueue_style('swipper', 'https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css', array(), $tema_version, 'all');
	wp_enqueue_script( 'swipper', 'https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js', array('jquery'), $tema_version, true );

	//FONTAWESOME
	wp_enqueue_style( 'fontawesome-css', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css', array(), $tema_version, 'all' );

	//JQUERY MASK
	wp_enqueue_script( 'jqueryMask-js', 'https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js', array('jquery'), $tema_version, true );

	// ANIMATE CSS
	//wp_enqueue_style('animate', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css', array(), $tema_version, 'all');

	//STYLE THEME
	wp_enqueue_style('tema', get_template_directory_uri().'/assets/css/theme.min.css', array(), $tema_version, 'all');

    //CSS DEFAULT
	wp_enqueue_style('default-style', get_stylesheet_uri(), array(), $tema_version, 'all');

	//SCRIPT THEME JS
	wp_enqueue_script( 'tema-js', get_template_directory_uri().'/assets/js/theme.js', array('jquery'), $tema_version, true );

	// FORMS JS
	wp_enqueue_script( 'forms-js', get_template_directory_uri().'/assets/js/forms.js', array('jquery'), $tema_version, true );

}

add_action('wp_enqueue_scripts', 'enqueue_scripts');

/*--------------------------------------------------------------
CONFIGURACOES DO TEMA
--------------------------------------------------------------*/
function setup_theme() {

	// Adicionar title dinamicamente
	add_theme_support('title-tag');

	// Esconder barra logada wordpress
	// add_filter('show_admin_bar', '__return_false');

	// Habilitar imagem destacada
	add_theme_support('post-thumbnails');

	// habilitar resumo em páginas
	add_post_type_support( 'page', 'excerpt' );

	// Registra um menu
	register_nav_menus( array(
		'menu-principal' => 'Menu principal',
	) );

}

add_action( 'after_setup_theme', 'setup_theme' );


/*--------------------------------------------------------------
INCLUINDO DEFAULTS
--------------------------------------------------------------*/

include 'inc/default.php';


/*--------------------------------------------------------------
Script defer
--------------------------------------------------------------*/

function ivision_defer_scripts( $tag, $handle, $src ) {
    // quais scripts podem usar defer
    $defer = array(
        'jquery',
        'jquery-migrate',
        'theme-js',
        'forms-js',
        'preline',
        'swiper',
    );

    if ( in_array( $handle, $defer, true ) ) {
        return '<script src="' . esc_url( $src ) . '" defer></script>';
    }

    return $tag;
}
add_filter( 'script_loader_tag', 'ivision_defer_scripts', 10, 3 );

?>
