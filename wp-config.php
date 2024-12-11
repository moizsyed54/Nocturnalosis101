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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'converso' );

/** Database password */
define( 'DB_PASSWORD', 'AdminCo!@#1' );

/** Database hostname */
define( 'DB_HOST', 'test-retail.mysql.database.azure.com' );

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
define( 'AUTH_KEY',         't=Hk5q@cl<V?p3y1Vx<H2,|3/t,m@$[}:6yXq4&1*c{6RE$yDLj:DyL?2,d;YZHL' );
define( 'SECURE_AUTH_KEY',  'IpKdj+nAdd}OI+qsy_vN]1vfhp+5+M1aWo6zpF>3RHF)G!LPo7H79^$d*IuYG(7>' );
define( 'LOGGED_IN_KEY',    'CU3z.WCuRBtWRoLop-UkYV4&0-LSBn!Masc8@cPgD~5Bo+<qS?^|XEyJ{=$.-t._' );
define( 'NONCE_KEY',        'e7CXhptw[POaa)z~bLBh{cm,J^an#s/<J./{[j7jC@T;z8CzOb%+SQ$*QgQI40dp' );
define( 'AUTH_SALT',        'A@Jb`!kjU4ZBAeoN/i_C?;*6Y1Ia0t[L{!0%%lL<io|5`{ozrhk7nt]IPZg2C!Z#' );
define( 'SECURE_AUTH_SALT', '=DkNnNy<Rl}V$N5N-wy; .6X}w>@a7=g /(~d/S`)64bn{}y5?0Lm,(@U6sqA$_k' );
define( 'LOGGED_IN_SALT',   'Tb_-XYks(rAmG{r=t.:ha|1~S*blHJn~#Q-n8*`Pa@<!YWp0cRMZ|cz0mpqsfgHU' );
define( 'NONCE_SALT',       'EMhV.@ X_f2Vd+8EQU}A#OH%[k(@59)pj&D<@VOsad-1*67[;n%ze58d+FO+@VzF' );

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
