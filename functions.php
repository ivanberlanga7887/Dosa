<?php if (!defined('ABSPATH')) exit;

include_once ABSPATH . 'wp-admin/includes/plugin.php';

$lang = null;

add_post_type_support( 'page', 'excerpt' );
add_action('wp_enqueue_scripts', 'saoJs');


/**-------------------------------------
 *  Menús
 * ---------------------------------*/

function registrar_menus() {
    register_nav_menu('menu-principal', __( 'Menu Principal' )); 
    register_nav_menu('footer', __( 'Menu legal' )); 
}
add_action('init', 'registrar_menus');

require_once get_template_directory() . '/partials/common/custom-nav-walker.php';


/**-------------------------------------
 *  JS Enqueue Script
 * ---------------------------------*/


function saoJs () {

    wp_enqueue_script(
        'scrollmagic',
        'https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/ScrollMagic.min.js',
        ['jquery', 'bootstrap'],
        true
    );
    wp_enqueue_script(
        'scrollmagic-debug',
        'https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/debug.addIndicators.min.js',
        ['jquery', 'bootstrap'],
        true
    );
    wp_enqueue_script(
        'gsap',
        'https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js',
        ['jquery', 'bootstrap'],
        true
    );
    wp_enqueue_script(
        'scrolltrigger',
        'https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/ScrollTrigger.min.js',
        ['jquery', 'bootstrap'],
        true
    );
     wp_enqueue_script(
        'swiper',
        'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js',
        ['jquery', 'bootstrap'],
        true
    );
	wp_enqueue_script(
		'sao-classic',
		get_template_directory_uri() . '/assets/js/main.min.js',
		['jquery', 'bootstrap', 'scrollmagic', 'swiper'],
		null,
		[
			'in_footer' => true
		]
	);
	wp_enqueue_script(
		'bootstrap',
		'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js',
		[],
		null,
		[
			'in_footer' => true
		]
	);
}

/**-------------------------------------
 *  CSS Enqueue StyleSheets
 * ---------------------------------*/

add_action( 'wp_enqueue_scripts', 'saoCss' );

function saoCss() {
    wp_enqueue_style(
      'bootstrap',
      'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css',
      [], // Dependencies
      null // Version
    );
    wp_enqueue_style(
      'sao',
      get_template_directory_uri() . '/assets/css/main.min.css',
      ['bootstrap'], // Dependencies
      null // Version
    );
}



