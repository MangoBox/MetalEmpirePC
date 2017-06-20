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
define('DB_NAME', 'TestSite1');

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
define('AUTH_KEY',         'hMSMA%}W=fhR(u# -5LC2:tJ$mF:}T}*N0acrjg,5L6{~i6kgMtAKqjI1^b`VlaF');
define('SECURE_AUTH_KEY',  'sL&yyu=R-q_60+Fjm3k|LkE$ qQoLoz1z<l$EyG)T;KMjd (@TT9iHpd?&EZ522&');
define('LOGGED_IN_KEY',    '%orGf|eO!*N6G>HrSjP[mG%QAZ)Z|~3~N=%x_;0ZL}TY0r_XPD )( )}D4_*@+ug');
define('NONCE_KEY',        'sQam2>s,TV-,?7Woj~970:Z>F%CS[M*/fm4kJx3j}yLr&)<xh mfdWOqfsonvTlG');
define('AUTH_SALT',        '/@:uo@k`Uigl}7CPoX~,B7-6;~C5o .jR/ZL,J/QD~c,x[{7A04{[M+A9n:8Rt:i');
define('SECURE_AUTH_SALT', '[2LfzF.G24 2,y,=3O6t+NYCKb_Us<$|[~4K7o}Du]bsI4$,cdD~?X?Qat<K`T,f');
define('LOGGED_IN_SALT',   'NrW,w4MUZ1*w#yE B.brnEf8:^I_|uDn6vX6+f@ue~ *6HDa^Rdp<.>m<vI:(}7-');
define('NONCE_SALT',       '>LgWiKl<l/J<>R9c~.Z}~D*B.U/RHaN/u42*K/,kQR2-~W1HfA>8r`pQ%^(nGUMY');

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
