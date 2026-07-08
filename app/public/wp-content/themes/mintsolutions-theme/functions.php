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

    if ( wp_script_is( 'mintsolutions-js-forms', 'enqueued' ) ) {
        wp_localize_script(
            'mintsolutions-js-forms',
            'mintsolutionsForms',
            array(
                'ajaxUrl'      => admin_url( 'admin-ajax.php' ),
                'nonce'        => wp_create_nonce( 'mintsolutions_forms' ),
                'defaultTitle' => 'Request a free Demo',
                'emailjs'      => array(
                    'serviceId'  => 'service_w46qxtg',
                    'templateId' => 'template_o1rih9b',
                    'publicKey'  => 'GfZV4IRJNTknucegw',
                ),
                'emails'       => array(
                    'default' => 'mintsupport@mintsolutions.ae',
                    'bgv'     => 'mint.bgv@mintsolutions.ae',
                    'cc'      => 'nisar.ahmed@mintsolutions.ae',
                ),
                'messages'     => array(
                    'success' => 'Your enquiry was sent successfully.',
                    'error'   => 'Failed to send enquiry. Please try again later.',
                ),
            )
        );
    }
}
add_action( 'wp_enqueue_scripts', 'mintsolutions_enqueue_assets' );

/**
 * Validate phone digits against country-specific rules.
 *
 * @param string $country_code Country code.
 * @param string $phone        Raw phone input.
 * @return array|null
 */
function mintsolutions_validate_phone_digits( $country_code, $phone ) {
    $rules = array(
        '+1'   => array( 'min' => 10, 'max' => 10 ),
        '+44'  => array( 'min' => 9, 'max' => 10 ),
        '+61'  => array( 'min' => 9, 'max' => 9 ),
        '+65'  => array( 'min' => 8, 'max' => 8 ),
        '+81'  => array( 'min' => 9, 'max' => 10 ),
        '+82'  => array( 'min' => 9, 'max' => 10 ),
        '+91'  => array( 'min' => 10, 'max' => 10 ),
        '+971' => array( 'min' => 8, 'max' => 9 ),
        '+92'  => array( 'min' => 10, 'max' => 10 ),
        '+60'  => array( 'min' => 9, 'max' => 10 ),
        '+62'  => array( 'min' => 9, 'max' => 12 ),
        '+86'  => array( 'min' => 11, 'max' => 11 ),
        '+33'  => array( 'min' => 9, 'max' => 9 ),
        '+49'  => array( 'min' => 10, 'max' => 11 ),
        '+39'  => array( 'min' => 10, 'max' => 10 ),
        '+34'  => array( 'min' => 9, 'max' => 9 ),
        '+55'  => array( 'min' => 10, 'max' => 11 ),
        '+7'   => array( 'min' => 10, 'max' => 10 ),
    );

    $digits = preg_replace( '/\D+/', '', (string) $phone );
    $rule   = isset( $rules[ $country_code ] ) ? $rules[ $country_code ] : array( 'min' => 7, 'max' => 15 );
    $length = strlen( $digits );

    if ( $length < $rule['min'] || $length > $rule['max'] ) {
        return array(
            'min'    => $rule['min'],
            'max'    => $rule['max'],
            'actual' => $length,
        );
    }

    return null;
}

/**
 * AJAX fallback for enquiry form submission.
 *
 * @return void
 */
function mintsolutions_submit_enquiry() {
    check_ajax_referer( 'mintsolutions_forms', 'nonce' );

    $company_name = sanitize_text_field( wp_unslash( $_POST['company_name'] ?? '' ) );
    $full_name    = sanitize_text_field( wp_unslash( $_POST['full_name'] ?? '' ) );
    $country_code = sanitize_text_field( wp_unslash( $_POST['country_code'] ?? '+91' ) );
    $phone        = sanitize_text_field( wp_unslash( $_POST['phone'] ?? '' ) );
    $email        = sanitize_email( wp_unslash( $_POST['email'] ?? '' ) );
    $message      = sanitize_textarea_field( wp_unslash( $_POST['message'] ?? '' ) );
    $mail_type    = 'bgv' === sanitize_key( wp_unslash( $_POST['mail_type'] ?? 'default' ) ) ? 'bgv' : 'default';

    $errors = array();

    if ( '' === $company_name ) {
        $errors['company_name'] = 'Company name is required';
    }

    if ( '' === $full_name ) {
        $errors['full_name'] = 'Full name is required';
    }

    if ( '' === $phone ) {
        $errors['phone'] = 'Phone number is required';
    } else {
        $phone_error = mintsolutions_validate_phone_digits( $country_code, $phone );
        if ( $phone_error ) {
            $errors['phone'] = sprintf(
                'Phone must contain %1$d-%2$d digits for the selected country (you entered %3$d).',
                $phone_error['min'],
                $phone_error['max'],
                $phone_error['actual']
            );
        }
    }

    if ( '' === $email ) {
        $errors['email'] = 'Email is required';
    } elseif ( ! preg_match( '/^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,}$/', $email ) ) {
        $errors['email'] = 'Enter a valid email (e.g. user@domain.com)';
    }

    if ( '' === $message ) {
        $errors['message'] = 'Message is required';
    } elseif ( strlen( $message ) < 10 ) {
        $errors['message'] = 'Message must be at least 10 characters';
    }

    if ( ! empty( $errors ) ) {
        wp_send_json_error(
            array(
                'message'     => 'Please correct the highlighted fields.',
                'fieldErrors' => $errors,
            ),
            422
        );
    }

    $recipient = 'bgv' === $mail_type ? 'mint.bgv@mintsolutions.ae' : 'mintsupport@mintsolutions.ae';
    $cc_email  = 'nisar.ahmed@mintsolutions.ae';
    $subject   = sprintf( 'New Inquiry from %s', '' !== $company_name ? $company_name : $full_name );
    $body      = implode(
        PHP_EOL,
        array(
            'Name: ' . $full_name,
            'Company: ' . ( '' !== $company_name ? $company_name : '—' ),
            'Phone: ' . trim( $country_code . ' ' . $phone ),
            'Email: ' . $email,
            'Inquiry Type: ' . ( 'bgv' === $mail_type ? 'New BGV Inquiry' : 'New Website Inquiry' ),
            '',
            $message,
        )
    );

    $headers = array(
        'Content-Type: text/plain; charset=UTF-8',
        'Reply-To: ' . $full_name . ' <' . $email . '>',
    );

    if ( '' !== $cc_email ) {
        $headers[] = 'Cc: ' . $cc_email;
    }

    if ( ! wp_mail( $recipient, $subject, $body, $headers ) ) {
        wp_send_json_error(
            array(
                'message' => 'Unable to send the enquiry at the moment. Please try again later.',
            ),
            500
        );
    }

    wp_send_json_success(
        array(
            'message' => 'Your enquiry was sent successfully.',
        )
    );
}
add_action( 'wp_ajax_mintsolutions_submit_enquiry', 'mintsolutions_submit_enquiry' );
add_action( 'wp_ajax_nopriv_mintsolutions_submit_enquiry', 'mintsolutions_submit_enquiry' );