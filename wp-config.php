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
define('DB_NAME', 'kotyk');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'lH*3:#2c8Uw@xhdj#=yV(S<LWr&Wi8-/u]|kmOIf9DFt-6WSK_p5{o**=sV[1Z+<');
define('SECURE_AUTH_KEY',  'rZv^+Xq.RA@l>>Eb~K+:ub2;,13.g%]m}ZB`@P2;<27e!LML:Uqc1X d+&>e1FPG');
define('LOGGED_IN_KEY',    'aKH$r:{Giuf?dw(Y,:L4 z!Eb9Ma$`fElti<1F.]sQ5si/]fv*{3S0MP# :lGjr7');
define('NONCE_KEY',        '7Rqjc^^Ad)0aN[:cfZDeyMG5`3<2Ok`:IM<kzGXsc-m6rLf!}]2Q;to8&>%`?#s}');
define('AUTH_SALT',        'hP:J@yL,@`PF[Jp$sp1@[*vmg]%ZdTV1s6Fv.(uVE?]y%I,u#7]~M3q+X%# : R-');
define('SECURE_AUTH_SALT', '<UL94]T4_;iP(%!rpQ09^6>FXHHJ/zadEKjzuV,PJ}QbhE&Sc(OO{4DQ6(iQ1g=T');
define('LOGGED_IN_SALT',   'W$2!ol5j^KSL!a,z<3.EVrPMXSNBf-d(m!$Pb_`SxR:Vnn)8D@BG*#5;CN-mU9JV');
define('NONCE_SALT',       '^Gt*=[+7gqJ!gCdpQI:>)tS?9SG0JK{-Vn$OK[56rUFf5Ve5u$s94U6ed~],-?N$');

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
