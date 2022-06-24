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

// Custom code Edit

define('WP_HOME','https://mehfilva.com');
define('WP_SITEURL','https://mehfilva.com');

// ** MySQL settings - You can get this info from your web host ** //

/** The name of the database for WordPress */

define( 'DB_NAME', 'justcod1_mehfilva_live' );



/** MySQL database username */

define( 'DB_USER', 'justcod1_mehfilva_live_user' );



/** MySQL database password */

define( 'DB_PASSWORD', 'pNgQ#1RNrtSi' );



/** MySQL hostname */

define( 'DB_HOST', 'localhost' );



/** Database Charset to use in creating database tables. */

define( 'DB_CHARSET', 'utf8mb4' );
define('WP_MEMORY_LIMIT','256M');
@ini_set('upload_max_size' , '256M' );

/** The Database Collate type. Don't change this if in doubt. */

// define( 'DB_COLLATE', '' );



/**#@+

 * Authentication Unique Keys and Salts.

 *

 * Change these to different unique phrases!

 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}

 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.

 *

 * @since 2.6.0

 */

define( 'AUTH_KEY',         'ERxblp<f-6tgNmru(Uf2x)1,0*!,9+`cL}Bk2;,,Q &|DVY8s$ !NQ&U`^F$0c9=' );

define( 'SECURE_AUTH_KEY',  '1Z@T^+a{Eviu];@/?YKn@`9$/KG| /Hy+qP+S0oj-PLhd(@9*mrb+TD>0Dg)?TJw' );

define( 'LOGGED_IN_KEY',    'l2&W|Zl:e;S!nd7><.49U;B%2X:j@[W=Tv0!538<H<vgZ.KW.A}V2MLVKYhwsg9O' );

define( 'NONCE_KEY',        '<2UWf.*]OIS)v#wG(x?Go#qu7QM>MaJI$)AGN,kQ-*1m6hc=yvmRyM#Yz`Qgj;$}' );

define( 'AUTH_SALT',        'V`=bR#kd|i!Q33X**msQzk?fJxB6D(6xQ+1kwH,C4H?agmk<k9&|hy.6|BeOUP{5' );

define( 'SECURE_AUTH_SALT', 'Bfx&kIFGrV5qt|5biz1GJ_O[uN^< 6&Is?j[NAycfmI.[t&W;E`Y?n_~<K.Q,&<l' );

define( 'LOGGED_IN_SALT',   '0%(`6Pd CiO@W^LEMO=7Q(48DfuDA40t_6~8^ws9}=Z|nF@5Pr3MEa?R1.@LArAx' );

define( 'NONCE_SALT',       '^}loGF[:%!/TC[;Y2reh[caqgG-EB^^ejkq7ry*ge?`:s4B~&ePOgh|0l,4B7yWW' );



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

define( 'WP_DEBUG', true );



/* That's all, stop editing! Happy publishing. */



/** Absolute path to the WordPress directory. */

if ( ! defined( 'ABSPATH' ) ) {

	define( 'ABSPATH', __DIR__ . '/' );

}



/** Sets up WordPress vars and included files. */

require_once ABSPATH . 'wp-settings.php';

