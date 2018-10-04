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
define('DB_NAME', 'block75');

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
define('AUTH_KEY',         'yxZ/EhF24+d?6Z>-hjXl}P^1/S^3mugvlR<|c8K!zC6#KP|_Z(RL_(!U|0bElM0,');
define('SECURE_AUTH_KEY',  'j}2hjmO-L4g.A;O7}0=Qqw?6rA:dlbi$V`DY3H/e{qCj-t0r>PcQ:-}y-;Q1(m-q');
define('LOGGED_IN_KEY',    'b(C^)5w !ADi ^5rm,pL5h6<*_96%@* :$(++?g69&K&jX)B(8b,AW{5fF1SkBl:');
define('NONCE_KEY',        '{shn4&GN1&0r|k:h{B{B#oA wP=_wAd]%c):e:%m]s`<t}?A}Z4GwQjr<|;d7Wf2');
define('AUTH_SALT',        '/4)qY=~jA:hf6bx=ESm&CJxJUAIn=6nhy&2i.=kkRpUXFg*6~c2<WRZj0+x@U;2t');
define('SECURE_AUTH_SALT', 'fo2=?hJ:mJs1$x`t 8HWEV(x/o3q-7XR1`aqc+K/!c4}x@c<lh0.F:>6|DvR*Z^h');
define('LOGGED_IN_SALT',   'g?6T/?)+H{1|a~!0Fl3C/it{[m+xb_>,dCoOz}.Oy]&L&{hF*wT][|zkr<W48:tn');
define('NONCE_SALT',       '%n!hp=xuQto:+US?HjM<oE%(bh<!2Wlu6(q&H!u6Jm:)o-&{/7H!y+e%WDp#(f!Q');

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
