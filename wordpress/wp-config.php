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
define( 'DB_USER', 'wpuser' );

/** Database password */
define( 'DB_PASSWORD', 'J-fI*[SFLuls!rzL' );

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
define( 'AUTH_KEY',         '3(sIv0>xuK^v/o^8ai,ub^,CX~o=[8(oT_yj]$7v`R/hah(nx1w6ByChB}Iq/:)G' );
define( 'SECURE_AUTH_KEY',  'sb8Ab$i=U(pEh=ZmjsVy<%lGY;?kzm5aDm2%aYnUd?n2eyrKf.;v`6s[_4(N:jFP' );
define( 'LOGGED_IN_KEY',    '0d;l~QKi^Xc1T{sR)?n.4yIUNSHU`HMexM_Z`E<J8t14~p:?+;Sbh.;I75bi?)tf' );
define( 'NONCE_KEY',        'h8k+_Tg;Q}-0[!7$7,bWnnub^@](EHPP%bvQtInAf{eu<=vM0n_RPXU@)QJG2lQT' );
define( 'AUTH_SALT',        '>vQx8>9%*(b/8oLx!pc)if1cjWu1KnL}i-TY>Yu/_;j%]Rh!GSy`9ev,GjZcDG-5' );
define( 'SECURE_AUTH_SALT', '-1Vn=3q^akMEY#KKH6O}K?3P:q@?70V}auu6RYk<]j#,&ZI6K7q+;>2g1}c83W-b' );
define( 'LOGGED_IN_SALT',   'P)XqVbrXsYu=}f}s20Z~bFj?J`<$S:=lK} m,Mn#q!w^^Z[X&~,@7VUA?(BBiKh;' );
define( 'NONCE_SALT',       'A%i94YHdr{0z,5X!;$}[l>n{#Z( (i}qeS)KQq!6Q,;hzm]BD,.w5!iQlwrV@T8K' );

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
