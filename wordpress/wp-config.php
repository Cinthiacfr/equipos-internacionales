<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'bZ+a+Hd9R]:/UVvIPa<Hp*fQQ1+*_/=ZHQcsSE0{JluSq93[n2yg?tmhpW[):e;#');
define('SECURE_AUTH_KEY',  '(o[>3y)xv_tItT<d/$)q0e+by-qz*V_|H9_5r $U*-<+j#|1Yn h]2d}m.K>18<j');
define('LOGGED_IN_KEY',    ' 3N$z9a8bk}d0,}-sxoO+~{),>AO}^~h^9(<hMd#sO}=;=?R>/u~HT+}5~f}[~|o');
define('NONCE_KEY',        'M[LmQ;}jGO5vH/Is4tVSmgLv0!?uCt3ftOgV?Yh]HT jvp-PsH-i8LO?[^^/hX_p');
define('AUTH_SALT',        '78N}PwfI4TGJyO3E`GfvPC+` n;$:9Xds7Y4#-Px8$.[}O.(vSM0KqMK<gezHyYU');
define('SECURE_AUTH_SALT', 'sW>#:Oo$wp!]Ta4k=i|JTO+6}aI f^+$mVvHAebjYWyUzWg!Ic+yM-SMO2XPY5NO');
define('LOGGED_IN_SALT',   'FB+s{&wsV_0wXa#^^QynH6-<I.qM;@XEW,y^<wX#LJmRtBydnE-NK5UXp=o|B1FZ');
define('NONCE_SALT',       'WOpMmaCT`hf0@PTT_fNc _a(1|vhXj8(:E8r`d=N]a!pl#;a;{B4:jDzkI5ejS,`');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
