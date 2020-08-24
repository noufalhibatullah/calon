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
define( 'DB_NAME', 'moufal' );

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
define( 'AUTH_KEY',         '8a3UGttF)$_WyldT/j/l[2=IEt^19aLAaf_TKcq{|0v+]8~n_WM}t$)3*z?Uj4C2' );
define( 'SECURE_AUTH_KEY',  '5zPBa}4}X:jd/w8n8{<-T,r-T8:/pg5md9;Rb0i`wZCt+8)zN2vceH~lkaO,V19<' );
define( 'LOGGED_IN_KEY',    'B:O9v|y985E%j2R,yAB!-Rd*GJ0AkS3]nP-Z#iwsL)sFjeZ!MmGn%D3xQ57(sdAz' );
define( 'NONCE_KEY',        '6Rvrn|Ays!}%pJ3b~gC)I9,B76C_]r:84NP3zg>emHo!&-2UX?2a+>Bl9.l9}7D~' );
define( 'AUTH_SALT',        'Y`~>Z9Zt~{wG /=e8fE~TfxH_z<[1QB_Xnq$G{9_Lk/cq:-#B{g:G@yBuwlB+%}k' );
define( 'SECURE_AUTH_SALT', 'oE^Xn)Z^3NKpp6$LlN=EFt&gtvh2Kproy $)n{=JTkV|[,+%;u2.eVHJmJ3%|]96' );
define( 'LOGGED_IN_SALT',   '(OG2v!wG25AjBvPG(%2,[aw(~8^Dc./1f#S-%/d?dYQJDs-mV&_dqPkxsn7*RQSA' );
define( 'NONCE_SALT',       '!w?`a 8U;F%&Zbyqd61Ol%Og&Y1ZJ@q;/`a90A.mB&4&wfXoj[LC$zw-t1A!T*.~' );

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
