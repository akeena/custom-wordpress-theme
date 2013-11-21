<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'customwp');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'z==B^Pv1N1XZNS-{Q;MxsGkP[we6MA=]J/>MQ&m9pALT7t/Ru%WO[thu/0>GhG2]');
define('SECURE_AUTH_KEY',  'FYW&S9f+H,gei,gI^_[{=F-80>WMne{O8,)+q~vvz=MQkq^k`&s2D4}8sCGdwN98');
define('LOGGED_IN_KEY',    'Rvvwbd+|iSs2?8`QM.K+mV7m|v~~;9PZbua?7lHIxE|O-K<$U{3z[--M-%f0a0YF');
define('NONCE_KEY',        '.yh+RG5rWqYLnXD,DT;Licf|ESk-8xiBGRAn)FNDaET8#!Odi|on9|:wM$Ut57Q3');
define('AUTH_SALT',        'Sa]] 9@w|]1^;$#|q2CFL{gt1BWr+x+Y,)MQiAJ*]h=O-wRx#|6PC0- BkCJ=(m,');
define('SECURE_AUTH_SALT', ':lE&3eSX_[S:puA98bLmE^rXu/G=X!>#(;11,&+et6*,9;8!;VW&m_,*w[J.OYlV');
define('LOGGED_IN_SALT',   'sf7=80(@5,}C>k`HV~g=Sh/k6X>PD$iBf@>R37c*|s6WHfUJzLOl=@g#GYV|[W?E');
define('NONCE_SALT',       'Z!NSS-pk!6.Q+2;>(8EBtP{u*:qU^/?3Sd)io[X;dII=/?`k0yg0Hd@/@PyQf,qa');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

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
