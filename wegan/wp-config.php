<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'qF+QZvt-B8#@s#Xa_gto- plZ>eM$)6MM2$D+cC}Xg[MgCsTBquQ nl!zjSxWk#$' );
define( 'SECURE_AUTH_KEY',  'TdYH||I@.T<.H2Zffq^w/n%G}2iTpSKEd8Zb6$Ap}LcIIZ/^,1`$r{B<*Pv]o&KE' );
define( 'LOGGED_IN_KEY',    '>2U::eYN)ZZj@Ykm]W##en>jpJl?um:v0Q3kY9D1;1658x9f$]{}oyC=SfFZ42`#' );
define( 'NONCE_KEY',        '*(tU6?OQZ1yKhbWD?gE;{`?W&8)Sg/>)Ro~!(f<zZZ(g6Xo_mHu2K<G PQ-yWhGQ' );
define( 'AUTH_SALT',        '(1X]%h3}N.VIO}re`s{Z9GZx*z(ejW`K _+rm# {2K`<^Sfy^7E^J@BLPUKlbx/0' );
define( 'SECURE_AUTH_SALT', 'JtUYK5wz:LK^M?M@d_-ey-]$#~OCJ}NZBm1a1`nii;_*l=%qOa}K_COlcl[bIvLw' );
define( 'LOGGED_IN_SALT',   'tAy~Io*;~,M{*/3>w_<LtlXfIGiy~:>9miE*F,dkbD9x_6-K^s!cm+0>eWWiqS)-' );
define( 'NONCE_SALT',       '>AA-IIEBo4cDEmVY3!o(mG,y~#96vG-)`{d2Vb-|j-?~+.:u93v[bwuO!l6z_&K_' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
