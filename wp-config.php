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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpree_db' );

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
define( 'AUTH_KEY',         'Hg10]A; *<qt+[|p#cUz+&8X.n&/?r3A5EbUL%<?$)1vw9#%_&9PYgC`6/A<l4v|' );
define( 'SECURE_AUTH_KEY',  '9{P[H!sn])taHs+N{#q#K&N_i{p5FK`4!G7m49U%Y((BjneA-m3WA<s4[]VPZQ)f' );
define( 'LOGGED_IN_KEY',    ']i: -a./-l&?SCi9_|q/>@#S`W{Vj,d|dRwqb{{8>Pr/{!NM,&oN69<(mz._<6$#' );
define( 'NONCE_KEY',        'oki{bujj.8!]F]4p{*@v^aSR%_Z<8w5FMm_&j7_#nbz=6X{)L0`? 6YYqI1XOA7_' );
define( 'AUTH_SALT',        ']ZQ)Uezth(FDqUgJzUvtm#&@cnZZ?vBr(RJgf?Nd1~4U[6x8cCwTlnjO,+kobXq1' );
define( 'SECURE_AUTH_SALT', '1,gI` BjaUKz/Xm|i=mkF4wP6W8sL7g[frT3aQ>EGd{z(5S($We72LmQ~mc@t)vi' );
define( 'LOGGED_IN_SALT',   'ac[q]KG9mBfqWOgRcsU_u7T3SG1Nz!3|mn%53Aj;E4(uo_<[Lvm}T]uSH9j=,V4v' );
define( 'NONCE_SALT',       'E5J,59.o>R>jjol?K$aj@`4OQ?WQj(>s!5sHwm2JFsdRY]gH8z/k#Ya1st(VmQN4' );

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
