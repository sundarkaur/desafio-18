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
define('DB_NAME', 'wordp-activ-2-temas');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '5@jk%*$_:6~SbJUE$FI3)%vIM2{w1fV_(UATXwb?5zj^b|q9Q<IS e#-:$CCCs.o');
define('SECURE_AUTH_KEY',  'ODSz6G.@OxJXsft j4c{}>}K4s]>P*3Qq`DAYQo1olg=kw2@&WRr5_:=v>MIX&:.');
define('LOGGED_IN_KEY',    '9auO({`^39=.R>CDx}z]=|}n[Di4[7[B:h@4!!Ax(4ma3Hxj8,AgM80It65p6]Nz');
define('NONCE_KEY',        'AF0CI#weA7vX}#g0[e!k>}&4>{?t=u6t8!6t%4=5s1&f>ccC$]!W;g!>Z9?u+F#f');
define('AUTH_SALT',        '<X>2^NnDPrK@P-*]fT(u/;(3i]3=3KkPJUkyjjK_F_c|+bQu=)Ym75Ze-P~M;XX4');
define('SECURE_AUTH_SALT', '}Gll-<15]M&PD;h1h*5g&w{l5(!zg^a;mMkH`a<}oaIY,kq!=`HK}m52lR:<Wyno');
define('LOGGED_IN_SALT',   'jm}|]w[o+TpZu&qYO H[Emj*P y>XSb(;Nb2 XufOy%]``j] DhT;KrNA?~To`Ra');
define('NONCE_SALT',       'HRGbh9pq]k#.d8L*~>@-fmni*SqB3CM/pYk7tqIkP8c#@u[OWp ~OCIfh3.Q1olg');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'dl_';

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
define('WP_DEBUG',true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
