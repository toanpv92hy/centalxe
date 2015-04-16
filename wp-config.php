<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'cental_car');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         '!{X1>&#|3bv9<1n<JJ7h+~os(]8y!u|;D.n7xhY@1C`yrW,qG.FBAU~||25&B^Vy');
define('SECURE_AUTH_KEY',  'zMmFL2aPPE8MAD}j/d)`JvVu[pqm5`I*w(aI;,l_>=9OMuWqi9=T OMySB^ +o4H');
define('LOGGED_IN_KEY',    '=Ec:ZH;cC0?SyAmz;~PU(p|}K-d0S#jD h77%9<-9Q#Wa;wDvY)/ZBs:R!CmSA`z');
define('NONCE_KEY',        '+6q*!0|A{#{?+Cwszx)=W]%dgO;U7tnepg-yqVmsm@%L{cn:hm<$iDI>bb`KLcwZ');
define('AUTH_SALT',        'Kp%ux#U!4o,!hnIGz=<>p-*;U=+@$R bL7>Z/I @FKJZ 2|dzVlI~!^wBP(2q%,-');
define('SECURE_AUTH_SALT', 'wOJ/B;+<@c,(9RKfCY1*M(+yG;rl!?V);NQ:paFN9g^]g|[]4f|< ~HpvScanx*E');
define('LOGGED_IN_SALT',   'm9RvqTEy8  ?A[IBPp]yl~N-EY:$v?L9+P#K#4=AO;uoCU|Tj%j%pe7Ck8 c-@&$');
define('NONCE_SALT',       '4Wa;sDDPEcvW g;G1(LR=;kB*hYMGV_~FZ1& A&_eUm.K~ds%b*RcBzYI%.n+^ic');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
