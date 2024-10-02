<?php
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
define( 'DB_NAME', 'lms' );

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
define( 'AUTH_KEY',         'r/x[DoGo6Z9_:FIVf$pwr0QI76ND{LIf$Zq?v82S-)G-/IVj,d%*m]>ZR7c$7A?M' );
define( 'SECURE_AUTH_KEY',  'Zfec~i?_q4o[I?{I.G,;c#;f0e/xBR2XcAf*Sv/lq?!GA#;of^<WW9DD)n<vjBxS' );
define( 'LOGGED_IN_KEY',    '^*>+2#o9kiFx1,_DQ)[auL#u<2_$7(4[Xf(]u%LoJR(e~X}n{|]G8UGh`7K_5D&z' );
define( 'NONCE_KEY',        'm/W}pg=y1.ZbhK<=nH[@x;Q_R7ONE>_HVWYG!!9UorKH4mOm)%Bh2@{XrB6?jK44' );
define( 'AUTH_SALT',        '`K*&_Q[5<ar@&WinjuQK!iS>`n<>1:@>8&`){xKd!2J>YJA<I+9W_mi$n4YIQ8|D' );
define( 'SECURE_AUTH_SALT', 'U_a=l CHDk12pKi@*olIjkx%~DhQ:_ c>YpZ!Wc{5-O5Q<ZL`nu@#m>zh7Rge9`t' );
define( 'LOGGED_IN_SALT',   'y u }(t+7pWTVYX38{2Tv|%z)-LYncna1M ;:B%|:@JA]+vxKjo)I@TZE?pPnp9%' );
define( 'NONCE_SALT',       'ChVS,UXS6sV7poOixMAUN!~Z%_LT)S:v/&qtS?mTwNg0J8!2o8z&*k|/GoY<c+I=' );

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
