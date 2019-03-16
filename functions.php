<?php
/**
 * Filters wp_title to print a neat <title> tag based on what is being viewed.
 *
 * @param string $title Default title text for current view.
 * @param string $sep   Optional separator.
 * @return string The filtered title.
 */
function wpdocs_theme_name_wp_title( $title, $sep ) {
    if ( is_feed() ) {
        return $title;
    }

    global $page, $paged;

    // Add the blog name
    $title .= get_bloginfo( 'name', 'display' );

    // Add the blog description for the home/front page.
    $site_description = get_bloginfo( 'description', 'display' );
    if ( $site_description && ( is_home() || is_front_page() ) ) {
        $title .= " $sep $site_description";
    }

    // Add a page number if necessary:
    if ( ( $paged >= 2 || $page >= 2 ) && ! is_404() ) {
        $title .= " $sep " . sprintf( __( 'Page %s', '_s' ), max( $paged, $page ) );
    }
    return $title;
}
add_filter( 'wp_title', 'wpdocs_theme_name_wp_title', 10, 2 );

function versus_scripts_styles() {
    wp_enqueue_style( 'versus-style', get_stylesheet_uri(), array(), '3.1.2' );
    wp_enqueue_style( 'versus-mobile-style', get_template_directory_uri() . '/css/responsive.css', array(), '3.0.8' );
    wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/font-awesome/css/font-awesome.min.css', array(), '4.7.0' );
    wp_enqueue_script( 'versus-script', get_template_directory_uri() . '/js/main_nav.js', array(), '2.2.0' );
    wp_enqueue_script( 'versus-timestamp-script', get_template_directory_uri() . '/js/date_hour.js', array(), '2.0.0', true );
    if ( is_singular() )
        wp_enqueue_script( "comment-reply" );
}
add_action( 'wp_enqueue_scripts', 'versus_scripts_styles' );

add_theme_support( 'post-formats', array('audio','video'));
add_theme_support( 'post-thumbnails' );

add_image_size( 'vs-medium-thumb', 360, 240, array( 'center', 'top' ) ); // 3:2 - 1.5
add_image_size( 'vs-small-thumb', 120, 80, true );
add_image_size( 'vs-big-thumb', 720, 480, true );
add_image_size( 'vs-list-thumb', 240, 192, true );
add_image_size( 'vs-custom-big-thumb', 400, 400, true );
add_image_size( 'vs-custom-medium-thumb', 400, 200, true );

register_nav_menus( array(
    'primary'=> 'Primary Menu',
    'footer'=> 'Footer Menu',
));

// Sidebars
add_action( 'widgets_init', 'vs_widgets_setup' );
function vs_widgets_setup() {
    register_sidebar( array(
        'name' => 'Sidebar 1',
        'id' => 'sidebar-1',
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<div class="column-header bl-vsblack"><p class="bg-vsblack">',
        'after_title' => '</p></div>',
    ));

    register_sidebar( array(
        'name' => 'Sidebar 2',
        'id' => 'sidebar-2',
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<div class="column-header bl-vsblack"><p class="bg-vsblack">',
        'after_title' => '</p></div>',
    ));

    // Banners
    register_sidebar( array(
        'name' => 'Banner 1',
        'id' => 'banner-1',
        'before_widget' => '<div class="banner-top">',
        'after_widget' => '</div>',
        'before_title' => '<span class="header-banner">',
        'after_title' => '</span>',
    ));

    register_sidebar( array(
        'name' => 'Banner 2',
        'id' => 'banner-2',
        'before_widget' => '<div class="banner-half">',
        'after_widget' => '</div>',
        'before_title' => '<span class="header-banner">',
        'after_title' => '</span>',
    ));
    
    register_sidebar( array(
        'name' => 'Banner 3',
        'id' => 'banner-3',
        'before_widget' => '<div class="banner">',
        'after_widget' => '</div>',
        'before_title' => '<span class="header-banner">',
        'after_title' => '</span>',
    ));
}

?>
