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
define('DB_NAME', 'wp');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '123456');

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
define('AUTH_KEY',         'x$G-b8&ge@YcDzBJL)gIb|@~Lks46|o_5wd^naXG|4i|tn<WWrEIHf[`(Dz%5 7y');
define('SECURE_AUTH_KEY',  '%*|/N|8..3WRb)wV<`fs$V%:wRORgSX/gzYDuS/nAy# k;?wS73[.`+>5W=Jj|kl');
define('LOGGED_IN_KEY',    '<S<ZfKyFr`qlxX~=o80J&t[G-$Bv/hF`O6Ye#EL>2D$k42dKulWlfV6`4JGX%V(G');
define('NONCE_KEY',        '^<]m`FO*/lIw-aY$|fWm`aI8*~KRHb5={uhs0=h$8SQF>w<:Q:S2I>@|xl*!Z&qJ');
define('AUTH_SALT',        'E*T)Muc_k SS)C!1:=y)588}cfXiLoTTBKE_[]P;,Kg@qT1cHi[}NtjdMk8|G_Xb');
define('SECURE_AUTH_SALT', '|I= {(>+zb^rS&uo]a~R C4>5ZvWaqiNZ1?/sg|pGxB/:2#x+=<`MUd, dIUD}/#');
define('LOGGED_IN_SALT',   '}c^1<tE@]R?{2mcs9}|i6[-CbI/.U7e}?@mu;orIh3+N!MdGC]4VB*F7hWk_Po^e');
define('NONCE_SALT',       '3@pD4IdNytADSTK9pKB!%Y5-sa-UCN|U+aG4me+y|e?|x:Rb^_}K[uA#Y4EZKkFr');

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
