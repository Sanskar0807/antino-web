<?php
define( 'WP_CACHE', true ); // Added by WP Rocket

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
define( 'DB_NAME', 'antinodb' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Antino$devs567' );

/** MySQL hostname */
define( 'DB_HOST', 'antino-db.capbefndbqax.ap-south-1.rds.amazonaws.com' );

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
define( 'AUTH_KEY',         '%E7}:W9U> gDHy/&cgEC]ly=rQ@$BNCAT.We@S7e/z`V5-C`xO&q?&ExOhu 2lt%' );
define( 'SECURE_AUTH_KEY',  ')]RN%!E[r:[M*6=2yjyj0]vhcp/1{Ik3svLo}`oCmPD=k=j-YCgnbS9BD4,k c|X' );
define( 'LOGGED_IN_KEY',    'y)SJRzXQZ,a/ Z2,@yL$Tx-v]<02e_~k$UqjfY[-j2>g_amq?HsM~lLu;A:%]@o+' );
define( 'NONCE_KEY',        '?7cRAP_*<eDFh#@Wo%)k}Omv|SM2gDCm9cjmU^:ki.l2uqZU%Y5^1+4<HCe[Iolg' );
define( 'AUTH_SALT',        ':krY(kMP=%T}I<_r(Rqz-n1:.TbmfG=r8Cm,o5h`SYy$WnCkD^:xx@/(L{c9xEG@' );
define( 'SECURE_AUTH_SALT', '!o[w@ /sM?M.5k)s}9=>+Rtd]mp B8Shh&Fhp2^PFQFqAeHa(b@K@n,&R8QQQ1Al' );
define( 'LOGGED_IN_SALT',   '?PI:2h#h]BCSU])<B4Y_wz=g+$*s^IQTeV|0qCVQP9N0aaG:qeR955DMSou&Nw<.' );
define( 'NONCE_SALT',       ':@H_+dT{pPEx4F8<6AFya6I_^;i$I]@KY:B&[aUMML>?Ru6BPy0?EA5u!D-V!H]V' );

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
