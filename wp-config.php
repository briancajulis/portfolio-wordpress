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
define('DB_NAME', 'portfolio-wordpress_db');

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
define('AUTH_KEY',         '8O.Kt=jI^frAAY&DNEaE/II.q^*BaSr&hK|:D+?.p7P{(V|UG,Q+.C6]9a?S?L2=');
define('SECURE_AUTH_KEY',  'h{4L`!dtw;wX(iSj:B~OgRXn6<o2P=s.e]pkDHFVBd|97[%QMGWv^ri2vwb9U{)Y');
define('LOGGED_IN_KEY',    '7?UIPtO{TY{0K[S#h]c-pK,}+$K ]8[~{susR+(`5g8:}6_3sh#-sE;QgK9KsuE%');
define('NONCE_KEY',        '4|tYt^Q!No[Lx7~Ci8LFA04EJ%]u`AyJg26$xdvq&A^rp3%^G~|z|~49nlYZO)v8');
define('AUTH_SALT',        'x:{,!4$3aGUq$rxo6N@[8?&f#q%wGMc!TB2s;.Q7ZH$)A)<RLNL9nWGEa;JCcX9~');
define('SECURE_AUTH_SALT', 'n}GQz1Q_4D9@F@4.HQ{9,5^{OxeAt%0VMG4NA57(d1)$uNIQd({~>5!WG`e|!_k[');
define('LOGGED_IN_SALT',   '@sWMuyWg&~nugtW9=t>=O(=[]a~!>Fu<dP_UvAl?4)hP2<WeoA#Y^#}6$1dKV/<C');
define('NONCE_SALT',       'b (%tU7-79ou/:zuFI%>>slnCKtc{q)IZgbAf;iNCK_I^J9cL1dD A fC2uyd,qC');

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
