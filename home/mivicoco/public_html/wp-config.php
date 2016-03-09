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
define('WP_CACHE', true); //Added by WP-Cache Manager
define( 'WPCACHEHOME', '/home/mivicoco/public_html/home/mivicoco/public_html/wp-content/plugins/wp-super-cache/' ); //Added by WP-Cache Manager
/** The name of the database for WordPress */
define('DB_NAME', 'mivicoco_wrdp1');

/** MySQL database username */
define('DB_USER', 'mivicoco_wrdp1');

/** MySQL database password */
define('DB_PASSWORD', '7AwaZfqtX42TIm');

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
define('AUTH_KEY',         'ztNA88em012a<4ZR;k((~q:r=CWC2zL/nC1t4tH0;dfUf8$AEI3fPe^jV~Eqc7yYO2QoxI<:');
define('SECURE_AUTH_KEY',  '1S0uNZ(?(kTtZBhGQ;Lj@QPUlwLCq_6?RUU?fjrf\`k<xmQ_54~@/PF:~b8$8LcD3qB$|WFy6yiU');
define('LOGGED_IN_KEY',    '6@S~MWef(X!X;BA/\`fvwJ)qIpLaik(m;OVDCK;Fxt!#KXOuF4yQ^:C(w*3YlWEbI');
define('NONCE_KEY',        'T_aHv|\`*O<yQ-kXNnmMO444-NbvBaKXN_xH1k7n6nz7L|269EU72egnF#ZgGd8RbQ0)PAdFD^');
define('AUTH_SALT',        'D3hyGq\`KFZlcbtSw;$:;K:)XY|CO7)z|4uyAG!E3^pLdZVR0CJg0HP8hM@Z6z30b_DRO0!ZOX|Ku');
define('SECURE_AUTH_SALT', 'flEew^Qofr!1A4OgGcp<~6fHnbgVpoPYLDTw#)7671Y@v*gmG(lx*0S<r<');
define('LOGGED_IN_SALT',   'aTBGfzxuGl-Gd6ZbSu/)K7(D/jA1)>fXtlb5prspy5-U3p8*D*i:BBfv<k$>e5vM');
define('NONCE_SALT',       'LPu-~j:!4BKS:fNNti5L$CxSweWSrr0k)$6d>5x(u$QEZ;!(ffQANLPrf-U0P!y15ThE^5<lk');


/**#@-*/
define('AUTOSAVE_INTERVAL', 600 );
define('WP_POST_REVISIONS', 1);
define( 'WP_CRON_LOCK_TIMEOUT', 120 );
define( 'WP_AUTO_UPDATE_CORE', true );
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
add_filter( 'auto_update_plugin', '__return_true' );
add_filter( 'auto_update_theme', '__return_true' );
