<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Heroku Postgres settings - from Heroku Environment ** //
$db = parse_url($_ENV["DATABASE_URL"]);

/** The name of the database for WordPress */
define('DB_NAME', trim($db["path"],"/"));

/** MySQL database username */
define('DB_USER', $db["user"]);

/** MySQL database password */
define('DB_PASSWORD', $db["pass"]);

/** MySQL hostname */
define('DB_HOST', $db["host"]);

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         ',CwbAP9>-UL-&22}|g+@TR$gz_F?$BGTc[t{I)(SaSpS).k@ti 9Q0jK_w++i13b');
define('SECURE_AUTH_KEY',  'aaKV;MS$l;HS#J@%d4L3`)+e#hiEzqapTU4K|I=1^ExN8su:H^}lm^UAQlwJf}l3');
define('LOGGED_IN_KEY',    '-!GKQ#uL0V=9%87F}6qXJ;4T>@5<~OcmYCv U?P@E{|eW_,T&X-g0Z/Z1z.p|%sa');
define('NONCE_KEY',        'p*lU=|+-~eH/TfmvOe$-ka5/,73yZ/?m&+>%QBI}IW>#rvPVZ{a-m+k:u()9qMj0');
define('AUTH_SALT',        'L}t@ou}I<PUSZ@%1vi|:zMpsa+<TyaCz#eK|)9j|c3Os.3H+>~%J+|TWbcba;)Pl');
define('SECURE_AUTH_SALT', 'IdHJ6Tfn`hGnJJP,I](y@VGHMA9_s)s#B.QFO#y#u{ulW.W7h%=+I@Ve:&SpVY:P');
define('LOGGED_IN_SALT',   'B[t?]E4W,$Y SR4a+y)BqB-?Rqdj@X{%erb[g-p+R&D;>&2d|V-dM$I{t YoK{o}');
define('NONCE_SALT',       'r#Y(kNN5||wcX+7259Lp#_D4=bV)^A<s](f^UO`ZJ5&FqCFGfz[{W5||8*gJBr?|');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
