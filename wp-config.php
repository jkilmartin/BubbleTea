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
define( 'DB_NAME', 'bubbletea-db' );

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
define( 'AUTH_KEY',         'NQl%p(1/LM5a~Q+P]Z~+YF}rKTuXfzj|M<yQ:Dw)V66z]Gif$/wh5NEFM9#$r>Bh' );
define( 'SECURE_AUTH_KEY',  'r&3aUDws|DIJk+IXfR9,y{!-6:B=(7Zr|5}EP l[9i8w7m/E-)ic+&*C_^1b3zR*' );
define( 'LOGGED_IN_KEY',    'H(+:&]iJq_+66C3f|~;K-R bZgmSvOe*2(qlc{:W0KFxhs+wKS7A.p(=~&nM1R{g' );
define( 'NONCE_KEY',        '!O:Crw.!9Sm=Rb}eaI+hsVuEKv,[-qmGvn%Hia[^0up!BF}O9P._,A6b,KcavQya' );
define( 'AUTH_SALT',        'RL|U;~K&sW29o:)*Rj!gO2jUG:K8}S(.C:~(VPH/#Si^.{a,[H_-&FqZ&[dmHifb' );
define( 'SECURE_AUTH_SALT', '`5tW q[i?oT`y7V+BQEw]f,QTWOL.)NRl3o%[7>pVrrwSK{IoG/Z$KG0aK6;s6%1' );
define( 'LOGGED_IN_SALT',   'r&5|#ZO,6_?F-s$E$IL)3oXisq=+|qC0cbs:XGcmeyBR3$et?CU8gM%?hgKC!iQt' );
define( 'NONCE_SALT',       'K9N{kP_%[KedXQv ^N9MNSTi>wD`h^uoZ7USyNW63x5/Yo&k3|BiGa8hx2[C*LZn' );

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
