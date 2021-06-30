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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'dale_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         'r&W`Jrx|{3__RHncAY>Th*bQx&BuK=pp@+B#!!{=Q0]jF%{-m=!L#1$C.P~t78i3');
define('LOGGED_IN_KEY',    '1DPydgT7MQXTQU5u~fSY7Q_MNO[k>Jd1z.E+.Ydm-(u%^,bKJ7=K4i}B47]X(04m');
define('SECURE_AUTH_KEY',  'UOWp-_*la}q(bk]c^{mC>jP1~(V]MLOWNCE-YA$|rzmX<Wc~)pP$rZ.wJ14]Aj-a');
define('NONCE_KEY',        ']r`889$)1+jUGT/-QDr+RSc:4h*9m6F=cn=;04F9_LM|2WmLxNt05SrDO4.pLF>$');
define('AUTH_SALT',        'W>A|X=Ic~wa==+1l|Z1x4V`T>HiUm!bgoN6252|Cu&SwK1Lm8d+jDbrFQtL*P]+5');
define('SECURE_AUTH_SALT', 'KHq%]<f)X|/m|b+F!fMAI(kOI~3zPR`98hwj*wU8P)+MULY nSSLEfzvUR}PzxWS');
define('LOGGED_IN_SALT',   '<:`(z`0zmHxK~9-l#9M*1yihtQN(?}. 6&ZBc)jGdeTL;v|*:ZhmnY@F|=JQ!S}z');
define('NONCE_SALT',       '/oI|g>enXi(RIRb%3m %=fPna}-RphX|p.&J3+G (UB-8qy()*MJzO|BB7tNl$n2');

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
