<?php

/*--------------------------------------------------------------
ESTILOS E SCRIPTS
--------------------------------------------------------------*/
function enqueue_scripts() {

	//VERSÃO DO TEMA
	date_default_timezone_set('America/Sao_Paulo'); // Define o fuso horário
	$data_hora_atual = date('H:i:s');
	$tema_version = '1.0';

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

function defer_scripts( $tag, $handle, $src ) {
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
add_filter( 'script_loader_tag', 'defer_scripts', 10, 3 );


/*--------------------------------------------------------------
Header de Segurança
--------------------------------------------------------------*/

function headers_security() {
    // Content-Security-Policy - mais restritivo e completo
    // header(
	// 	"Content-Security-Policy: " .
    //     "default-src 'self'; " .
    //     "script-src 'self' 'unsafe-inline' https://code.jquery.com https://cdn.jsdelivr.net https://consent.cookiebot.com https://consentcdn.cookiebot.com; " .
    //     "style-src 'self' 'unsafe-inline' https://cdn.jsdelivr.net https://fonts.googleapis.com; " .
    //     "img-src 'self' data: https:; " .
    //     "font-src 'self' data: https://fonts.gstatic.com; " .
    //     "connect-src 'self' https://cdn.jsdelivr.net https://consent.cookiebot.com https://consentcdn.cookiebot.com; " .
    //     "frame-src 'self' https://consent.cookiebot.com https://consentcdn.cookiebot.com https://www.google.com; " .
    //     "base-uri 'self'; " .
    //     "form-action 'self'; " .
    //     "upgrade-insecure-requests"
	// );
    
    // X-Content-Type-Options - mantém
    header("X-Content-Type-Options: nosniff");
    
    // Strict-Transport-Security (HSTS) - mantém
    header("Strict-Transport-Security: max-age=31536000; includeSubDomains; preload");
    
    // X-Frame-Options - mantém (redundante com CSP frame-ancestors, mas bom ter)
    header("X-Frame-Options: DENY");
    
    // Referrer-Policy - melhor opção
    header("Referrer-Policy: strict-origin-when-cross-origin");
    
    // Permissions-Policy - expandido e corrigido
    header("Permissions-Policy: geolocation=(self), microphone=(), camera=(), payment=(), usb=(), magnetometer=(), gyroscope=(), accelerometer=()");
    
    // Cross-Origin-Opener-Policy - NOVO
    header("Cross-Origin-Opener-Policy: same-origin");
    
    // Cross-Origin-Resource-Policy - NOVO
    header("Cross-Origin-Resource-Policy: same-origin");
    
    // Cross-Origin-Embedder-Policy - NOVO (cuidado, pode quebrar recursos externos)
    // header("Cross-Origin-Embedder-Policy: require-corp");
}
add_action('send_headers', 'headers_security');

?>
