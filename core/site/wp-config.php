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
#define('WP_HOME','http://178.128.223.250:8080');
#define('WP_SITEURL','http://support-ops.beyond.lk');
#define('WP_HOME','http://support-ops.beyond.lk');
#define('WP_SITEURL', 'http://' . $_SERVER['HTTP_HOST']);
#define('WP_HOME', 'http://' . $_SERVER['HTTP_HOST']);
// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'support_db');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'example');

/** MySQL hostname */
define('DB_HOST', 'support-core-db');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '~,)SOx}pXU~rhVl~v.W&.YX-tmj&npa>LZ/q P%FXj;![ku{)8qv$$JP&aY>qmdv');
define('SECURE_AUTH_KEY',  'Jlx0-csft?4K*?$-E?kmS.:F9DOBI8Y^%D/}{{,bd~a/QJ_`SL&bIv>yo8_XVWgo');
define('LOGGED_IN_KEY',    ';F;{$3HuFNf_A=q|cHx <|>@L|8Np(DO5i{oF%GqW]sdn&3#DA`nD@McC1EY_c|B');
define('NONCE_KEY',        '5`TF`gvKY_ZIF4zlj)@wt>)0Bwk7tG3qC%(B4cW c>>|#/r-2K2PM*.S:st3CJ#C');
define('AUTH_SALT',        ':g85hr&_4g~-<s;)nC{b1 v:h13X:){;xj>+U76h+<J0+rVL1aqw}CM0U0(B7Idx');
define('SECURE_AUTH_SALT', '[?%gXH/ ta8_fi*1<JqK(^H8<,`T}NuMHO>1QcPYo0?mj1S;7@3Y8Bq-^oAd{(:Z');
define('LOGGED_IN_SALT',   'FDXMK.m 1gSD~-%)yZ@OW;[e,~QDiw4k0c}.1uIJPLQtwfJ>:AP#d6vCTMoeeU2k');
define('NONCE_SALT',       ')r`$mC%V0]u@ H4<1U0~pf~]!;H%zw*,zJC5;W]O+@C}.Vh3Uxy)&TnK}ZsBI,K_');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'ea_';
#define('WP_HOME','http://178.128.223.250:8080');
#define('WP_SITEURL','http://178.128.223.250:8080');
define('WP_HOME','http://support-ops.beyond.lk');
define('WP_SITEURL','https://support-ops.beyond.lk');

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
define('WP_DEBUG', true);
define( 'WP_DEBUG_LOG', true );
define( 'SCRIPT_DEBUG', true );
define( 'SAVEQUERIES', true );
define( 'WP_DEBUG_DISPLAY', false );
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

#define('FS_METHOD', 'direct');
#define('FTP_BASE', '/var/www/support/erp_access_req');
#define('FTP_USER', 'wikiUser');
#define('FTP_PASS', 'wikipass@2020');
#define('FTP_HOST', 'support-ops.beyond.lk');
#define('FTP_SSL', true);
