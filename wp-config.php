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
define( 'DB_NAME', 'akai_games' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'Nicolas9698' );

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
define( 'AUTH_KEY',         'R3~>]7CR,lNk PBenTr4H9K@* 6@^;.Lpp}?*]/6L3x+,kn;G,}C#0>O5@(-:HYY' );
define( 'SECURE_AUTH_KEY',  '3/fw84|^qI4UJ05-/Ft6XMc8y9)>(*R$@Y;k>njlaTkW6&2n_B9,ahUN[$5]v|=T' );
define( 'LOGGED_IN_KEY',    'M*qReFYpCc9G&&~*^ b[LCjuX`aqglde.F[*5e35|xCHZ5WVtezpsG&QJ/(ix+G#' );
define( 'NONCE_KEY',        '?6Sd~h<^f?-Whop!>s}_IEk<=AG2ve~?F7YvHc/C~(Z>d1 h&Ba?@2`U%QxH.=Dx' );
define( 'AUTH_SALT',        'TgoS$+URx^i^zq|L)iA`/Lh<8+v/^:Wrc:|y=|@85rT*6k7NHlBwVYHP5. H*#[(' );
define( 'SECURE_AUTH_SALT', 'Q1P0p4h <r_mG~GF`RJ?DB%>9Y|ml_f*QLY{#Oes_2Xt7`y;gu?$K[Sy|c6Tz9Hi' );
define( 'LOGGED_IN_SALT',   '.JNDx/x{5WQaUA|(K-LhM2ju!p=1a]1w5w2g!nb:qN,;M!}vZ2A{kg;Fxkq$a=oP' );
define( 'NONCE_SALT',       'G~MEI!;mxDt.?_h?s`/+c@0v2*B>T97wM20=N*!>lceB9=x%hU29]t!RC0VeQ^#?' );

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
define( 'FS_METHOD', 'direct' );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
