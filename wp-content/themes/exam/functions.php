<?php
/**
 * ddementieva functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package ddementieva
 */

if ( ! function_exists( 'ddementieva_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function ddementieva_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on ddementieva, use a find and replace
	 * to change 'ddementieva' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'ddementieva', get_template_directory() . '/languages' );

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
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary', 'ddementieva' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See https://developer.wordpress.org/themes/functionality/post-formats/
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'ddementieva_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif;
add_action( 'after_setup_theme', 'ddementieva_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function ddementieva_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'ddementieva_content_width', 640 );
}
add_action( 'after_setup_theme', 'ddementieva_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function ddementieva_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'ddementieva' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar Contact', 'ddementieva' ),
		'id'            => 'sidebar-2',
		'description'   => '',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'ddementieva_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function ddementieva_scripts() {
	wp_enqueue_style( 'ddementieva-flexslider', get_template_directory_uri() . '/css/flexslider.css' );

	wp_enqueue_style( 'ddementieva-style', get_stylesheet_uri() );

	wp_enqueue_style( 'ddementieva-google-fonts', 'https://fonts.googleapis.com/css?family=Oswald:400,300,700' );

	wp_enqueue_style( 'ddementieva-fontawesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css' );

	wp_enqueue_script( 'ddementieva-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'ddementieva-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'ddementieva_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

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

// Output Customize CSS
function ddementieva_customize_css() { ?>
	<style type="text/css">
		.header-bottom .nav-menu,
		.layer {
			background-color: <?php echo get_theme_mod('ddementieva_accent_color'); ?>;
		}

		.header-bottom .menu .current-menu-item a::before,
		.header-bottom .menu a:hover::before,
		.header-bottom .menu a:focus::before {
			border-left-color: <?php echo get_theme_mod('ddementieva_accent_color'); ?>;
		}

		.slide-content {
			border-top-color: <?php echo get_theme_mod('ddementieva_accent_color'); ?>;
		}

		.hamburger,
		.hamburger:hover,
		.hamburger:focus,
		.hamburger:active {
			border-color: <?php echo get_theme_mod('ddementieva_accent_color'); ?>;
		}

		.slides li::before {
			border-bottom-color: <?php echo get_theme_mod('ddementieva_accent_color'); ?>;
			border-right-color: <?php echo get_theme_mod('ddementieva_accent_color'); ?>;
		}

		.flex-control-nav li .flex-active {
			color: <?php echo get_theme_mod('ddementieva_accent_color'); ?>;
		}

		.type-post .continue,
		.enews-widget input[type="submit"],
		.widget_recent_entries ul li a:hover,
		.widget_categories .cat-item:hover,
		.widget_categories .cat-item span,
		.entry-header-cat2,
		.wpcf7-form input[type="submit"],
		.phone,
		.mail {
			background-color: <?php echo get_theme_mod('ddementieva_accent_color'); ?>;
		}
	</style>
<?php }

add_action('wp_head', 'ddementieva_customize_css');

// Custom Post Type Slider
function ddementieva_custom_post_type() {
	$labels = array (
		'name' => 'Slider',
		'singular_name' => 'Slide',
		'add_new' => 'Add Slide',
		'all_items' => 'All Slides',
		'add_new_item' => 'Add Slide',
		'edit_item' => 'Edit Slide',
		'new_item' => 'New Slide',
		'view_item' => 'View Slide',
		'search_item' => 'Search Slides',
		'not_found' => 'No Slides found',
		'not_found_in_trash' => 'No Slides found in trash',
		'parent_item_colon' => 'Parent Slide'
	);
	$args = array(
		'labels' => $labels,
		'public' => true,
		'has_archive' => false,
		'publicly_queryable' => true,
		'query_var' => true,
		'rewrite' => true,
		'capability_type' => 'post', // attachment?
		'hierarchical' => false,
		'supports' => array(
			'title',
			'editor',
			'excerpt',
			'thumbnail',
			'revisions',
		),
		'new_position' => 5,
		'exclude_from_search' => false,
	);
	register_post_type('slider', $args);
}

add_action('init', 'ddementieva_custom_post_type');

// Customize excerpt word count length
function custom_excerpt_length() {
	return 84;
}

add_filter('excerpt_length', 'custom_excerpt_length');

// Replaces the excerpt "more" text by a link
function new_excerpt_more($more) {
	global $post;
	return '';
}
add_filter('excerpt_more', 'new_excerpt_more');

// Category count in <span>
function add_span_cat_count($links) {
	$links = str_replace('</a> (', '</a> <span>(', $links);
	$links = str_replace(')', ')</span>', $links);
	return $links;
}
add_filter('wp_list_categories', 'add_span_cat_count');
