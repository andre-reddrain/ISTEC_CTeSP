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
define( 'AUTH_KEY',         'J}e6*1b!LA:a.TXtsO/$kd{Y$XfUJNV/Il_j_joev_K-`oqbOgy@QICbCyOf/^np' );
define( 'SECURE_AUTH_KEY',  'Vb)WrC{pWP+fVR-8Y2ZQSG^Tf5+|fD5eCl7hG`N/_Mp^c1ipRtdgOoVIWUr79~i%' );
define( 'LOGGED_IN_KEY',    '3@Kx{#S/c-1!oqEpgWP=Y@8<{_-(o=6u%ML,6Q$f7@/,PUHa7?$Al%+Bw:6]JRr,' );
define( 'NONCE_KEY',        '@*Q`Oua^w#bM3]F:o(*)*P=zcy,lof*D<OHQl{4R> 4|:<{gkSY.zYUHKoH:d0Lo' );
define( 'AUTH_SALT',        'YajU)3+.S!%.fOa5KA&9D+=Ei;Mrd8KN(n/skx@0&-$^BB};WVbn/`/B//|,t3da' );
define( 'SECURE_AUTH_SALT', 'gcHp83t)tqV!ym~je^%>8t*x.#YU;ye2 B@_&N%G#=KzUfl9Q70M%Y,oIZ7W>C,h' );
define( 'LOGGED_IN_SALT',   'Rv(xs5UENV[&B[s8Ho/bDW>2hKtCSqcsSh;=2)Sq`90lM6MuCy},6;p9F,p3l=dS' );
define( 'NONCE_SALT',       '#l-gy?MI_~b!Q g+[JoJN>8f3+ojO)&{6X7sK|=^WE6,jc]hQ>p~W~{Wvp8zJ?u3' );

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
define( 'WP_DEBUG', true );
define('WP_DEBUG_DISPLAY', false);
define('WP_DEBUG_LOG', true);

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
