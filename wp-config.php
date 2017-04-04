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
define('DB_NAME', 'tintuc247');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'dE6 ximqgCy@p$6P>;cGreEV0]^Q5dJ-*Y1($bflTk7}10]t]cE;!;eGxIc)j-&Q');
define('SECURE_AUTH_KEY',  '_z d#)<xl{^[L=(Z9[O$7eD W+KT}=1D)/6k|?SieJtCbkI?~I9mXR%7)_yhWU 8');
define('LOGGED_IN_KEY',    'P6s-8)=!i2.x3a@sPHH$)b</d$?}fC^WpzKt0UR9gByZ}uVy7{RAN|Q: tBB;B-$');
define('NONCE_KEY',        'RPj{Bgt28<<4LQ(*)wu6ESm&WZ|>K{ivv=:Ls%WPCIYiC}q1mMk`=IcJz1pe.5qB');
define('AUTH_SALT',        'io~[2OGomIHguGP]v`yn+&JGSk9n=Ybj~lN,6>!Rl-y,wR,15/W;mzs=uZ(5UYNH');
define('SECURE_AUTH_SALT', ' 9e&l[3}J9v7VUu4>-E^J>n-0-fmR0+6|fbQ]vzvUs<~UvyXu$g$2EL7]L!:(wDS');
define('LOGGED_IN_SALT',   'D|UA?W5BGA4O#[y^Lv6TFS!YPIi=^{ ?QOuzXi*llln)c+ah,)@F+,l|%R|K1G8h');
define('NONCE_SALT',       '25L2!r+|vGUO@c7l>U0/:HZIWjQmcY5ckllUm?*zwoDI-[~|m2b7;LozoxP$y)&L');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'bt_';

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
