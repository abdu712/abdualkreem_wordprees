<?php
if ( ! function_exists( 'medicine_shop_setup' ) ) :
function medicine_shop_setup() {

// Root path/URI.
define( 'MEDICINE_SHOP_PARENT_DIR', get_template_directory() );
define( 'MEDICINE_SHOP_PARENT_URI', get_template_directory_uri() );

// Root path/URI.
define( 'MEDICINE_SHOP_PARENT_INC_DIR', MEDICINE_SHOP_PARENT_DIR . '/inc');
define( 'MEDICINE_SHOP_PARENT_INC_URI', MEDICINE_SHOP_PARENT_URI . '/inc');

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'wc-product-gallery-zoom' );
	add_theme_support( 'wc-product-gallery-slider' );

	/*
	 * Let WordPress manage the document title.
	 */
	add_theme_support( 'title-tag' );
	
	add_theme_support( 'custom-header' );

	add_theme_support( 'responsive-embeds' );
	
	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 */
	add_theme_support( 'post-thumbnails' );
	
	//Add selective refresh for sidebar widget
	add_theme_support( 'customize-selective-refresh-widgets' );
	
	/*
	 * Make theme available for translation.
	 */
	load_theme_textdomain( 'medicine-shop' );
		
	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary'  => esc_html__( 'Primary Menu', 'medicine-shop' ),
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
		
	add_theme_support( 'custom-logo', array(
			'height'      => 70,
			'width'       => 70,
			'flex-height' => true,
			'flex-width'  => true,
		) );


	/*
	 * WooCommerce Plugin Support
	 */
	add_theme_support( 'woocommerce' );
	
	// Gutenberg wide images.
	add_theme_support( 'align-wide' );
	
	
	//Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'medicine_shop_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	
	/*
	 * This theme styles the visual editor to resemble the theme style,
	 * specifically font, colors, icons, and column width.
	 */
	add_editor_style( array( 'assets/css/editor-style.css', medicine_shop_google_font() ) );
}
endif;
add_action( 'after_setup_theme', 'medicine_shop_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function medicine_shop_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'medicine_shop_content_width', 1170 );
}
add_action( 'after_setup_theme', 'medicine_shop_content_width', 0 );

// notice
function medicine_shop_activation_notice() {
    // Check if the notice has already been dismissed
    if (get_option('medicine_shop_notice_dismissed')) {
        return;
    }
    ?>
    <div class="updated notice notice-get-started-class is-dismissible" data-notice="get_started">
        <div class="medicine-shop-getting-started-notice clearfix">
            <div class="medicine-shop-theme-notice-content">
                <h2 class="medicine-shop-notice-h2">
                    <?php
                    printf(
                        /* translators: 1: welcome page link starting html tag, 2: welcome page link ending html tag. */
                        esc_html__('Welcome! Thank you for choosing %1$s!', 'medicine-shop'), '<strong>' . wp_get_theme()->get('Name') . '</strong>');
                    ?>
                </h2>
            
                <a class="medicine-shop-btn-get-started button button-primary button-hero medicine-shop-button-padding" href="<?php echo esc_url(admin_url('themes.php?page=medicine-shop-about')); ?>"><?php esc_html_e('Get started', 'medicine-shop') ?></a><span class="medicine-shop-push-down">
            </div>
        </div>
    </div>
    <?php
}

add_action('admin_notices', 'medicine_shop_activation_notice');

// Add Ajax action to handle dismiss
add_action('medicine_shop_wp_ajax_dismiss_notice', 'medicine_shop_dismiss_notice');

// Reset the dismissed status when the theme is activated
function medicine_shop_reset_notice_status() {
    delete_option('medicine_shop_notice_dismissed');
}
add_action('after_switch_theme', 'medicine_shop_reset_notice_status');

function medicine_shop_dismiss_notice() {
    update_option('medicine_shop_notice_dismissed', true);
    wp_die('Notice dismissed');
}

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */

