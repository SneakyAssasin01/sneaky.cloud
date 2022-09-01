<?php
/**
 * Computer Repair functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Computer_Repair
 */
if ( ! defined( 'COMPUTER_REPAIR_THEME_URI' ) ) {
	define( 'COMPUTER_REPAIR_THEME_URI', get_template_directory_uri() );
}
if ( ! defined( 'COMPUTER_REPAIR_IMG_URL' ) ) {
	define( 'COMPUTER_REPAIR_IMG_URL', COMPUTER_REPAIR_THEME_URI . '/images/' );
}
define( 'COMPUTER_REPAIR_THEME_DIR', get_template_directory() );
define( 'COMPUTER_REPAIR_CSS_URL', get_template_directory_uri() . '/css' );
define( 'COMPUTER_REPAIR_JS_URL', get_template_directory_uri() . '/js' );
define( 'COMPUTER_REPAIR_FONTS_URL', get_template_directory_uri() . '/fonts/font-awesome/css' );
define( 'COMPUTER_REPAIR_FREAMWORK_DIRECTORY', COMPUTER_REPAIR_THEME_DIR . '/framework/' );
define( 'COMPUTER_REPAIR_INC_DIRECTORY', COMPUTER_REPAIR_THEME_DIR . '/inc/' );
define( 'REV_SLIDER_AS_THEME', true );
/*
  default config variable
 */
$fonts_areas = array(
	'computer_repair-body_typography',
	'computer_repair-heading-1-2-lg-typography',
);

/*
 * plugin.php has to load to know which plugin is active
 */
require_once ABSPATH . 'wp-admin/includes/plugin.php';
require_once COMPUTER_REPAIR_FREAMWORK_DIRECTORY . 'plugin-list.php';

/*
 * Enable Hooking
 */
require get_template_directory() . '/inc/hooks.php';

/*
 * Enable support TGM features.
 */
require_once COMPUTER_REPAIR_FREAMWORK_DIRECTORY . 'class-tgm-plugin-activation.php';

/*
 * Load Theme Customizer.
 */
require_once COMPUTER_REPAIR_FREAMWORK_DIRECTORY . 'framework_customizer.php';

/*
 * Redux framework configuration
 */

require_once COMPUTER_REPAIR_FREAMWORK_DIRECTORY . 'redux.fallback.php';
require_once COMPUTER_REPAIR_FREAMWORK_DIRECTORY . 'redux.config.php';

/*
 * Enable support TGM configuration.
 */
require_once COMPUTER_REPAIR_FREAMWORK_DIRECTORY . 'config.tgm.php';

require_once COMPUTER_REPAIR_FREAMWORK_DIRECTORY . '/dashboard/class-dashboard.php';

/*
 * Load Menu Walker
 */

require_once COMPUTER_REPAIR_FREAMWORK_DIRECTORY . 'nav_menu_walker.php';


/**
 * Implement the post meta.
 */
require get_template_directory() . '/inc/post_meta.php';


/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';


/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/**
 * comment walker.
 */
require get_template_directory() . '/inc/class-walker-comment.php';




