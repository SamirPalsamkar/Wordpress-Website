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
define( 'DB_NAME', 'portfolio' );

/** Database username */
define( 'DB_USER', 'admin2' );

/** Database password */
define( 'DB_PASSWORD', '05032000' );

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
define( 'AUTH_KEY',         'p{PKf&xwe8`gMdpl?*P3@85J+bwu+82T:eqF6/v()Ib[ *>5kR`#/k~-?UfXCh_D' );
define( 'SECURE_AUTH_KEY',  'S)Lgpw+A|vu5_JGjm:]X!!x]|tAx,=B7%JWPw>qtSkvm%apsPp3a,&KHxGbG t<e' );
define( 'LOGGED_IN_KEY',    '`lPu&b7W*a);_It`&o5V`-F>xvC}I8^]ev33_W5PFkFB/cIJ=slp6V_p(A8vAb#6' );
define( 'NONCE_KEY',        'z!KrgV{&cK-9siATKy-ymlC(@dv*YW#dN&^Rk3kLcJvM~?)60Z8O+oX!Im87Jl-+' );
define( 'AUTH_SALT',        'AOO;L2TL$S./Y%gQY{wB1`2C^sy(0-*~%7>=.>Qr7-oMkM$! w#SYDY_M[-a@jY4' );
define( 'SECURE_AUTH_SALT', '}kV:Klkc4[k74X:G_//uw6q|BTvnbO?$u2[T&&aG;km3^92+$uyC; ;a}-1pt(m3' );
define( 'LOGGED_IN_SALT',   'g;lR-q$A*q=k/[>6Z;$K#SK>NtdTN$FIaE4R{pf%0Jf-U{!+DysRm;H:5`i{x_?a' );
define( 'NONCE_SALT',       ':@H?Jq>2*Gz8>#Uq:6j{/qT#6?5LsneEnu;}dI$Z]P#%d-2SBTIs#=h~h*ve&jqd' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'sp_';

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
