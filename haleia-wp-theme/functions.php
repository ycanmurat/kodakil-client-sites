<?php
//Add thumbnail, automatic feed links and title tag support
add_theme_support('post-thumbnails');
add_theme_support('automatic-feed-links');
add_theme_support('title-tag');

// Woocommerce Support
function fm_add_woocommerce_support()
{
	add_theme_support('woocommerce');
	//add_theme_support('wc-product-gallery-zoom');
	add_theme_support('wc-product-gallery-lightbox');
	add_theme_support('wc-product-gallery-slider');
}

add_action('after_setup_theme', 'fm_add_woocommerce_support');

add_filter( 'woocommerce_single_product_carousel_options', 'sf_update_woo_flexslider_options' );

function sf_update_woo_flexslider_options( $options ) {
    $options['directionNav'] = true;
    $options['controlNav'] = false;
    return $options;
}

//Add content width (desktop default)
if (!isset($content_width)) {
	$content_width = 768;
}

//Add menu support and register main menu
if (function_exists('register_nav_menus')) {
	register_nav_menus(
		array(
			'top_menu_left' 	=> 'Top Menu Left',
			'top_menu_right' 	=> 'Top Menu Right',
			'main_menu' 	=> 'Main Menu',
			'footer_menu_01'	=> 'Footer Menu Column 1',
			'footer_menu_02'	=> 'Footer Menu Column 2',
			'footer_menu_03'	=> 'Footer Menu Column 3',
			'footer_menu_04'	=> 'Footer Menu Column 4',
			'footer_menu_05'	=> 'Footer Menu Column 5'
		)
	);
}

// Register sidebar
add_action('widgets_init', 'theme_register_sidebar');
function theme_register_sidebar()
{
	if (function_exists('register_sidebar')) {
		register_sidebar(array(
			'id' => 'sidebar-1',
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h4>',
			'after_title' => '</h4>',
		));
	}
}

/**
 * Load custom WordPress nav walker.
 */
if (!class_exists('wp_bootstrap_navwalker')) {
	require_once(get_template_directory() . '/inc/wp_bootstrap_navwalker.php');
}


/**
 * Load site scripts.
 */
function bootstrap_theme_enqueue_scripts()
{
	$template_url = get_template_directory_uri();

	// jQuery.
	wp_enqueue_script('jquery');

	// Bootstrap
	wp_enqueue_style('bootstrap-style', $template_url . '/css/bootstrap.min.css');
	wp_enqueue_style('bootstrap-style', $template_url . '/css/bootstrap-grid.min.css');
	wp_enqueue_style('bootstrap-style', $template_url . '/css/bootstrap-reboot.min.css');

	wp_enqueue_script('bootstrap-script', $template_url . '/js/bootstrap.bundle.min.js', array('jquery'), null, true);


	//OWL
	wp_enqueue_script('owl-script', $template_url . '/js/owl.carousel.min.js', array('jquery'), null, true);
	wp_enqueue_style('owl-theme-style', $template_url . '/css/owl.theme.default.css');
	wp_enqueue_style('owl-style', $template_url . '/css/owl.carousel.css');

	// Wow
	wp_enqueue_script('wow-script', $template_url . '/js/wow.min.js', array('jquery'), null, true);
	wp_enqueue_style('wow-style', $template_url . '/css/animate.css');

	// SVG
	wp_enqueue_script('svg4everybody-script', $template_url . '/js/svg4everybody.js');

	//Main Style
	wp_enqueue_style('main-style', get_stylesheet_uri());

	//Theme Style
	wp_enqueue_style('fm-style', $template_url . '/css/main.css');

	//Theme Scripts
	wp_enqueue_script('fm-general-script', $template_url . '/js/general.js', array('jquery'), null, true);

	// Load Thread comments WordPress script.
	if (is_singular() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}

add_action('wp_enqueue_scripts', 'bootstrap_theme_enqueue_scripts', 1);

/* SVG Support for wordpress image loader */
function cc_mime_types($mimes)
{
	$mimes['svg'] = 'image/svg+xml';
	return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');
function my_login_logo()
{ ?>
	<style type="text/css">
		#login h1 a,
		.login h1 a {
			height: 65px;
			width: 320px;
			background-size: contain;
			background-repeat: no-repeat;
			padding-bottom: 30px;
		}
	</style>
<?php }
add_action('login_enqueue_scripts', 'my_login_logo');

/* excerpt limit */
function excerpt($limit)
{
	$excerpt = explode(' ', get_the_excerpt(), $limit);
	if (count($excerpt) >= $limit) {
		array_pop($excerpt);
		$excerpt = implode(" ", $excerpt) . '...';
	} else {
		$excerpt = implode(" ", $excerpt);
	}
	$excerpt = preg_replace('`[[^]]*]`', '', $excerpt);
	return $excerpt;
}

// Remove Span From Contact Form 7
add_filter('wpcf7_form_elements', function ($content) {
	$content = preg_replace('/<(span).*?class="\s*(?:.*\s)?wpcf7-form-control-wrap(?:\s[^"]+)?\s*"[^\>]*>(.*)<\/\1>/i', '\2', $content);
	return $content;
});

function my_acf_google_map_api($api)
{
	$api['key'] = 'YOUR_GOOGLE_API_KEY';
	return $api;
}
add_filter('acf/fields/google_map/api', 'my_acf_google_map_api');


//WOOCOMMERCE ADD/REMOVE ACTIONS
remove_action('woocommerce_before_main_content', 'woocommerce_breadcrumb', 20, 0);

remove_action('woocommerce_before_shop_loop', 'woocommerce_result_count', 20, 0);
remove_action('woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30, 0);

remove_action('woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 10, 0);

remove_action('woocommerce_after_single_product_summary', 'woocommerce_output_product_data_tabs', 10, 0);

?>