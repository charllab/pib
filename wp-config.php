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
 * @link    https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// Project root path
$root = dirname(__DIR__);

// Composer autoloader
require_once $root.'/../vendor/autoload.php';

// dotenv
$dotenv = new Dotenv\Dotenv($root.'/../');
$dotenv->load();

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', getenv('DB_DATABASE'));

/** MySQL database username */
define('DB_USER', getenv('DB_USER'));

/** MySQL database password */
define('DB_PASSWORD', getenv('DB_PASSWORD'));

/** MySQL hostname */
define('DB_HOST', getenv('DB_SERVER'));

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define('WP_HOME', getenv('SITE_URL'));
define('WP_SITEURL', getenv('SITE_URL').'/wordpress');

define('DISALLOW_FILE_EDIT', true);

define('WP_AUTO_UPDATE_CORE', true);

define('DISABLE_WP_CRON', true);

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'wL;3*>=d_>gFZTj>8Kn66|}GQc7T:UpOv1l][SPcODH;D?.,TZLE?TR*VXlSKpcV');
define('SECURE_AUTH_KEY',  'U[QJD/=&]f5]TBwZXE$Ih-|aele4_bvc w}MCAfDmrt@J-!6~N|:W,-MDw Qz<++');
define('LOGGED_IN_KEY',    'j+e|[W|@MrZ:hx3d`wzj-uQ3g*R`_ Vsn[4_+45M]u75-PU=x:a^S> Y7)9s8<3D');
define('NONCE_KEY',        '-r-.|A{A_}9[~DEvQ6$Nl+ue5<tIP^bD~?q4VBk$03HD-I`Se2f$S6HE%0/R+I]e');
define('AUTH_SALT',        '@gmFd:^#/0v?Cbcp.]QML|Rc{|c-9.`9Q:Pr|`;,; Zly$2>C|!nLKY_b;]?t{nb');
define('SECURE_AUTH_SALT', ';4mNE^ vUC-JQET=uxp#1MC,fg(Ehl VUZ+{?!Zzl5iRS3[-jca)+WuCP2G|+`uZ');
define('LOGGED_IN_SALT',   'Xr+1UD+X%dXE66n)tmiaCg,>1E|4g3`$#xkcyinB%c-&cZ*dT~nl}_l[KKnh-O.e');
define('NONCE_SALT',       'c8ShUsI_v=SO+7s|c(|l-?Y.F;E+DKNL4BK>|xP I+bk;@cs]?{%I&0hkXNfeuwg');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = getenv('DB_TABLE_PREFIX');

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
define('WP_DEBUG', filter_var(getenv('DEV_MODE'), FILTER_VALIDATE_BOOLEAN));

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
    define('ABSPATH', dirname(__FILE__).'/');
}

/** Sets up WordPress vars and included files. */
require_once(ABSPATH.'wp-settings.php');
