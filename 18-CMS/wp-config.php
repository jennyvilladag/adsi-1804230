<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'cms1804230' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ',_>V6356-dd:/X9^;DpNL)Vo3qMJn^E:Xb!Tf~[)aZCTO,G(`E_A_?lnRJA@ydVk' );
define( 'SECURE_AUTH_KEY',  'yl~<E3wcUO}*t[rNN]:x#oU@e-Td)>6`GKUS+W)E_j1Hbp)rX!79HevCOvS3z;t*' );
define( 'LOGGED_IN_KEY',    'ZuQR_=D4gM)hlX->:j[:ts+>tgptx%mCtb0NO2-^)t>]LS@pzgR+dGaLF%D9;@1:' );
define( 'NONCE_KEY',        '8@.Uf9elN@dwxzdqY< g^P 19dpJ2FjB9-?>)2fu]e6v]a}Q9ch3,zu[iwLW (]%' );
define( 'AUTH_SALT',        '{?qv#gaPX:3[k^LJsJ,]8$agG,P+0Y*Y@l},2|]JNGF$@&Q$<_^^M7<VD8vv~3]?' );
define( 'SECURE_AUTH_SALT', '=l^,t<JmB 0S]))K}Q)5YWq3[92,be`@`J_~,TAUQze_e-v,U.~Nw;} ]=TM[<ZZ' );
define( 'LOGGED_IN_SALT',   'YJfRF R) 8S2NluDeTM[urgW[O)2B$nHsVi#C PHrm0PDLg]diA0,O:sp8_$7Oz5' );
define( 'NONCE_SALT',       'n+w2*L?AaNt0|_.INbNp*rPo[MAEnbpVop3>u0H?;Z){hA[Gq{4^_t/4YtOS`mC{' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
