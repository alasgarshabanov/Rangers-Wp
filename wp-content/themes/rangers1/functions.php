<?php

/**
 * Rangers functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Rangers
 */

if (!defined('_S_VERSION')) {
	// Replace the version number of the theme on each release.
	define('_S_VERSION', '1.0.0');
}

if (!function_exists('rangers1_setup')) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function rangers1_setup()
	{
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Rangers, use a find and replace
		 * to change 'rangers1' to the name of your theme in all the template files.
		 */
		load_theme_textdomain('rangers1', get_template_directory() . '/languages');

		// Add default posts and comments RSS feed links to head.
		add_theme_support('automatic-feed-links');

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support('title-tag');

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support('post-thumbnails');

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'menu-1' => esc_html__('Primary', 'rangers1'),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'rangers1_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support('customize-selective-refresh-widgets');

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action('after_setup_theme', 'rangers1_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function rangers1_content_width()
{
	$GLOBALS['content_width'] = apply_filters('rangers1_content_width', 640);
}
add_action('after_setup_theme', 'rangers1_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function rangers1_widgets_init()
{
	register_sidebar(
		array(
			'name'          => esc_html__('Sidebar', 'rangers1'),
			'id'            => 'sidebar-1',
			'description'   => esc_html__('Add widgets here.', 'rangers1'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action('widgets_init', 'rangers1_widgets_init');


/**
 * Enqueue scripts and styles.
 */
function rangers1_scripts()
{
	//wp_enqueue_style( 'rangers1-style', get_stylesheet_uri(), array(), _S_VERSION );

	$current_post_id = get_queried_object_id(); // get_the_ID()
	// var_dump($current_post_id);
	if ($current_post_id == 54) {
		wp_enqueue_script(
			'google-map-script',
			"https://maps.googleapis.com/maps/api/js?key=AIzaSyAgC6ZapXdUzFdeQOFhdm_wucwlDMMQ8CQ",
			[],
			_S_VERSION,
			true
		);
	}

	$post_type = get_post_type($current_post_id);
	if ($post_type == 'club') {
		wp_enqueue_script(
			'counterup-script',
			get_template_directory_uri() . "/assets/js/jquery.counterup.min.js",
			['theme-jquery'],
			_S_VERSION,
			true
		);
		wp_enqueue_script(
			'waypoints-script',
			get_template_directory_uri() . "/assets/js/waypoints.min.js",
			['theme-jquery', 'counterup-script'],
			_S_VERSION,
			true
		);
	}

	//var_dump($post_type); die();
	wp_enqueue_style(
		'theme-bootstrap',
		get_template_directory_uri() . "/assets/css/bootstrap.min.css",
		[],
		_S_VERSION
	);
	wp_enqueue_style(
		'theme-font-awesome',
		get_template_directory_uri() . "/assets/css/font-awesome.min.css",
		[],
		_S_VERSION
	);
	wp_enqueue_style(
		'theme-animate',
		get_template_directory_uri() . "/assets/css/animate.css",
		[],
		_S_VERSION
	);
	wp_enqueue_style(
		'theme-rsmenu-main',
		get_template_directory_uri() . "/assets/css/rsmenu-main.css",
		[],
		_S_VERSION
	);
	wp_enqueue_style(
		'theme-rsmenu-transitions',
		get_template_directory_uri() . "/assets/css/rsmenu-transitions.css",
		[],
		_S_VERSION
	);
	wp_enqueue_style(
		'theme-hover-min',
		get_template_directory_uri() . "/assets/css/hover-min.css",
		[],
		_S_VERSION
	);

	wp_enqueue_style(
		'theme-magnific-popup',
		get_template_directory_uri() . "/assets/css/magnific-popup.css",
		[],
		_S_VERSION
	);

	wp_enqueue_style(
		'theme-owl.carousel',
		get_template_directory_uri() . "/assets/css/owl.carousel.css",
		[],
		_S_VERSION
	);
	wp_enqueue_style(
		'theme-time-circles',
		get_template_directory_uri() . "/assets/css/time-circles.css",
		[],
		_S_VERSION
	);
	wp_enqueue_style(
		'theme-slick',
		get_template_directory_uri() . "/assets/css/slick.css",
		[],
		_S_VERSION
	);
	wp_enqueue_style(
		'rangers1-style',
		get_stylesheet_uri(),
		array(),
		_S_VERSION
	);

	wp_enqueue_style(
		'theme-responsive',
		get_template_directory_uri() . "/assets/css/responsive.css",
		[],
		_S_VERSION
	);







	//JS_SCRIPTS

	wp_enqueue_script(
		'theme-jquery',
		get_template_directory_uri() . "/assets/js/jquery.min.js",
		[],
		_S_VERSION,
		true
	);
	wp_enqueue_script(
		'theme-rsmenu-main',
		get_template_directory_uri() . "/assets/js/rsmenu-main.js",
		[],
		_S_VERSION,
		true
	);
	wp_enqueue_script(
		'theme-jquery-ui.min',
		get_template_directory_uri() . "/assets/js/jquery-ui.min.js",
		[],
		_S_VERSION,
		true
	);
	wp_enqueue_script(
		'theme-bootstrap.min',
		get_template_directory_uri() . "/assets/js/bootstrap.min.js",
		[],
		_S_VERSION,
		true
	);
	wp_enqueue_script(
		'theme-jquery.meanmenu',
		get_template_directory_uri() . "/assets/js/jquery.meanmenu.js",
		[],
		_S_VERSION,
		true
	);

	wp_enqueue_script(
		'theme-wow.min',
		get_template_directory_uri() . "/assets/js/wow.min.js",
		[],
		_S_VERSION,
		true
	);
	wp_enqueue_script(
		'theme-slick.min',
		get_template_directory_uri() . "/assets/js/slick.min.js",
		[],
		_S_VERSION,
		true
	);
	wp_enqueue_script(
		'theme-masonry',
		get_template_directory_uri() . "/assets/js/masonry.js",
		[],
		_S_VERSION,
		true
	);
	wp_enqueue_script(
		'theme-owl.carousel.min',
		get_template_directory_uri() . "/assets/js/owl.carousel.min.js",
		[],
		_S_VERSION,
		true
	);
	wp_enqueue_script(
		'theme-time-circle',
		get_template_directory_uri() . "/assets/js/time-circle.js",
		[],
		_S_VERSION,
		true
	);
	wp_enqueue_script(
		'theme-jquery.magnific-popup',
		get_template_directory_uri() . "/assets/js/jquery.magnific-popup.js",
		[],
		_S_VERSION,
		true
	);
	wp_enqueue_script(
		'theme-main',
		get_template_directory_uri() . "/assets/js/main.js",
		//['counterup-script'],
		[],
		_S_VERSION,
		true
	);
}
add_action('wp_enqueue_scripts', 'rangers1_scripts');


##CPTs
require get_template_directory() . '/inc/cpt/cpt-news.php';

require get_template_directory() . '/inc/cpt/cpt-club.php';



// 
// /**
//  * Implement the Custom Header feature.
//  */
// require get_template_directory() . '/inc/custom-header.php';
// 
// /**
//  * Custom template tags for this theme.
//  */
// require get_template_directory() . '/inc/template-tags.php';
// 
// /**
//  * Functions which enhance the theme by hooking into WordPress.
//  */
// require get_template_directory() . '/inc/template-functions.php';
// 
// /**
//  * Customizer additions.
//  */
// require get_template_directory() . '/inc/customizer.php';
// 
// /**
//  * Load Jetpack compatibility file.
//  */
// if ( defined( 'JETPACK__VERSION' ) ) {
	// require get_template_directory() . '/inc/jetpack.php';
// }
// 
