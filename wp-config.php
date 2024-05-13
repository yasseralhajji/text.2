<?php
define( 'WP_CACHE', true );
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'yasser' );

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
define( 'AUTH_KEY',         '$RkA=0-OjBq325r7c[0Vs0g^SL`qZV(kxGhUJZx))+LIiIoV8*;J[w39)JcHxo57' );
define( 'SECURE_AUTH_KEY',  '16,}Cq{Ax+>LpIcNl2O#.AxdDZ=9JOn=NV~4JRAbd$iLkm6CD,O5y~Il]2Y#jj?L' );
define( 'LOGGED_IN_KEY',    'e>@-]Xa`IdfNzWsjQ04W@[YN%tj[XFn<pGKz=w&R-*wEsC^~nUNN #4|KaqAe<Ew' );
define( 'NONCE_KEY',        '`z1GY%d#:AIrEBLW`Cmd#~bq!}K[ g,SkD<EgrCnLV0XfE,8Ai@LOgr#3}.vs)zl' );
define( 'AUTH_SALT',        '$G!c5n!%&/5#5w.^ORGR~N|E[gTkxCY%[7qo%0Q=OB~FQ:~lJ^Tah&REKmV9axr:' );
define( 'SECURE_AUTH_SALT', '#Q88Yc?0,*3=vY]Zl/3DW}u%HT{2aM@Pbi0(:3r&.]u[gbJD-cT9 &O`1zZ0fif,' );
define( 'LOGGED_IN_SALT',   ':Ok`;IG7aF5MPn*3D]W1#->jJ%v#O7YkX5{WPmvNp^h*+rg:d@H*wL)z^fMc,kCC' );
define( 'NONCE_SALT',       'G{1$HY$Rp?GrU@H^bTBbw<PD Fz8I32:XU]=[zTGr:cMBG6Xb4@OyC3lFYC_6ji?' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
