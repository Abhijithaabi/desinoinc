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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'desinoinc_db' );

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
define( 'AUTH_KEY',         'ktjz@ZE-Bj9xCW[AtaN2<wztY6hO!x*idp1-+U3UfZE:{=j3znfJl#jvtfCbv5n4' );
define( 'SECURE_AUTH_KEY',  ',m$6CkK!GPlT>*Ue`UOAB:x~Re,yP0HNq^^Z=I*z_1tV5q3bH~}RgnojAK!I*I~n' );
define( 'LOGGED_IN_KEY',    'Gq`FWAOh4;BTY+L+z0tN{8j$`0;TRurvTpL4F?qcoF/=V~u65RN;Wj2wVwyUEzKz' );
define( 'NONCE_KEY',        '@6,? ]k~v$6.a,pdU2usG!l=Z]DwJ)715kAq8nh75UY .Q*x?`y5Tbp$w+#-m0Z`' );
define( 'AUTH_SALT',        '(t[bN&u+AFn/I@,p?RLUib<;w8WsP9*v~+l^UNGxY]*EJ AyyQw> NASNoq^w4Ul' );
define( 'SECURE_AUTH_SALT', 'Z/1fFS)T@Y{9Lo;7Hp{L{9RGI%T} %W&VOR+1u5=JGr+}1SSN_]QIz:5_436G8<M' );
define( 'LOGGED_IN_SALT',   'uF@u0rI=4(4xTrzs;@t Mjp}!|I0fI_1IRy~-bW_K5$Kks/p;)qCDGw~^Of?zF6>' );
define( 'NONCE_SALT',       'rPfK^^M*loqn)|@xIn`|#U@:Rvp.i|5-IZI{=(/=zKkcX!G.A18>mF[, #fp)@Td' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
