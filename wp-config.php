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
define('DB_NAME', 'wpknalpot');

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
define('AUTH_KEY',         '.4Tg,DQ2An>>OU@x7t7~feder?v7t6AzhH6L-+3}M9}]0wu`Ela%;/jIO>]7l!IP');
define('SECURE_AUTH_KEY',  'ZWu04U*)b`o2XSBc28@2.o5!S{kNY8&UR+bvsB2:.bm2rO0%b@>{1c0MyJO(Bp<F');
define('LOGGED_IN_KEY',    '_fj/Y|)%];?1)`&]MjJ!tSy)k~pZBLJjIP*[+kDWlZIOI]e8L1S*Lcy(k{HsGfKb');
define('NONCE_KEY',        'OGe]2AI9*K7{uBOr^!J[v76R/-r,d>%~&jw8xw}`Sb~u#Yjg5.F&&z|q<k$nl88m');
define('AUTH_SALT',        '!m)5Xije?Dw]&iHFy<TjL62Z0-jJWk]i*GwtVh4Rm:!ax[Q2_2yP!>Uw+gE}QB_+');
define('SECURE_AUTH_SALT', '(Bjb~k2Zk`[vhv_dqy+4zcN9E2t&fJ< 8F7mIE7F@Ez}]sj1,-HI6DKYxM3EiLS[');
define('LOGGED_IN_SALT',   'PAK 3.f2v;<qzp(vQdgrvK60#mWmVny0`GN_(L[##iF!o>Kpf#4h:jM<8(,I!^F>');
define('NONCE_SALT',       '&(YLP76ZkR`YA$<Lkeb?.1Q>Fl5rMf/x/S06r9v}J^ th4Hx^dpXgb.Q`<;5pPF*');

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
