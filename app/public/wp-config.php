<?php
/**
 * The base configuration for WordPress
 *
 * @package WordPress
 */

// ** Database settings ** //
define( 'DB_NAME', 'local' );
define( 'DB_USER', 'root' );
define( 'DB_PASSWORD', 'root' );
define( 'DB_HOST', 'localhost' );
define( 'DB_CHARSET', 'utf8' );
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 */
define( 'AUTH_KEY',          'B2,3b7i]eiHr ycq,4HKQ(oL3+XJv8l{9rha}ege4Odcmd@Jqzr)k@~]Vm5y5P2E' );
define( 'SECURE_AUTH_KEY',   '80j&[DV($8fyz6hh=rirj2y.b2lY3NQEZD4@3mBX=QVA]Ug*w;V<5V,aFT>^0UkZ' );
define( 'LOGGED_IN_KEY',     '(5Pfo[r~;o=(40[_<lB~/nJ?G>n~|[@#rgM*LZ-@IH zTuXu)Hgra[jg=Xnu2?*Q' );
define( 'NONCE_KEY',         ']awp4VP=XiaIA^4r0S?>lRz_qLW![|qdhTZX:y@*^Q84%g!a[=MDc.!*l,4U)KHY' );
define( 'AUTH_SALT',         'njt|waq}s4c^%Z$7W-N?$Eq(USr!4XqSzD-||9I6@+~*iRh_$UP]!{s6n<jSgHIZ' );
define( 'SECURE_AUTH_SALT',  '_-#LA(y_!eL&0Nj,b j{ejr9JOv`Y7I:ArMf#nD*}C&keO w],W5tC;l>(yNT6c.' );
define( 'LOGGED_IN_SALT',    'E:,Dkk6*k{@_tM&J|#]OSMj,nqXZ/&s_tI%b/uRV;l:A]j4&cg.%OLxb+B]K:A p' );
define( 'NONCE_SALT',        'Am>q#w-3UPw($oh h.YgC_Js0rl=?=zm!_p8J[a~%;z!Rijg`=S/KD$`5{F+be!{' );
define( 'WP_CACHE_KEY_SALT', '(y9;eL6}=5:@qUEQ:Kq-VFEke(*&BYd_3FU^LeUl~TorV%eWe2{?)?{)04Av)NIo' );

/**#@-*/

/**
 * WordPress database table prefix.
 */
$table_prefix = 'wp_';

/* Add any custom values between this line and the "stop editing" line. */


/**
 * Debug Settings
 */
define( 'WP_DEBUG', true );
define( 'WP_DEBUG_LOG', true );
define( 'WP_DEBUG_DISPLAY', true );

@ini_set( 'display_errors', 1 );
error_reporting( E_ALL );

define( 'WP_ENVIRONMENT_TYPE', 'local' );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';