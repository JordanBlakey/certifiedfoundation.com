<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

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

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'db517465339');

/** MySQL database username */
define('DB_USER', 'dbo517465339');

/** MySQL database password */
define('DB_PASSWORD', '1234!@#$qwerQWER');

/** MySQL hostname */
define('DB_HOST', 'db517465339.db.1and1.com');

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
define('AUTH_KEY',         'r{v7A),L@aF+c,.1eIWl/:)??FK9-6qZQN1=h(?w+q,{3+w&`],4BcObJN=4jG!L');
define('SECURE_AUTH_KEY',  'H+]`c *+}$<C-yRQBG@$34Xa-+R=(4/d.^2%g<coBZ s2G-.};[nj;SZuQ|Zlg^+');
define('LOGGED_IN_KEY',    'v-Dp-BK6ut.NFA$sm+E ,al->e/HtU7W`ZHkrX9(y$Kw:;9%}:1iwL+Zo;U/wMC^');
define('NONCE_KEY',        'BbDL%%,oyfY<s8`KoKv@0b{Qqp5&~oP1#;1c^^#{eM9]HPzk;jBbJ{F2(zlRI0O$');
define('AUTH_SALT',        '<A&WVR(6S^W5slIve&n#x+hM^|?rM+CED%M$49o19@!i|Z{lIZkDJ(!c3jV:+4*o');
define('SECURE_AUTH_SALT', ':e99LycgIwZy _)WKd%^u>&sKB<Ij>A^+JVdBkliWkgzzN-~bK.0dvlQy<i-k?~~');
define('LOGGED_IN_SALT',   'L$LFG-!PA|(@l8A:>9[L`sIFgrVLI8}dw-r;,1y!0f7<Y-NHWu.lDVzY!N01xG!>');
define('NONCE_SALT',       'Q:3w93g|ukB&J+Cr,nmWmrQ,Cr~7]Yn~+_4Z)fYtp`pB+S9,_}L+~4IX9_Yg}MY-');

/**#@-*/

/**
* WordPress Database Table prefix.
*
* You can have multiple installations in one database if you give each a unique
* prefix. Only numbers, letters, and underscores please!
*/
$table_prefix  = 'kyuem7bkd_';

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
