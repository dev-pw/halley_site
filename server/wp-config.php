<?php

define( 'WP_ENVIRONMENT_TYPE', 'local' );

require_once __DIR__ . '/vendor/autoload.php'; // Certifique-se de que o autoload do Composer está disponível

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

if ($_SERVER['HTTP_HOST'] === 'localhost') {
    // Ambiente local
    define('WP_HOME', 'http://localhost');
    define('WP_SITEURL', 'http://localhost');
} else {
    // Produção
    define('WP_HOME', $_ENV['WP_HOME']);
    define('WP_SITEURL', $_ENV['WP_SITEURL']);
}

/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', $_ENV['DB_NAME'] );

/** Database username */
define( 'DB_USER', $_ENV['DB_USER'] );

/** Database password */
define( 'DB_PASSWORD', $_ENV['DB_PASS'] );

/** Database hostname */
define( 'DB_HOST', $_ENV['DB_HOST'] );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */

define( 'AUTH_KEY',         'u%u8snmm3Eo98Z@`q&~x%-Fi`=Vj5:&y*ZAo_J&dS1/7?f[)di!a& +tLd:wLmq>' );
define( 'SECURE_AUTH_KEY',  'jR^P0?H_GMKxec%7Pr>{i1qyPp`R<|du8rWDSwd,{-F*q(>&BgFt_cS]o5UgG<gb' );
define( 'LOGGED_IN_KEY',    'W/o^h~mE!T!65H&uYGT9(-%s]srdX)OqF@UosE=sy$g!jvs2Ma=Hr/%9}.!gy)W$' );
define( 'NONCE_KEY',        ' LW1qF0=e2?IyBRo?RNO<HO2Tt,fGaoyBs4/|*m2K0cY$+;-l>b^3sh4rR VCq->' );
define( 'AUTH_SALT',        '68:1h|]3R4vp5]8.U%d;bN,_=zND-D`;K&*j G9cx0,5gbui0Z+G_vn/*bl=PsCI' );
define( 'SECURE_AUTH_SALT', 'rf2k &F($MYBH-dw]b4>e%3|;Lp.vnv{chW-=oSr=Dq}xtdWIn0/> {_7+C3~(<D' );
define( 'LOGGED_IN_SALT',   'ha-2=sS+.se oZWz%IQLxJ~O`9+^Rk$^XzQM>qE~K&sDt/<tR+`)5/qveUj?D2^F' );
define( 'NONCE_SALT',       '-@z38*)R:Tuq|x_.-|r/c)Ni#kXty:)/tWn=Fm;Cl&xEx:4FjJST*z25sGO1%1ST' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
 */
$table_prefix = $_ENV['DB_PREFIX'];


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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
