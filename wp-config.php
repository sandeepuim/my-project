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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'demo2' );

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
define( 'AUTH_KEY',         '#i:[@>;$?vMI*bqRAa|?Wmp sSj:YHNzuY N2Pk%[0A:18GAkvu%6u9~szB!R0]M' );
define( 'SECURE_AUTH_KEY',  '6|dpVo(kLDKR+ax]L}A`{7VxS9,Lip9L0eO]C_v1>x&&ZQENo hFh-(o ;#@{+>L' );
define( 'LOGGED_IN_KEY',    '%?[s)&Eb5Byd&e:q$f]+5}b7sv8D9W=YLh<Xen%1wlkT/o8/t)uS~BT,S45,z,GU' );
define( 'NONCE_KEY',        '9<Xawh) %3H]J(Bf@k3iU^+Z&Aj2;3XA4dx_mulPy}Akmv2UnD``bLUj4_sDndcd' );
define( 'AUTH_SALT',        'b<Kl#5=kwO!Mkn{87{{t^WLr2o!g_qP{6}2):S)CH#F*b+1I~3)Xw^K5P)q mfKU' );
define( 'SECURE_AUTH_SALT', '#sI?6:m2~vkCPBp0qlG7PxB_g$}px:Q4@ )omK8AYc,%OcW}P+d1M{E`MGc<V0<&' );
define( 'LOGGED_IN_SALT',   '!N}1 41mXTS_S[C v99F}(Y3oZPe.n^WzOsDao;u-&[upXc0okA-~/:22ZbATNU.' );
define( 'NONCE_SALT',       '<>AUX{x2#Wb~L?p5$JOwAOw7*bj M,m{[%,{Sr~/CUVF[DWh%pW`NW=XR76~@3P5' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
