<?php
/**
 * Theme setup and asset loading.
 *
 * @package MintSolutions_Theme
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Set up theme defaults and supported WordPress features.
 *
 * @return void
 */
function mintsolutions_theme_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'custom-logo' );
    add_theme_support( 'menus' );

    register_nav_menus(
        array(
            'primary' => esc_html__( 'Primary Menu', 'mintsolutions' ),
        )
    );
}
add_action( 'after_setup_theme', 'mintsolutions_theme_setup' );

/**
 * Build a deterministic handle from a file base name.
 *
 * @param string $prefix Handle prefix.
 * @param string $file   File path.
 * @return string
 */
function mintsolutions_build_asset_handle( $prefix, $file ) {
    $basename = wp_basename( $file, '.css' );
    $basename = wp_basename( $basename, '.js' );

    return sanitize_key( $prefix . '-' . $basename );
}

/**
 * Enqueue theme styles and scripts.
 *
 * @return void
 */
function mintsolutions_enqueue_assets() {
    $theme_dir = get_template_directory();
    $theme_uri = get_template_directory_uri();

    wp_enqueue_style(
        'mintsolutions-style',
        get_stylesheet_uri(),
        array(),
        wp_get_theme()->get( 'Version' )
    );

    wp_enqueue_style(
        'mintsolutions-fonts',
        'https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Outfit:wght@100..900&family=Roboto+Serif:ital,opsz,wght@0,8..144,100..900;1,8..144,100..900&family=Roboto+Slab:wght@100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap',
        array(),
        null
    );

    wp_enqueue_style(
        'fontawesome',
        'https://site-assets.fontawesome.com/releases/v6.2.1/css/all.css',
        array(),
        '6.2.1'
    );

    $css_files = glob( $theme_dir . '/assets/css/*.css' );

    if ( ! empty( $css_files ) ) {
        natsort( $css_files );

        foreach ( $css_files as $css_file ) {
            $filename = wp_basename( $css_file );

            if ( in_array( $filename, array( 'bootstrap.min.css', 'header-footer.css', 'wpo-minify-header-min.css' ), true ) ) {
                continue;
            }

            wp_enqueue_style(
                mintsolutions_build_asset_handle( 'mintsolutions-css', $css_file ),
                $theme_uri . '/assets/css/' . $filename,
                array(),
                filemtime( $css_file )
            );
        }
    }

    if ( file_exists( $theme_dir . '/assets/css/bootstrap.min.css' ) ) {
        wp_enqueue_style(
            'bootstrap',
            $theme_uri . '/assets/css/bootstrap.min.css',
            array(),
            filemtime( $theme_dir . '/assets/css/bootstrap.min.css' )
        );
    }

    if ( file_exists( $theme_dir . '/assets/css/header-footer.css' ) ) {
        wp_enqueue_style(
            'mintsolutions-header-footer',
            $theme_uri . '/assets/css/header-footer.css',
            array( 'mintsolutions-style', 'bootstrap' ),
            filemtime( $theme_dir . '/assets/css/header-footer.css' )
        );
    }

    wp_enqueue_script( 'jquery' );

    $vendor_js_files = glob( $theme_dir . '/assets/js/vendors/*.js' );

    if ( ! empty( $vendor_js_files ) ) {
        natsort( $vendor_js_files );

        foreach ( $vendor_js_files as $vendor_js_file ) {
            $vendor_filename = wp_basename( $vendor_js_file );

            if ( in_array( $vendor_filename, array( 'jquery-3.6.0.min.js', 'bootstrap.min.js' ), true ) ) {
                continue;
            }

            wp_enqueue_script(
                mintsolutions_build_asset_handle( 'mintsolutions-vendor-js', $vendor_js_file ),
                $theme_uri . '/assets/js/vendors/' . $vendor_filename,
                array( 'jquery' ),
                filemtime( $vendor_js_file ),
                true
            );
        }
    }

    $js_files = glob( $theme_dir . '/assets/js/*.js' );

    if ( ! empty( $js_files ) ) {
        natsort( $js_files );

        foreach ( $js_files as $js_file ) {
            $filename = wp_basename( $js_file );

            if ( 'bootstrap.bundle.min.js' === $filename && file_exists( $js_file ) ) {
                wp_enqueue_script(
                    'bootstrap-bundle',
                    $theme_uri . '/assets/js/bootstrap.bundle.min.js',
                    array( 'jquery' ),
                    filemtime( $js_file ),
                    true
                );
                continue;
            }

            wp_enqueue_script(
                mintsolutions_build_asset_handle( 'mintsolutions-js', $js_file ),
                $theme_uri . '/assets/js/' . $filename,
                array( 'jquery' ),
                filemtime( $js_file ),
                true
            );
        }
    }
}
add_action( 'wp_enqueue_scripts', 'mintsolutions_enqueue_assets' );