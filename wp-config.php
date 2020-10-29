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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wppractical_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'MM`K{n{S{Ee:5/`8d=v!!BbwrA@Gy2*tg=zD#6fSk^q;[E}rT_;P;rKaL[),Vl8,' );
define( 'SECURE_AUTH_KEY',  'yjMj0e+0&(gNwP~$57[Y(wZs6J&hf8q@alA_ith0nrAxwCXOfJ#}1qH(#:[o`l};' );
define( 'LOGGED_IN_KEY',    '(t=YU[5J-hWnvVYYGga0^f@4?f`|k.Es5Xik0^+0aO%E}8cE>auM+<Ij%xHQg6&e' );
define( 'NONCE_KEY',        '7i(G+tVE}%=4zS}6DEHL[j2aEjP*|Dq$_Y?/DjN_R[.Lf.W/N=!F,(Y_.ZU+C=oM' );
define( 'AUTH_SALT',        '@/1Wph!r8^|oZ;JM|i(v>k~Iq4vG>vZ,<;afag=m?I@kV*Rp9Bn37h58%[-^(HlL' );
define( 'SECURE_AUTH_SALT', 'u1/$H`nfNQ8#%A+gsyPyg@(Fb}Vv_D,q^WIj{$ou<up$im=B:@pyeBE5A@Z`S7CM' );
define( 'LOGGED_IN_SALT',   '6.Sx<1VB<;~R[DRO+Y[j>LT8%%vr`;[8dwKq7^|zUtNO=z+oBaX4G&N,2j*,ml&W' );
define( 'NONCE_SALT',       'yMHP29![YbGFv._x|WDQ{VdPfC]9~m:L[~a4aF&L|`o@@_2vc]8`@{lzC,qY.#5U' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
