<?php
add_theme_support( 'custom-header' );
$header_info = array(
	'width'         => 250,
	'height'        => 90,
	'default-image' => get_template_directory_uri() . '/images/logo.png',
);
add_theme_support( 'custom-header', $header_info );
$header_images = array(
	'logo' => array(
		'url'           => get_template_directory_uri() . '/images/logo.png',
		'thumbnail_url' => get_template_directory_uri() . '/images/logo.png',
		'description'   => 'Sunset',
	),
	'logo' => array(
		'url'           => get_template_directory_uri() . '/images/logo.png',
		'thumbnail_url' => get_template_directory_uri() . '/images/logo.png',
		'description'   => 'Logo',
	),
);
register_default_headers( $header_images );
function mytheme_enqueue_styles() {
    wp_enqueue_style('bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css');
    wp_enqueue_style('mytheme-style', get_stylesheet_uri());
    wp_enqueue_script('bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js', array('jquery'), '5.3.2', true);
    wp_enqueue_script('swup', 'https://unpkg.com/swup@4', array('jquery'), '2.0.0', true);
    wp_enqueue_script('swup-a11y-plugin', 'https://unpkg.com/@swup/a11y-plugin@4', array('swup'), '4', true);

}
add_action('wp_enqueue_scripts', 'mytheme_enqueue_styles');

// Add theme support for various features
function mytheme_setup() {
    // Add support for featured images (post thumbnails)
    add_theme_support('post-thumbnails');
    // Add support for custom menus
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'mytheme'),
    ));
}
add_action('after_setup_theme', 'mytheme_setup');
// Register the primary menu
function register_primary_menu() {
    register_nav_menu('primary', __('Primary Menu', 'your-theme-textdomain'));
}
add_action('after_setup_theme', 'register_primary_menu');
function enqueue_custom_styles() {
    wp_enqueue_style('header-styles', get_template_directory_uri() . '/css/header.css');
    wp_enqueue_style('footer-styles', get_template_directory_uri() . '/css/footer.css');
}
add_action('wp_enqueue_scripts', 'enqueue_custom_styles');
function enqueue_custom_scripts() {
    wp_enqueue_script('custom-swup', get_template_directory_uri() . '/js/custom-swup.js', array('swup'), '1.0.0', true);
    wp_enqueue_script('custom-navbar-script', get_template_directory_uri() . '/js/custom-navbar.js', array('jquery'), '1.0.0', true);
    $post_id = get_the_ID();
    wp_localize_script('custom-swup', 'post_data', array(
        'post_id' => $post_id,
    ));
}
add_action('wp_enqueue_scripts', 'enqueue_custom_scripts');
function yourtheme_widgets_init() {
    register_sidebar( array(
        'name'          => esc_html__( 'Footer', 'yourtheme' ),
        'id'            => 'footer-1',
        'description'   => esc_html__( 'Add widgets here.', 'yourtheme' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );
}
add_action( 'widgets_init', 'yourtheme_widgets_init' );
function mytheme_widgets_init() {
    register_sidebar(array(
        'name'          => __('Very Top Bar Widget Area', 'mytheme'),
        'id'            => 'very-top-bar',
        'description'   => __('Add widgets here to appear in your top bar.', 'mytheme'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ));
}
add_action('widgets_init', 'mytheme_widgets_init');
function mytheme_register_widget_areas() {
    // Register Footer 1 widget area
    register_sidebar( array(
        'name'          => esc_html__( 'Footer 1', 'mytheme' ),
        'id'            => 'footer-1',
        'description'   => esc_html__( 'Add widgets here to appear in your footer.', 'mytheme' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );
    // Register Footer 2 widget area
    register_sidebar( array(
        'name'          => esc_html__( 'Footer 2', 'mytheme' ),
        'id'            => 'footer-2',
        'description'   => esc_html__( 'Add widgets here to appear in your footer.', 'mytheme' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );
    // Register Footer 3 widget area
    register_sidebar( array(
        'name'          => esc_html__( 'Footer 3', 'mytheme' ),
        'id'            => 'footer-3',
        'description'   => esc_html__( 'Add widgets here to appear in your footer.', 'mytheme' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );
}



// ADD YOUR POST IDs FOR RENDERING SPECTRA SRCRIPTS OF ALL SITES

add_action( 'widgets_init', 'mytheme_register_widget_areas' );
add_action( 'wp_enqueue_scripts', 'enqueue_scripts_by_post_id' );
function enqueue_scripts_by_post_id() {
    $post_ids = array(); // Add your post IDs here
    foreach ( $post_ids as $post_id ) {
        $post_assets_instance = new UAGB_Post_Assets( $post_id );
        $post_assets_instance->enqueue_scripts();
    }
}
