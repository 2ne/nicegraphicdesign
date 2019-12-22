<?php
/**
 * nicegraphicdesign functions and definitions
 *
 * @package nicegraphicdesign
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 640; /* pixels */
}

if ( ! function_exists( 'nicegraphicdesign_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function nicegraphicdesign_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on nicegraphicdesign, use a find and replace
	 * to change 'nicegraphicdesign' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'nicegraphicdesign', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	//add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary Menu', 'nicegraphicdesign' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
	) );
	
	add_filter( 'the_content_more_link', 'modify_read_more_link' );
	function modify_read_more_link() {
	return '<a class="more-link" href="' . get_permalink() . '">See More >></a>';
	}

	/*
	 * Enable support for Post Formats.
	 * See http://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'nicegraphicdesign_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif; // nicegraphicdesign_setup
add_action( 'after_setup_theme', 'nicegraphicdesign_setup' );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function nicegraphicdesign_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'nicegraphicdesign' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}
add_action( 'widgets_init', 'nicegraphicdesign_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function nicegraphicdesign_scripts() {
	wp_enqueue_style( 'nicegraphicdesign-style', get_stylesheet_uri() );

	wp_enqueue_script( 'nicegraphicdesign-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	wp_enqueue_script( 'nicegraphicdesign-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'nicegraphicdesign_scripts' );

/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/**
 * Add custom fields to Yoast SEO analysis
 */

add_filter('wpseo_pre_analysis_post_content', 'add_custom_to_yoast');

function add_custom_to_yoast( $content ) {
	global $post;
	$pid = $post->ID;

	$custom = get_post_custom($pid);
	unset($custom['_yoast_wpseo_focuskw']); // Don't count the keyword in the Yoast field!

	foreach( $custom as $key => $value ) {
		if( substr( $key, 0, 1 ) != '_' && substr( $value[0], -1) != '}' && !is_array($value[0]) && !empty($value[0])) {
		  $custom_content .= $value[0] . ' ';
		}
	}

	$content = $content . ' ' . $custom_content;
	return $content;

	remove_filter('wpseo_pre_analysis_post_content', 'add_custom_to_yoast'); // don't let WP execute this twice
}