if ( ! function_exists( 'computer_repair_setup' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function computer_repair_setup() {
		/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on Computer Repair, use a find and replace
		* to change 'computer-repair' to the name of your theme in all the template files.
		*/
		load_theme_textdomain( 'computer-repair', get_template_directory() . '/languages' );

		add_editor_style( COMPUTER_REPAIR_CSS_URL . '/editor-style.css' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
		add_theme_support( 'title-tag' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'primary'     => esc_html__( 'Primary Menu', 'computer-repair' ),
				'footer-menu' => esc_html__( 'Footer Menu', 'computer-repair' ),
			)
		);

		/*
		* Enable support for Post Formats.
		*/
		add_theme_support(
			'post-formats',
			array(
				'gallery',
				'audio',
				'video',
				'link',
				'quote',
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
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'laundry_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
		add_theme_support( 'post-thumbnails' );

		add_theme_support( 'wp-block-styles' );
		add_theme_support( 'align-wide' );
		add_theme_support( 'editor-styles' );
		add_theme_support( 'responsive-embeds' );

		// Add custom thumb size
		set_post_thumbnail_size( 270, 157, false );
		add_image_size( 'computer-repair-service-blog-post', 870, 504, true );
		add_image_size( 'computer-repair-service-full', 869, 241, true );
		add_image_size( 'computer-repair-category-block', 370, 371, true );
		add_image_size( 'computer-repair-thumb-team', 268, 268, true );
		add_image_size( 'computer-repair-post-img', 233, 248, true );
	}

endif;
add_action( 'after_setup_theme', 'computer_repair_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function computer_repair_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'computer_repair_content_width', 640 );
}

add_action( 'after_setup_theme', 'computer_repair_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function computer_repair_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Blog Sidebar', 'computer-repair' ),
			'id'            => 'left_sideber',
			'description'   => esc_html__( 'Blog sidebar area', 'computer-repair' ),
			'before_widget' => '<div class="%2$s side-block widget" id="%1$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3>',
			'after_title'   => '</h3>',
		)
	);

	register_sidebar(
		array(
			'name'          => esc_html__( 'Page Sidebar', 'computer-repair' ),
			'id'            => 'pagesidebar',
			'description'   => esc_html__( 'Page sidebar area', 'computer-repair' ),
			'before_widget' => '<div class="%2$s side-block widget" id="%1$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h4 class="">',
			'after_title'   => '</h4>',
		)
	);

	register_sidebar(
		array(
			'name'          => esc_html__( 'Service Sidebar', 'computer-repair' ),
			'id'            => 'servicesidebar',
			'description'   => esc_html__( 'Service sidebar area', 'computer-repair' ),
			'before_widget' => '<div class="%2$s side-block widget" id="%1$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h4 class="">',
			'after_title'   => '</h4>',
		)
	);

	register_sidebar(
		array(
			'name'          => esc_html__( 'Contact Us', 'computer-repair' ),
			'id'            => 'contact_us_sideber',
			'description'   => esc_html__( 'Contact Us sidebar area', 'computer-repair' ),
			'before_widget' => '<div class="%2$s side-block widget" id="%1$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h4 class="text-uppercase title-aside">',
			'after_title'   => '</h4>',
		)
	);

	register_sidebar(
		array(
			'name'          => esc_html__( 'Woo Shop Sidebar', 'computer-repair' ),
			'id'            => 'woo_shop_sideber',
			'description'   => esc_html__( 'Shop sidebar area', 'computer-repair' ),
			'before_widget' => '<div class="%2$s side-block widget" id="%1$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h4 class="title-aside">',
			'after_title'   => '</h4>',
		)
	);
}

add_action( 'widgets_init', 'computer_repair_widgets_init' );

if ( ! function_exists( 'woocommerce_get_sidebar' ) ) {

	function woocommerce_get_sidebar() {
		if ( is_product() ) {
		} else {
			dynamic_sidebar( 'woo_shop_sideber' );
		}
	}
}

function computer_repair_options() {
	global $computer_repair_opt;
	$computer_repair_opt['font-family-icon'] = array(
		'fa'          => 'fontawesome',
		'vc-oi'       => 'openiconic',
		'typcn'       => 'typicons',
		'entypo-icon' => 'entypo',
		'vc_li'       => 'linecons',
		'vc-mono'     => 'monosocial',
		'vc-material' => 'material',
	);
	return $computer_repair_opt;
}

function computer_repair_wrd_slice( $long_text, $limit_text ) {
	if ( strlen( $long_text ) * 1 > $limit_text * 1 ) {
		$long_text = substr( $long_text, 0, $limit_text * 1 - 3 ) . '...';
	}
	return $long_text;
}

/**
 * Enqueue scripts and styles.
 */
function computer_repair_front_init_js_var() {
	global $yith_wcwl, $post, $product;

	wp_localize_script( 'computer-repair-custom', 'THEMEURL', array( 'url' => COMPUTER_REPAIR_THEME_URI ) );
	wp_localize_script( 'computer-repair-custom', 'IMAGEURL', array( 'url' => COMPUTER_REPAIR_THEME_URI . '/images' ) );
	wp_localize_script( 'computer-repair-custom', 'CSSURL', array( 'url' => COMPUTER_REPAIR_THEME_URI . '/css' ) );
}

add_action( 'wp_enqueue_scripts', 'computer_repair_front_init_js_var', 1001 );

function computer_scripts_styles() {
	wp_enqueue_style( 'computer-google-fonts', computer_add_google_font_build(), array(), null );
}
add_action( 'wp_enqueue_scripts', 'computer_scripts_styles' );
function computer_add_google_font_build() {
	 $computer_repair_option = computer_repair_options();
	global $fonts_areas;
	if ( ! class_exists( 'ReduxFramework' ) ) {
		$protocol   = is_ssl() ? 'https:' : 'http:';
		$subsets    = 'latin,cyrillic-ext,latin-ext,cyrillic,greek-ext,greek,vietnamese';
		$variants   = ':200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i';
		$query_args = array(
			'family' => urlencode( 'Open Sans' . $variants ),
			'subset' => urlencode( $subsets ),
		);
		$font_url   = add_query_arg( $query_args, $protocol . '//fonts.googleapis.com/css' );
		return $font_url;
	}

	$font_families = array();
	foreach ( $fonts_areas as $option ) {
		if (
			isset( $computer_repair_option[ $option ]['font-family'] ) && $computer_repair_option[ $option ]['font-family'] && ! in_array( $computer_repair_option[ $option ]['font-family'], $font_families )
		) {
			$font_families[] = $computer_repair_option[ $option ]['font-family'];
		}
	}
	if ( ! empty( $font_families ) ) {
		$protocol      = is_ssl() ? 'https:' : 'http:';
		$subsets       = 'latin,cyrillic-ext,latin-ext,cyrillic,greek-ext,greek,vietnamese';
		$variants      = ':100,100i,300,300i,400,400i,700,700i,900,900i';
		$font_families = implode( '|', $font_families );
		$query_args    = array(
			'family' => $font_families . $variants,
			'subset' => urlencode( $subsets ),
		);
		$font_url      = add_query_arg( $query_args, $protocol . '//fonts.googleapis.com/css' );
		return $font_url;
	}
}

/**
 * Enqueue scripts and styles.
 */
add_action( 'wp_enqueue_scripts', 'computer_repair_scripts', 10000 );

function computer_repair_scripts() {
	$computer_repair_option = computer_repair_options();

	/*
	===============================================================
	* CSS Files
	* --------------------------------------------------------------- */

	/* BOOTSTRAP  ------------------------- */

	wp_enqueue_style( 'bootstrap', COMPUTER_REPAIR_CSS_URL . '/plugins/bootstrap.min.css', '', null );
	wp_enqueue_style( 'bootstrap-submenu', COMPUTER_REPAIR_CSS_URL . '/plugins/bootstrap-submenu.css', '', null );
	wp_enqueue_style( 'animate', COMPUTER_REPAIR_CSS_URL . '/plugins/animate.min.css', '', null );
	wp_enqueue_style( 'magnific-popup', COMPUTER_REPAIR_CSS_URL . '/plugins/magnific-popup.css', '', null );
	wp_enqueue_style( 'bootstrap-datetimepicker', COMPUTER_REPAIR_CSS_URL . '/plugins/bootstrap-datetimepicker.min.css', '', null );
	wp_enqueue_style( 'slick', COMPUTER_REPAIR_CSS_URL . '/plugins/slick.css', '', null );
	wp_enqueue_style( 'computer-repair-style', get_stylesheet_uri(), '', time() );
	wp_enqueue_style( 'wp-default-norm', COMPUTER_REPAIR_CSS_URL . '/wp-default-norm.css', '', null );
	wp_enqueue_style( 'iconfont-style', COMPUTER_REPAIR_THEME_URI . '/iconfont/style.css', '', time() );
	wp_enqueue_style( 'shopcss', COMPUTER_REPAIR_CSS_URL . '/shop.css', null, time() );

	include_once COMPUTER_REPAIR_THEME_DIR . '/css/custom_style.php';

	$computer_repair_custom_inline_style = '';

	if ( function_exists( 'computer_repair_get_custom_styles' ) ) {
		$computer_repair_custom_inline_style = computer_repair_get_custom_styles();
	}

	wp_add_inline_style( 'computer-repair-style', $computer_repair_custom_inline_style );

	/*
	===============================================================
	* JS Files
	* --------------------------------------------------------------- */

	wp_enqueue_script( 'bootstrap', COMPUTER_REPAIR_JS_URL . '/plugins/bootstrap.min.js', array( 'jquery' ), '', true );

	wp_enqueue_script( 'slick', COMPUTER_REPAIR_JS_URL . '/plugins/slick.min.js', array( 'jquery' ), '', true );
	wp_enqueue_script( 'slider-effect', COMPUTER_REPAIR_JS_URL . '/plugins/slider-effect.js', array( 'jquery' ), '', true );
	wp_register_script( 'countTo', COMPUTER_REPAIR_JS_URL . '/plugins/jquery.countTo.js', array( 'jquery' ), '', true );

	wp_enqueue_script( 'moment', COMPUTER_REPAIR_JS_URL . '/plugins/moment.js', array( 'jquery' ), '', true );
	wp_enqueue_script( 'magnific-popup', COMPUTER_REPAIR_JS_URL . '/plugins/jquery.magnific-popup.min.js', array( 'jquery' ), '', true );
	wp_enqueue_script( 'bootstrap-datetimepicker', COMPUTER_REPAIR_JS_URL . '/plugins/bootstrap-datetimepicker.min.js', array( 'jquery' ), '', true );

	wp_enqueue_script( 'waypoints', COMPUTER_REPAIR_JS_URL . '/plugins/jquery.waypoints.min.js', array( 'jquery' ), '', true );

	wp_enqueue_script( 'jquery-ui-spinner', false, array( 'jquery' ) );

	wp_enqueue_script( 'jquery-form', COMPUTER_REPAIR_JS_URL . '/plugins/jquery.form.js', array( 'jquery' ), '', true );
	wp_enqueue_script( 'jquery-validate', COMPUTER_REPAIR_JS_URL . '/plugins/jquery.validate.min.js', array( 'jquery' ), '', true );
	wp_enqueue_script( 'stacktable', COMPUTER_REPAIR_JS_URL . '/plugins/stacktable.js', array( 'jquery' ), '', true );

	/* ====================== Custom JavaScripts -- */

	wp_enqueue_script( 'computer-repair-custom', COMPUTER_REPAIR_JS_URL . '/custom.js', array( 'jquery', 'waypoints', 'countTo', 'slick' ), time(), true );

	wp_localize_script(
		'computer-repair-custom',
		'ajax_object',
		array(
			'ajax_nonce_removecart'  => wp_create_nonce( 'removecart' ),
			'ajax_nonce_servicecart' => wp_create_nonce( 'servicecart' ),
			'ajax_url'               => esc_url( admin_url( 'admin-ajax.php' ) ),
			'close_text'             => esc_html__( 'close', 'computer-repair' ),
			'loader_img'             => COMPUTER_REPAIR_IMG_URL . '/ajax-loader.gif',
		)
	);

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}

add_action( 'admin_enqueue_scripts', 'computer_repair_admin_enqueue' );

function computer_repair_admin_enqueue() {
	wp_enqueue_script( 'computer-repair-custom-admin', get_template_directory_uri() . '/js/admin.js' );
}


function computer_gutenberg_editor_palette_styles() {
	add_theme_support(
		'editor-color-palette',
		array(
			array(
				'name'  => esc_html__( 'strong yellow', 'computer-repair' ),
				'slug'  => 'strong-yellow',
				'color' => '#f7bd00',
			),
			array(
				'name'  => esc_html__( 'strong white', 'computer-repair' ),
				'slug'  => 'strong-white',
				'color' => '#fff',
			),
			array(
				'name'  => esc_html__( 'light black', 'computer-repair' ),
				'slug'  => 'light-black',
				'color' => '#242424',
			),
			array(
				'name'  => esc_html__( 'very light gray', 'computer-repair' ),
				'slug'  => 'very-light-gray',
				'color' => '#797979',
			),
			array(
				'name'  => esc_html__( 'very dark black', 'computer-repair' ),
				'slug'  => 'very-dark-black',
				'color' => '#000000',
			),
		)
	);

	add_theme_support(
		'editor-font-sizes',
		array(
			array(
				'name' => esc_html__( 'Small', 'computer-repair' ),
				'size' => 10,
				'slug' => 'small',
			),
			array(
				'name' => esc_html__( 'Normal', 'computer-repair' ),
				'size' => 15,
				'slug' => 'normal',
			),
			array(
				'name' => esc_html__( 'Large', 'computer-repair' ),
				'size' => 24,
				'slug' => 'large',
			),
			array(
				'name' => esc_html__( 'Huge', 'computer-repair' ),
				'size' => 36,
				'slug' => 'huge',
			),
		)
	);
}
add_action( 'after_setup_theme', 'computer_gutenberg_editor_palette_styles' );


function computer_add_editor_styles() {
	add_editor_style( 'editor-style.css' );
}
add_action( 'admin_init', 'computer_add_editor_styles' );



function computer_add_google_font() {
	wp_enqueue_style( 'computer-google-fonts-admin', computer_build_google_font(), array(), null );
}

add_action( 'admin_enqueue_scripts', 'computer_add_google_font' );

function computer_build_google_font() {
	$protocol   = is_ssl() ? 'https:' : 'http:';
	$subsets    = 'latin,cyrillic-ext,latin-ext,cyrillic,greek-ext,greek,vietnamese';
	$query_args = array(
		'family' => urlencode( 'Chivo:400,400i,500,600,700,900,900i|Open Sans:300,300i,400,400i,500,600,600i,700,700i,800,800i' ),
	);
	$font_url   = add_query_arg( $query_args, $protocol . '//fonts.googleapis.com/css' );
	return $font_url;
}


function computer_block_editor_styles() {
	wp_enqueue_style( 'computer-block-styles', get_theme_file_uri( 'css/all-blocks.css' ), false, '1.0', 'all' );
}

add_action( 'admin_enqueue_scripts', 'computer_block_editor_styles' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';


add_action( 'computer_repair_breadcrumb_2', 'computer_repair_breadcrumb_2' );

function computer_repair_breadcrumb_2() {
	global $post, $computer_repair_opt;
	if ( ! isset( $post->ID ) ) {
		return false;
	}
	if ( ! is_front_page() || is_home() ) {
		if ( ( isset( $post->post_type ) && is_page() ) || is_search() || is_home() || is_single() || is_archive() || is_category() ) {
			$show_breadcrumb = 'on';
			?>
<div class="block">
	<div class="breadcrumbs-design2">
		<div class="container">
			<?php
			if ( $show_breadcrumb == 'on' || ! $show_breadcrumb ) {
				if ( function_exists( 'yoast_breadcrumb' ) ) {
					?>
					<?php
					yoast_breadcrumb( '<ul class="breadcrumbs">', '</ul>' );
				}
			}
			?>
			</ul>
		</div>
	</div>
</div>
			<?php
		}
	}
}

add_action( 'computer_repair_breadcrumb', 'computer_repair_breadcrumb' );

function computer_repair_breadcrumb() {
	 global $post, $computer_repair_opt;
	if ( ! isset( $post->ID ) ) {
		return false;
	}
	if ( ! is_front_page() || is_home() ) {
		if ( ( isset( $post->post_type ) && is_page() ) || is_search() || is_home() || is_single() || is_archive() || is_category() ) {
			$show_breadcrumb = 'on';
			?>
<div class="block bottom-sm-1">
	<div class="container">
			<?php
			if ( $show_breadcrumb == 'on' || ! $show_breadcrumb ) {
				if ( function_exists( 'yoast_breadcrumb' ) ) {
					?>
		<!-- Breadcrumb section -->
					<?php
					yoast_breadcrumb( '<div class="breadcrumbs">', '</div>' );
				}
			}
			?>
		<!--end Breadcrumb section -->
	</div>
</div>
			<?php
		}
	}
}

function computer_repair_w_search_form( $form ) {
	$form = '<form role="search" method="get" id="searchform" class="search_form m0 widget widget_search" action="' . esc_url( home_url( '/' ) ) . '" >
   <input type="text" value="' . get_search_query() . '" name="s" class="form-control" placeholder="' . esc_attr__( 'Search Here', 'computer-repair' ) . '" >
   <span class="input-group-addon">
    <button type="submit" class="btn btn-default">' . esc_html__( 'Search', 'computer-repair' ) . '</button>
   </span>
 
 </form>';

	return $form;
}

add_filter( 'get_search_form', 'computer_repair_w_search_form' );

if ( ! function_exists( 'computer_repair_comment_nav' ) ) :

	function computer_repair_comment_nav() {
		// Are there comments to navigate through?
		if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) :
			?>
<nav class="navigation comment-navigation">
	<h2 class="screen-reader-text"><?php esc_html_e( 'Comment navigation', 'computer-repair' ); ?></h2>
	<div class="nav-links">
			<?php
			if ( $prev_link = get_previous_comments_link( esc_html__( 'Older Comments', 'computer-repair' ) ) ) :
				printf( '<div class="nav-previous">%s</div>', $prev_link );
					endif;

			if ( $next_link = get_next_comments_link( esc_html__( 'Newer Comments', 'computer-repair' ) ) ) :
				printf( '<div class="nav-next">%s</div>', $next_link );
					endif;
			?>
	</div><!-- .nav-links -->
</nav><!-- .comment-navigation -->
			<?php
		endif;
	}

endif;

add_filter( 'widget_text', 'do_shortcode' );

function woocommerce_template_loop_product_title() {
	echo '<h4 class="woocommerce-loop-product__title">' . get_the_title() . '</h4>';
}

remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_upsell_display', 15 );
add_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_upsells', 15 );

if ( ! function_exists( 'woocommerce_output_upsells' ) ) {

	function woocommerce_output_upsells() {
		 woocommerce_upsell_display( 4, 4 ); // Display 4 products in rows of 4
	}
}

remove_action( 'woocommerce_cart_collaterals', 'woocommerce_cross_sell_display' );
add_action( 'woocommerce_cart_collaterals', 'woocommerce_output_cross_sell_display', 15 );

if ( ! function_exists( 'woocommerce_output_cross_sell_display' ) ) {

	function woocommerce_output_cross_sell_display() {
		woocommerce_cross_sell_display( 2, 2 ); // Display 4 products in rows of 4
	}
}


add_action( 'after_setup_theme', 'view_product_design' );

function view_product_design() {
	add_theme_support( 'woocommerce' );
	add_theme_support( 'wc-product-gallery-zoom' );
	add_theme_support( 'wc-product-gallery-lightbox' );
	add_theme_support( 'wc-product-gallery-slider' );
}

function woocommerce_template_loop_add_to_cart( $args = array() ) {
	global $product;

	if ( $product ) {
		$defaults = array(
			'quantity' => 1,
			'class'    => implode(
				' ',
				array_filter(
					array(
						'product_type_' . $product->get_type(),
						$product->is_purchasable() && $product->is_in_stock() ? 'add_to_cart_button' : '',
						$product->supports( 'ajax_add_to_cart' ) ? 'ajax_add_to_cart' : '',
					)
				)
			),
		);

		$args = apply_filters( 'woocommerce_loop_add_to_cart_args', wp_parse_args( $args, $defaults ), $product );

		wc_get_template( 'loop/add-to-cart.php', $args );
	}
}

function computer_repair_add_to_cart_fragment( $fragments ) {
	ob_start();
	$computer_repair = computer_repair_options();
	$mobileCart      = false;
	if ( isset( $computer_repair['computer_repair-is_cart_in_mobile'] ) && $computer_repair['computer_repair-is_cart_in_mobile'] == 0 ) {
		$mobileCart = true;
	}
	$count            = WC()->cart->cart_contents_count;
	$conditionarray   = array();
	$conditionarray[] = $count > 0;
	$conditionarray[] = is_shop();
	$conditionarray[] = is_product_category();
	$conditionarray[] = is_product();
	$conditionarray[] = is_cart();
	if ( wp_is_mobile() && count( array_unique( $conditionarray ) ) === 1 && $mobileCart != false ) {
	} else {
		?>
<a class="cart-contents icon icon-shopping-cart" href="<?php echo esc_js( 'javascript:void(0)' ); ?>"
	title="<?php echo esc_html_e( 'View your shopping cart', 'computer-repair' ); ?>">

	<span class="badge cart-contents-count"><?php echo esc_html( $count ); ?></span></a>

		<?php
	}
	$fragments['a.cart-contents'] = ob_get_clean();

	return $fragments;
}

add_filter( 'woocommerce_add_to_cart_fragments', 'computer_repair_add_to_cart_fragment' );
add_filter( 'woocommerce_add_to_cart_fragments', 'computer_repair_add_to_cart_fragment_details' );

function computer_repair_add_to_cart_fragment_details( $fragments ) {
	ob_start();
	?>

<div class="header-cart-dropdown">
	<?php get_template_part( 'woocommerce/cart/mini', 'cart' ); ?>
</div>

	<?php
	$fragments['div.header-cart-dropdown'] = ob_get_clean();

	return $fragments;
}

function woocommerce_widget_shopping_cart_button_view_cart() {
	echo '<a href="' . esc_url( wc_get_cart_url() ) . '" class="btn wc-forward">' . esc_html__( 'View cart', 'computer-repair' ) . '</a>';
}

function woocommerce_widget_shopping_cart_proceed_to_checkout() {
	echo '<a href="' . esc_url( wc_get_checkout_url() ) . '" class="btn btn-invert checkout wc-forward">' . esc_html__( 'Checkout', 'computer-repair' ) . '</a>';
}
if ( ! function_exists( 'computer_repair_remove_item_from_cart' ) ) {

	function computer_repair_remove_item_from_cart() {
		$cart = WC()->instance()->cart;
		$id   = sanitize_text_field( $_POST['product_id'] );
		if ( isset( $_POST['cid'] ) && $_POST['cid'] != '' ) {
			$cart_item_id = $cart->find_product_in_cart( $_POST['cid'] );
		} else {
			$cart_id      = $cart->generate_cart_id( $id );
			$cart_item_id = $cart->find_product_in_cart( $cart_id );
		}
		$array = array();
		if ( $cart_item_id ) {
			$cart->set_quantity( $cart_item_id, 0 );
			WC_AJAX::get_refreshed_fragments();
		} else {
			$array['error'] = true;
			echo json_encode( $array );
		}
		exit();
	}
}

add_action( 'wp_ajax_remove_item_from_cart', 'computer_repair_remove_item_from_cart' );
add_action( 'wp_ajax_nopriv_remove_item_from_cart', 'computer_repair_remove_item_from_cart' );

if ( ! function_exists( 'computer_repair_loop_shop_per_page' ) ) {

	function computer_repair_loop_shop_per_page( $cols ) {
		$computer_repair = computer_repair_options();
		if ( isset( $computer_repair['computer_repair-product_per_page'] ) && $computer_repair['computer_repair-product_per_page'] ) {
			$product_per_page = $computer_repair['computer_repair-product_per_page'];
			$cols             = $product_per_page;

		} else {
			$cols = 9;
		}

		return $cols;
	}
}

add_filter( 'loop_shop_per_page', 'computer_repair_loop_shop_per_page', 20 );

// Display Update car Added success massage.
add_filter( 'wc_add_to_cart_message_html', 'computer_repair_wc_add_to_cart_message_html_func', 10, 2 );

function computer_repair_wc_add_to_cart_message_html_func( $message, $product_id ) {
	$message = preg_replace(
		'#<a.*?>([^>]*)</a>#i',
		'<a href="' . esc_url( wc_get_cart_url() ) . '"
    class="btn btn-invert wc-forward">' . esc_html__( 'View cart', 'computer-repair' ) . '</a>',
		$message
	);
	return $message;
}

// Display Update car Added Error massage.
add_filter( 'woocommerce_add_error', 'computer_repair_woocommerce_add_error' );

function computer_repair_woocommerce_add_error( $error ) {
	$error = preg_replace(
		'#<a.*?>([^>]*)</a>#i',
		'<a href="' . esc_url( wc_get_cart_url() ) . '"
        class="btn btn-invert wc-forward">' . esc_html__( 'View cart', 'computer-repair' ) . '</a>',
		$error
	);
	return $error;
}

	add_filter( 'woocommerce_page_title', 'computer_repair_woo_shop_page_title' );

function computer_repair_woo_shop_page_title( $page_title ) {
	$pieces      = explode( ' ', $page_title );
	$last_word   = array_pop( $pieces );
	$final_title = str_replace( $last_word, '<span class="color">' . $last_word . '<span>', $page_title );
		return $final_title;
}

if ( ! function_exists( 'computer_service_archive_to_custom_archive' ) ) {

	function computer_service_archive_to_custom_archive() {
			$computer_repair = computer_repair_options();
		if ( isset( $computer_repair['computer_repair-slug_postype_computer_services_archive'] ) &&
			! empty( $computer_repair['computer_repair-slug_postype_computer_services_archive'] ) ) {

			if ( is_post_type_archive( 'computer_services' ) ) {
				wp_redirect(
					home_url(
						'/' . $computer_repair['computer_repair-slug_postype_computer_services_archive'] .
						'/'
					),
					301
				);
				exit();
			}
		}
	}
}
add_action( 'template_redirect', 'computer_service_archive_to_custom_archive' );


// service cart add
require_once COMPUTER_REPAIR_FREAMWORK_DIRECTORY . '/priceclass.php';

add_filter( 'woocommerce_add_cart_item', 'computer_service_add_cart_item', 10, 2 );

if ( ! function_exists( 'computer_service_add_cart_item' ) ) {

	function computer_service_add_cart_item( $cart_item, $cart_id ) {

			$post_type = get_post_type( $cart_item['data']->get_id() );
		if ( in_array( $post_type, array( 'devices' ) ) ) {
			$cart_item['data']->set_props(
				array(
					'product_id'     => $cart_item['product_id'],
					'check_in_date'  => $cart_item['check_in_date'],
					'check_out_date' => $cart_item['check_out_date'],
					'woo_cart_id'    => $cart_id,
				)
			);
		}
			return $cart_item;
	}
}
add_filter( 'woocommerce_product_class', 'computer_service_product_class', 10, 4 );

if ( ! function_exists( 'computer_service_product_class' ) ) {

	function computer_service_product_class( $classname, $product_type, $post_type, $product_id ) {

		if ( 'devices' == get_post_type( $product_id ) ) {
			$classname = 'CR_WC_Product_Device';
		}
			return $classname;
	}
}

			add_action( 'wp_ajax_service_add_to_cart', 'computer_service_add_to_cart' );
			add_action( 'wp_ajax_nopriv_service_add_to_cart', 'computer_service_add_to_cart' );

if ( ! function_exists( 'computer_service_add_to_cart' ) ) {

	function computer_service_add_to_cart() {

			global $woocommerce;
		if ( ! $woocommerce || ! $woocommerce->cart ) {
			return $_POST['product_id'];
		}

			// echo $_POST['price'];

			WC()->session->set( 'custom_price' . $_POST['product_id'], ( $_POST['price'] ) );
			$cart_items = $woocommerce->cart->get_cart();

			$existing_products = array();
		foreach ( $cart_items as $cart_item ) {

			$existing_products[ $cart_item['product_id'] ] = $cart_item['quantity'];

		}

			$woo_cart_param = array(
				'product_id'     => $_POST['product_id'],
				'check_in_date'  => '',
				'check_out_date' => '',
				'quantity'       => $_POST['quantity'],
				'service_list'   => trim( $_POST['service'], ',' ),
			);

			$woo_cart_id = $woocommerce->cart->generate_cart_id(
				$woo_cart_param['product_id'],
				null,
				array(),
				$woo_cart_param
			);

		if ( array_key_exists( $woo_cart_id, $cart_items ) ) {

			if ( array_key_exists( $woo_cart_param['product_id'], $existing_products ) ) {
				$new_quantity = $existing_products[ $woo_cart_param['product_id'] ];
				$new_quantity++;
				$woo_cart_param['quantity'] = $new_quantity;
			} else {
				$new_quantity = $_POST['quantity'];

			}
			$woocommerce->cart->set_quantity( $woo_cart_id, $new_quantity );
		} else {
			$woocommerce->cart->add_to_cart(
				$woo_cart_param['product_id'],
				$woo_cart_param['quantity'],
				null,
				array(),
				$woo_cart_param
			);
		}
			$woocommerce->cart->calculate_totals();
			// Save cart to session
			$woocommerce->cart->set_session();
			// Maybe set cart cookies
			$woocommerce->cart->maybe_set_cart_cookies();
			echo 'success';
			wp_die();
	}
}

add_action(
	'woocommerce_new_order_item',
	'computer_service_add_product_custom_field_to_order_item_meta',
	9,
	3
);

if ( ! function_exists( 'computer_service_add_product_custom_field_to_order_item_meta' ) ) {
	function computer_service_add_product_custom_field_to_order_item_meta( $item_id, $item_values, $item_key ) {
		if ( ! empty( $item_values['service_list'] ) ) {
			wc_update_order_item_meta( $item_id, 'ServiceList', sanitize_text_field( $item_values['service_list'] ) );
		}
	}
}
// service cart add end



if ( ! function_exists( 'computer_reapair_post_class' ) ) {

	function computer_reapair_post_class( $classes ) {
		global $post;
		if ( isset( $post->post_type ) && $post->post_type == 'post' ) {

			$post_formate = get_post_format( $post );
			if ( $post_formate == 'gallery' ) {
				$classes[] = 'doubleW';
			}

			$classes[] = 'blog-post';
		}
		return $classes;
	}
}
add_filter( 'post_class', 'computer_reapair_post_class' );
