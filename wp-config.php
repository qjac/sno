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
define('DB_NAME', 'sno');

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
define('AUTH_KEY',         '5oP!:{zqA9*ND<w-|+peV0[>*MmoFR<<:iY:WXI:;BD^8%?_GaN|u(/*8T6./y>=');
define('SECURE_AUTH_KEY',  '5Edd5):*o%.]U2`+m|A74<n[?4rkByb_0|ily>~%8=JT5QqruFV!.*Tcwrm})jAv');
define('LOGGED_IN_KEY',    'Nriqmv$Z4lr];[.M1%MY,V,RiM;_j5uEC%-F|4gQ+cWa*OjB*l$0M!nhjQtG4.]2');
define('NONCE_KEY',        'q4F+>_8 b4y0SA$oU?RluO#]rT4>4DG*%^cKZ!)1:$#hJ+n;1|n+X./c,$.1kO8v');
define('AUTH_SALT',        '5%h}ve 6;K+jj3n8-Xs>+VzC`]8lWYc}:k4o{-W_oS2Mc~c9<TEeH~LCjMP%;wdC');
define('SECURE_AUTH_SALT', 'x;+$bR#@B/x$p*%@7q@t~wxqQXBYB{_q%#W4G7)1I0j>h+5N>Cex?^,y+.^W@W8L');
define('LOGGED_IN_SALT',   '>9$QC?t;Y?nN9M)$|C%r^V;VD Rbb-1/-Cr]|.tXgxR4nLPMP) M@{46Y<:|4PG}');
define('NONCE_SALT',       'zT-49Ozm0, Q8 c:HIC1yE6#9h{<Q7U1jo@$;/sn $36[ N6$I<ku$#9u%0G-[(M');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'sno_';

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
//define('WP_DEBUG', false);

define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
