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
define('DB_NAME', 'ktumovacz2');


/** MySQL database username */
define('DB_USER', 'ktumova.cz');


/** MySQL database password */
define('DB_PASSWORD', '2gGL8uBv');


/** MySQL hostname */
define('DB_HOST', '127.0.0.1');


/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');


/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'LKd3NIBFPqZO_nNzGKth0Wi$>hM^-Zcr^)?#IPUb U$`efO}?Ol0JVc0z8y_wv07');

define('SECURE_AUTH_KEY',  '9yI1 p1YW9*r]= z/:2L<mDS#+F&[w;?dy8&S-fy^]`qMC6)Vv5j4svi8sdS`q0i');

define('LOGGED_IN_KEY',    'l|T$l}dNmM[:EO%}WNNA_zq[&]G6nA?@ZL(R;X.l@8Jq-9=wuD4nx/Ibv83 N/Ue');

define('NONCE_KEY',        ')ZWJ:*Gv>9}=1h=xyCa$BhJ@,F96/mRCy>I#gF&(uMu@UfKY 6gJ?H/LjO:D_}~X');

define('AUTH_SALT',        'HHP{>J2l3:I-RZ5Af1U-o]Ye`#H3:YNQx:`^b{$:w|ovzO!FFr1f/k|~yagAG.U5');

define('SECURE_AUTH_SALT', 'p5BxJ}Sn*w^pVr}3,ML{OoS#UFtg_CuhGY%eaWhIB_1vA<EN?V5!+Ok#5Eg^JKk)');

define('LOGGED_IN_SALT',   'p[@O$_q1|(seZ5 a=S#oT;{Kl}pz09~x2mznijFA7^ngjn^T4P=)s`zpm=|*(mN1');

define('NONCE_SALT',       'c2%@[0k5.u}DP,meX9{@Lf+grLXXPY|Ga`Kr?tIfz-}M&q~CWJR-T(A?%HC9WhUC');


/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'em_';


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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
