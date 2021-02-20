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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'XHDabd34571' );

/** MySQL hostname */
define( 'DB_HOST', 'node29890-env-1142459.es-1.axarnet.cloud' );

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
define( 'AUTH_KEY',         'I`8LsviD;Tx;X#|jg)84)R-x&Yixogqq1q+N^Do8VpMMfCQHy:ULsxi7N>U7>S$:' );
define( 'SECURE_AUTH_KEY',  'E7t|y_@&F4qhU_ikH3tG5i/C1KCxnX*+Mx$O85jDHc`}=K~_}mf87;qb$ $(~eMN' );
define( 'LOGGED_IN_KEY',    'g9.[z&u$]G5;H0oFvV8iNAT|L&9eX=Y9QhRr>5+J2w9yZQPzEPU-Val?GH>c)pW0' );
define( 'NONCE_KEY',        '[EDPc1{E37.h?zX$&6uK@i p{!Ml(6w)4a0e8UXVW&*og;eW_k+5{A&NUtW4>pQy' );
define( 'AUTH_SALT',        'KfgA[qoquH!<|ZrCi=j;I09Z`s^ZU|B$:7ue:2%=`xDT!5Z#`(_tODq.`!CEl:^b' );
define( 'SECURE_AUTH_SALT', '`0U2#~o6b!WQ~_C-MTnm+q(OGzZOdJ}KDH};ez(=ix7lp_?Hz;p57q}Az^B2Ob-8' );
define( 'LOGGED_IN_SALT',   'b3>k~D>kcfUh_9>xV;L{7K5)D9A>^iHB-vU#%Kn?o2y7xzL,kqg)K)z*L+y#q0`x' );
define( 'NONCE_SALT',       'BrRNAV|qV[#!4`KCU/jjD]N7n$2O{txKhV:)d~!duRN9@3{X3)DZVd`z!8)lG])i' );

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