function medicine_shop_widgets_init() {
	
	register_sidebar( array(
		'name' => __( 'Sidebar Widget Area', 'medicine-shop' ),
		'id' => 'medicine-shop-sidebar-primary',
		'description' => __( 'The Primary Widget Area', 'medicine-shop' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h4 class="widget-title">',
		'after_title' => '</h4><div class="title"><span class="shap"></span></div>',
	) );
	
	register_sidebar( array(
		'name' => __( 'Footer Widget Area', 'medicine-shop' ),
		'id' => 'medicine-shop-footer-widget-area',
		'description' => __( 'The Footer Widget Area', 'medicine-shop' ),
		'before_widget' => '<div class="footer-widget col-lg-3 col-sm-6 wow fadeIn" data-wow-delay="0.2s"><aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside></div>',
		'before_title' => '<h5 class="widget-title w-title">',
		'after_title' => '</h5><span class="shap"></span>',
	) );
}
add_action( 'widgets_init', 'medicine_shop_widgets_init' );

/**
 * All Styles & Scripts.
 */

require_once get_template_directory() . '/inc/enqueue.php';

/**
 * Nav Walker fo Bootstrap Dropdown Menu.
 */

require_once get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';

/**
 * Implement the Custom Header feature.
 */
require_once get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require_once get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require_once get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require_once get_template_directory() . '/inc/customizer.php';

require_once get_template_directory() . '/wptt-webfont-loader.php';

/**
 * Load Theme About Page
 */
require get_parent_theme_file_path( '/inc/aboutthemes/about-theme.php' );

/*
 * Enable support for Post Formats.
 *
 * See: https://codex.wordpress.org/Post_Formats
*/
add_theme_support( 'post-formats', array('image','video','gallery','audio',) );

function medicine_shop_sanitize_select( $input, $setting ) {
	$input = sanitize_key( $input );
	$choices = $setting->manager->get_control( $setting->id )->choices;
	return ( array_key_exists( $input, $choices ) ? $input : $setting->default );
}

add_filter( 'nav_menu_link_attributes', 'medicine_shop_dropdown_data_attribute', 20, 3 );
/**
 * Use namespaced data attribute for Bootstrap's dropdown toggles.
 *
 * @param array    $atts HTML attributes applied to the item's `<a>` element.
 * @param WP_Post  $item The current menu item.
 * @param stdClass $args An object of wp_nav_menu() arguments.
 * @return array
 */
function medicine_shop_dropdown_data_attribute( $atts, $item, $args ) {
    if ( is_a( $args->walker, 'WP_Bootstrap_Navwalker' ) ) {
        if ( array_key_exists( 'data-toggle', $atts ) ) {
            unset( $atts['data-toggle'] );
            $atts['data-bs-toggle'] = 'dropdown';
        }
    }
    return $atts;
}

function medicine_shop_remove_theme_customizer_setting($wp_customize) {
    // Remove the setting
    $wp_customize->remove_setting('display_header_text');
    // Remove the control
    $wp_customize->remove_control('display_header_text');
}
add_action('customize_register', 'medicine_shop_remove_theme_customizer_setting', 20); 
// Use a priority greater than the one used for adding the setting


// Set the number of products per row to 3 on the shop page
add_filter('loop_shop_columns', 'medicine_shop_custom_shop_loop_columns');

if (!function_exists('medicine_shop_custom_shop_loop_columns')) {
    function medicine_shop_custom_shop_loop_columns() {
        // Retrieve the number of columns from theme customizer setting (default: 3)
        $medicine_shop_columns = get_theme_mod('medicine_shop_custom_shop_per_columns', 3);
        return $medicine_shop_columns;
    }
}

// Set the number of products per page on the shop page
add_filter('loop_shop_per_page', 'medicine_shop_custom_shop_per_page', 20);

if (!function_exists('medicine_shop_custom_shop_per_page')) {
    function medicine_shop_custom_shop_per_page($medicine_shop_products_per_page) {
        // Retrieve the number of products per page from theme customizer setting (default: 9)
        $medicine_shop_products_per_page = get_theme_mod('medicine_shop_custom_shop_product_per_page', 9);
        return $medicine_shop_products_per_page;
    }
}

