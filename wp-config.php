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
define('DB_NAME', 'wps');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'coderslab');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define('WPLANG', 'pl_PL');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '8*Lz<-Rym1`ZUU{:yl$$$3Wgua=TloZuESMmv=ZxX4As6GX^VLn3Jq*RCF%k<#0K');
define('SECURE_AUTH_KEY',  'ghAuj)U~lI1WorPG1_-eC$_L)QX%Tj(/g1Sl6k-c&K/0F@B=pW4eRppT=vXz}vU2');
define('LOGGED_IN_KEY',    ',VX@rW2W(/(vU>`!5:^L)AD3RD1e|)[.yFC4kJLE!Vu8Nkl~#A~REUp%<MHTw>RO');
define('NONCE_KEY',        'B0&=4N%/EBH!$t2:x;zRqWoQbp.Z+~Ycn{@$r^}Gw-64OW(t-$jd~?|q5IS1&%12');
define('AUTH_SALT',        ';?NFr!48mdE[e[q.Y )blStm^GERry)T|4pO@:Q]tPOOlBW8M*`pc*j3T<>DsQ`.');
define('SECURE_AUTH_SALT', '-E&pH|n7&q2RYF)jIF *Bo7*HE)bFBrp:4&f;|npce`[2mF1l.7soAW-yZq q,g~');
define('LOGGED_IN_SALT',   '~~<Z:yVTvNHX yN3gHY2AoI,o6!nTNIeuk*ckLQelI/L}NL<<J/PRkI/ZF5- fWG');
define('NONCE_SALT',       'MFZZO7]BT7>/fF]lAM8sae^IG3[wx?kvmP8WiB`)0rJJkB:;]r5phyK`*N:I_,ju');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'cl_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
