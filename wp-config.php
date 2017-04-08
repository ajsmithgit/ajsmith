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
define('DB_NAME', 'aj2017');

/** MySQL database username */
define('DB_USER', 'aj2017');

/** MySQL database password */
define('DB_PASSWORD', 'Titicacas');

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
define('AUTH_KEY',         'ZF .&,od9^<f3Du;LT +TO;YKd<}0bfLHP7v?]370pSij`fvTSxVk@:<g2Bm`y|2');
define('SECURE_AUTH_KEY',  '&Yd#+okK%}5-l=o07o,,I2W<+bx;9.!nM>$k5s6M,`leUKs(nb#[-yvCsKjI(,3M');
define('LOGGED_IN_KEY',    ')b[0t^leTT;Reo]adf_It#~D^.Y9yg3W[a-l;+}#ycHNH6r]I(J<;/oKGrmrJ6hJ');
define('NONCE_KEY',        'Wi?$jL;xKkcXx[bcw4zq_WQ:u54?/PzO?|*las8t*nJc(q@Tv.Aza>XtE`96N?sg');
define('AUTH_SALT',        '7~eW qC#-XY7v8<4;~{RUU|T>-Vi4$0ilD4,K 3cwTVB2Z=sW3B7O_Ei#YVRD,05');
define('SECURE_AUTH_SALT', 'i+#79p@Cz!x2DH&hE`5WR2a#!3Kyg(pD@P&q5a:fZ@HMd m*a{H5I7&kl]!,gZG>');
define('LOGGED_IN_SALT',   '-:/5VhTBE#(*Pg1l1 ]smHhm.Vfyt0L6dmD8N((SY#.2yBQJ+dF|(/R#(`=jxILf');
define('NONCE_SALT',       'KN.u]G7T[08d0Jz5TP7$`_.6ywj|){II*yV3 cp[g{|as =,L ll>ny1M<w<w1<+');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_aj_2017_';

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
