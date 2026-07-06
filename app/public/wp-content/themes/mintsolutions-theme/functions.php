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

    $css_files = glob( $theme_dir . '/assets/css/*.css' );

    if ( ! empty( $css_files ) ) {
        natsort( $css_files );

        foreach ( $css_files as $css_file ) {
            $filename = wp_basename( $css_file );

            if ( 'bootstrap.min.css' === $filename && file_exists( $css_file ) ) {
                wp_enqueue_style(
                    'bootstrap',
                    $theme_uri . '/assets/css/bootstrap.min.css',
                    array(),
                    filemtime( $css_file )
                );
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