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
define( 'DB_NAME', 'sh_arms' );

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
define( 'AUTH_KEY',         'y/z|1a-`-s1/HafpRAavKu.?Gf[MQS{)H&@SX.KM}ezvpN8XuYHTI#m1?X**@z;a' );
define( 'SECURE_AUTH_KEY',  '9IuOa_5*3eLB.M3f?E!<aTn]6LVVel:@{`@^%}?2/a`VEAO6<]vMQuqp}90$:s+;' );
define( 'LOGGED_IN_KEY',    '*wh*rtuftQPX}3/aCN+$>lv2Qn_?FiShKP<nq`,%-2iJWho97PuUf4MV3wT)%=Wx' );
define( 'NONCE_KEY',        ',b,.Rn0Vy$LuWoJOSU=V17,4^{yeFrx;[kMl+|O2/z+BmNWJ96xd]MLc$_HktR{t' );
define( 'AUTH_SALT',        '#~ [OPhvh(RAyL%WS{H0|v13%%RnTY(d{QR $tNi1bkT)UZTK<R71Q7YH<1PqI_m' );
define( 'SECURE_AUTH_SALT', '>lh~m-sXj33dN U;Rck1VVl*kGQAiG0S!2>I,Q@]AC,F..97gK52MEtyn sk?1P_' );
define( 'LOGGED_IN_SALT',   'x1K3%(=w]+W|]Pgy$+K`,}1fWa~HG+/fJ4#cxbcoo-64]}8nAYoxkeCF|z_U[boI' );
define( 'NONCE_SALT',       'W!SJ_^<lCUxo-!e*vN >XjcBq1wfI8U 45GqjSheW-)soH&GPn-:djNI3K=07i3~' );

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
