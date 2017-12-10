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
define('DB_NAME', 'compressor');

/** MySQL database username */
define('DB_USER', 'compressor_usr');

/** MySQL database password */
define('DB_PASSWORD', 'DbCompUsr');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'HT7Oz0aUgcUTZqjZ!&&nk9}0X0=uT;Hx+CSkjv #t]Vob;l}$5/[; Q~;$M1rObg');
define('SECURE_AUTH_KEY',  '>N sR^YF=OgPk3!0m&^@9m`VOa0S]`)U@D<j5^&zDLq!a+}#,JSZ<F%aFH9Np)e`');
define('LOGGED_IN_KEY',    'T-cs5xtobs,VA@g7Wp8MfS>S{ma,h=<U_*jq!wC {6l^3Y;d#,p`Y+UU.P:8v):z');
define('NONCE_KEY',        '?},T`q;Qbp/]Gkv,Tedp{#2>iLb9-G.-Q(,?m!G2At?gT`q:?&u!OpFxp#1V~?.[');
define('AUTH_SALT',        ';zEl>DKY[R]xs7!GfV8Zo!ZAJ;<8*R+!`y4zJ9eHdcG:nJzRm@6Fun`V_Dts[4:1');
define('SECURE_AUTH_SALT', 'c-|Pi/pL VQT3TCOzp=30A[8Wu[dRTd{R&L2T>% fHZ7Nutg~h7)Iu${B:W}C&B1');
define('LOGGED_IN_SALT',   '@=msHo(p/w9-hpB1ft?gsLmy<J$WYjdR2,(^sZ`U]Kk4RiQh_6/d[(6IiL$,6Kr(');
define('NONCE_SALT',       '5*FJ>^hvK(GH2A8G#*z=Bl??UCLlLV;?`lm/ <fyMl;ZS%{f~v&~e!9M%H?w]qy_');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
