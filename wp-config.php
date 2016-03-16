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
define('DB_NAME', 'cars');

/** MySQL database username */
define('DB_USER', 'cars');

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
define('AUTH_KEY',         'Cf3F3pE}_pk=++%`rGAkNAM1gOoGJ)EJ#&s(u25p1G}nv(:6;4Vs^SkWTsdR/bT}');
define('SECURE_AUTH_KEY',  '7j-(=iEPJVq2VF*!:CR%WrFFQIG<-Vl/7d2te.4vs6g5N+_A?(Cr>>pz69hh[pR+');
define('LOGGED_IN_KEY',    '4-[@AT,< C<]dj64Isw~X4]`8EZ>VUk%O)@#qSM1dz[O/PntfuMh>nY,<:Wif*il');
define('NONCE_KEY',        'DjxMpB^SdS;P@Je^elzu:ZNBu=DWV%>Drcv?k|HkbJ|hI+}f#W5^6zqlhMG~M+[!');
define('AUTH_SALT',        'Uq$ZL-$O9]QV`.W-L++kj9Cgu3jTY,!^)3/7]2_%wUew2-{5vr`=nK+%0w!2=FH;');
define('SECURE_AUTH_SALT', '^ZqLv-=F>F A+,dFZn?,2$y#o9Bh9{-6XNp#Rs+qCFWazL3eS=YIga|>BNSto -P');
define('LOGGED_IN_SALT',   ']cm-Vs_r~u1,-|Mp=T8rrL?l.{Mwcx!#Wp042mtJ7eyy{22Qaott*MdL=9+D5*d^');
define('NONCE_SALT',       '=BR97W<<4QgR[|T=,uDl-*|t/qkIMHYF:+yEZrhf-hD~;XPk>U&.|gHNRZ$8+v:d');

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
