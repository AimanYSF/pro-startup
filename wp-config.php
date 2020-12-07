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
define( 'DB_NAME', 'site1' );

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
define( 'AUTH_KEY',         'i_^N3W>t65gb_N6SedV#Ae&&5DBP|@Jo%X5$ox[nK=mD_r7oyu8<{NO)ke@Kl^bV' );
define( 'SECURE_AUTH_KEY',  'V P#(UaHm0w<iAcey*e}H#U{@T3:1^drpfQGrCDx.@>K)}5eGsf ~~<<+ F[5n).' );
define( 'LOGGED_IN_KEY',    'YE%zW4tW<l2aDt;@?15K?H-]Nr^7*o]h6SCSA}5/53FA4v3aB35x$FB|d!h&Y,jQ' );
define( 'NONCE_KEY',        'g%p>N?>lYLV>E*oD^;Q}JEo4O-f9ar4S#]H9D}re`xU8i4$$M*l/nLBl:9c(ONW5' );
define( 'AUTH_SALT',        '4GNB*!%~$N,}YyO5t)>)sg))3q+(UId@o]W%a}F`Nz/!-/1eFI_/P99u=isil;7p' );
define( 'SECURE_AUTH_SALT', 's8]H7=3h$F`vR4b!AHGiEEBb[|}gbF(BZ+=l~B}Re-q!aTU.(UXA=[o*^Mp}@b5J' );
define( 'LOGGED_IN_SALT',   'k)$nb*?#FIx`NMIXlmE`PgxVPj1GIey$Z/Jf1l>,M2n>{J@Bm>Y*{crD `#GHY,]' );
define( 'NONCE_SALT',       '8Y-nPj74%C~}SU_T2:qW1gnj#)L>YMt,N}~<s%Aq;((4_00fR0=|;cdZ4?#p8IkK' );

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
