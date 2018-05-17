<?php
$order_form_pages = array('prices', 'order', 'preview');
include_once 'redirects.php';
//ADDING JS AND CSS FILES
//--------------------------------------------------
function ox_adding_scripts() {
	if (!function_exists('is_login_page')) {
		function is_login_page() {
			return !strncmp($_SERVER['REQUEST_URI'], '/wp-login.php', strlen('/wp-login.php'));
		}
	}

    if( !is_admin() && !is_login_page()){
		/*removed wp-embed.min.js*/
		wp_deregister_script('wp-embed');

		/*jquery*/
		wp_deregister_script('jquery');
		$infooter = !is_page(array($order_form_pages)) ? true : false;
		wp_register_script('jquery', ("//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"), false, null, true);
		wp_enqueue_script('jquery');

		/* all css */
		wp_enqueue_style( 'styles-all', get_template_directory_uri() . '/style.min.css');

        /* all js */
        wp_enqueue_script('scripts-all', get_template_directory_uri() . '/js/scripts.min.js', array('jquery'), null, true);

    }
}

//add_action( 'wp_enqueue_scripts', 'ox_adding_styles' );
add_action( 'wp_enqueue_scripts', 'ox_adding_scripts' );

//REWOVE SOME META TAGS AND UNNECESSARY LINKS
//--------------------------------------------------
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0 );
remove_action('wp_head', 'feed_links_extra', 3 );
remove_action('wp_head', 'feed_links', 2 );
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'wlwmanifest_link');

//remove wpemoji
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'wp_print_styles', 'print_emoji_styles' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );

//remove wp-json
remove_action( 'wp_head', 'rest_output_link_wp_head', 10 );
remove_action( 'wp_head', 'wp_oembed_add_discovery_links', 10 );


//ADDING CRITICAL CSS (only for front-page)
//--------------------------------------------------
//render-blocking styles
$css_files = array(
    'styles-all'
);

add_action( 'wp_enqueue_scripts', 'ox_adding_critical_css' );

function ox_adding_critical_css() {
    if (!is_front_page()) return;

    global $wp_styles, $css_files;

    if(empty($css_files)) return;

    $registered_styles = $css_files;
    $css_files = array();

    foreach ($registered_styles as $item) {
        $s = $wp_styles->registered[$item]->src;
        $css_files[$item] = $s ;
    }

    $critical_css = load_template_part('css/critical.css');
    echo '<style>' . $critical_css . '</style>';

    global $css_files;

    foreach ($css_files as $key => $item) {
        wp_deregister_style($key);
        echo "<noscript><link rel='stylesheet' href='$item'/></noscript>";
    }

    function hook_non_critical_css() {
        global $css_files;

        foreach ($css_files as $key => $item) {
            echo '<script>function loadCSS(e,t,n){"use strict";var i=window.document.createElement("link");var o=t||window.document.getElementsByTagName("script")[0];i.rel="stylesheet";i.href=e;i.media="only x";o.parentNode.insertBefore(i,o);setTimeout(function(){i.media=n||"all"})}loadCSS("' . $item . '");</script>';
        }
    }

    add_action('wp_footer','hook_non_critical_css');
}

function load_template_part($template_name, $part_name=null) {
    ob_start();
    get_template_part($template_name, $part_name);
    $var = ob_get_contents();
    ob_end_clean();
    return $var;
}


//REGISTRATION MENU
//--------------------------------------------------
register_nav_menus( array(
	'header-nav' => 'Header-nav',
	'footer-nav' => 'Footer-nav'
));


//CUSTOM EXCERPT ('Read More' btn)
//--------------------------------------------------
// custom excerpt length
function ox_custom_excerpt_length( $length ) {
	return 50;
}
add_filter( 'excerpt_length', 'ox_custom_excerpt_length', 999 );

// add more link to excerpt
function ox_custom_excerpt_more($more) {
	global $post;
	return '... <div class="site_more-btn-wrap"><a class="btn btn-default site_big-btn site_more-btn" href="'. get_permalink($post->ID) . '">'.'Read More' .'</a></div>';
}
add_filter('excerpt_more', 'ox_custom_excerpt_more');

if (!function_exists('isReturnedCustomer')) {
    function isReturnedCustomer() {
        if (isset($_COOKIE["_customer"])) return true;
    }
}
