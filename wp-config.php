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
define( 'DB_NAME', 'rao_intership' );

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
define( 'AUTH_KEY',         '1]wr3Q;Sr{6F5Fs6j]db3|F^XEt(V =z3PhBC7YI(DtRq];hBi{vnN$ uD+D1?Q`' );
define( 'SECURE_AUTH_KEY',  '>3T|_LL(dYcW{6-Co,lI)XX|:/ZwMNtARDM;-dnP@Bq@WpRc<IcGDS48K:[:G3:d' );
define( 'LOGGED_IN_KEY',    '|:<eS*T~QEZ|Wc j(>/KDo.$O-@zIRv;Wk<D~BEf,ymi/xGLp#bK7hF`Og?McZ3T' );
define( 'NONCE_KEY',        'coZ0<G(S}%Q/M;-4NT]pymiisLhYNBfQ]o4nsz?u,b>P(_91K8eFF+Rh|}RbW<(~' );
define( 'AUTH_SALT',        ' m<.6.!G ?SR$sz}B,xf?K+*TC%Q0U*g/qR/4WFoOmdI:)[{gh^*I<,)p-ZgE/*Z' );
define( 'SECURE_AUTH_SALT', '>mh3NXBE{P&@rCNgYDjv2W;Jy2;`~G8jCo>0_dJpyi5T^m4c:T#O^C$T.&-13-m%' );
define( 'LOGGED_IN_SALT',   'Xh1jE:[mU<Dh;)`N(aau[Thaf(|&Yj?u*eVb7B6}oKw@*cD?:wc#Nsf*9C:A+uCk' );
define( 'NONCE_SALT',       'F{$T&txVYqw+ZaR.di.td!zjDq*gvoFmD#Ka<k[Q{bApRuk>|j]?e9Bs&`]@24o-' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'rao_';

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
