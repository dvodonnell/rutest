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
define('DB_NAME', 'redurbantest');

/** MySQL database username */
define('DB_USER', 'redurbantest');

/** MySQL database password */
define('DB_PASSWORD', 'HXCEffd7GA2uQLKh');

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
define('AUTH_KEY',         'Rw0:bC^1W-Jg&8gidfoCxFI:8e=l=PHAo|Wf=y{_~bzH_!!er!GRKbbg`mA]Qf<I');
define('SECURE_AUTH_KEY',  'DV`mNL-}6@IUK`$&??4eHXhfc]OV*-VCC+B41%[ @o6w`4|m<e_[OU-;O=Ie-N2b');
define('LOGGED_IN_KEY',    '[&M6lxL!UH j}!T0X >?wm~QAiVHc Y/+Ok1heDi%6ww=M=g93Z&EKhw|+8yybTC');
define('NONCE_KEY',        'ZJE{~rbbbvfmp/m-#3~UnoPOlF{|%n_ JYHg?nu2q.TVcPA{&o.g-xYeYp{@ik??');
define('AUTH_SALT',        'c9a0}(m+|s=:;!Y50@34]bsDr=QD+oLj#vhX1R&Oe:U9huTI= d+?8z{Y;|pZ.TR');
define('SECURE_AUTH_SALT', 'S,R+KtUBnW-SbxQlImbtX_VI0Mdda(Rr?|N%sC^o~mwl^|QPa:8W@Zh<D+?rHUa=');
define('LOGGED_IN_SALT',   'XXA,??BA476C#S3Q|J?=`FK:S&w;INF$#*4pra|g7UrW8pq1~@~U9B{[ZBVyvsL4');
define('NONCE_SALT',       '&Oz0ut3@[j C|D7{P@(}s::[F+j$-S;[3V2,3g6}pJ=;:KjzE])uN.Ui-+8ykBO8');

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
