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
define('DB_NAME', 'solstudio');

/** MySQL database username */
define('DB_USER', 'bacnice');

/** MySQL database password */
define('DB_PASSWORD', '123456');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         'qQ(R~0i] {FRvuU,OYdf|DYt_@j9j^l!IfWZ:b-fjw4.M]&PO/W!t6I/wo}_g@-,');
define('SECURE_AUTH_KEY',  '-VW8)fdu]Ccpt$jiPk,aRJ$@l!d}IcPyRx0lW.C@) p_mR#nac4foGE|z0*Dnt(H');
define('LOGGED_IN_KEY',    'hm)t|`}Ed?NF E),bgS&-*oZrnD8)8hbFKyN,NYUeZSu`NivSm5f2yz5ZE$6U8ad');
define('NONCE_KEY',        ';L2W{/i5.GXfY]v|#fcW|YaHw9`T1@An)uTr.vU}X#w&ib&f3LCc7gEG55~t*y%7');
define('AUTH_SALT',        'R6`|-pg;_CZ>NWT1/8~+u DR;xl#@f5u!F$2H+$=WU,nRIO^psPt&~1U15sPIzm+');
define('SECURE_AUTH_SALT', 'S0Mp^YNH[7V8*7p9h9mi#Z[&l??g>3+6;0KOr``J-u@>=GT;p`bVta4<<x2RNa=%');
define('LOGGED_IN_SALT',   'zVJLa66T]ah<rl,5SagY3(]yr~6+4Z|IPFO^pHn_D(?d>hP@1efCZFSW?0G1o~c9');
define('NONCE_SALT',       '>Ct;.>$,nSfXtAmxeb5$2J>k=1:M10QBYiU6<6*B?C8kuaWJ;>_@8kNEW%Rix?U-');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
