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
define( 'DB_NAME', 'sms_infomedia2_v2' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '5,J wGpHWOX!W?b$C?pXy_V1#:-.zd-f) Guy>Mft*! ]^nXq!?-5N}v7tsPS9V3' );
define( 'SECURE_AUTH_KEY',  '^2>R*{oztUQ0Po~m^#a`sCt!Ke/vBV516$KaEw6KY>$dC&V5I|Vtb(vsP#fSlbH?' );
define( 'LOGGED_IN_KEY',    'OZ]yURk9L=ezF5LEb$S3`h*8TzMC{}J)gc~eo C_) ng2p12k4a!U}[aE&3gqpLO' );
define( 'NONCE_KEY',        '8.h5W ,q E4WL,- {Fk?5Bs&ur<1Jdruvj`1rdWqmZ:Juya.WZuX4<8t[Kzy+5Bf' );
define( 'AUTH_SALT',        '[d(KM%wkH?{Eq=P}UpJ}GB:Nm+<*Os0kK!deR= 2RBE}0_A.~t0n:[!Sp`i:6X#L' );
define( 'SECURE_AUTH_SALT', '%v^CSyA>YbUC,{#/_s|@8eN`Y|JNJLgUO7=Wd7MD8AXl5Amu23-sKjFW?5F.(rBj' );
define( 'LOGGED_IN_SALT',   '^/6-`b<80_d=xTclLmRf&2bEkz@qTD:Np@GB{$[6-+LBNSy+I1Gf?M#+H*+ROY#j' );
define( 'NONCE_SALT',       '_KCnKw((#Ic22IIulovbjS62z._#O :J,@4oBqH=f!iAM3lSw[==;m*>K,UlZ-EF' );

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
