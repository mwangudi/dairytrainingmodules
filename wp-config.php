<?php

//Begin Really Simple SSL session cookie settings
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
//END Really Simple SSL
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
define( 'DB_NAME', 'eugeneny_tide2' );
/** MySQL database username */
define( 'DB_USER', 'eugeneny_tide2' );
/** MySQL database password */
define( 'DB_PASSWORD', 'DnBP27nw%f^t4GXNnJM4Y!cU' );
/** MySQL hostname */
define( 'DB_HOST', 'localhost' );
/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );
/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );
define('WP_HOME','https://e-dairytrainingmodules.africa'); // no trailing slash
define('WP_SITEURL','https://e-dairytrainingmodules.africa'); // no trailing slash
/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '=8nK gAL`zIUbG/YkNUD],;,ffb1|O(85esstnn0bJi>bw&}M$`RdHEFe1}mLUj(' );
define( 'SECURE_AUTH_KEY',  '~NcLx! RR_#huc9~Y{.HXn^1ork5f{g$TlL,n?XgO]@:t_Ytg|A 8C:2~$gJ9d)Y' );
define( 'LOGGED_IN_KEY',    'v=xtTLK&vY_`Z~G==L]M<M(u#hY:~1E%dLrZR_9kp`2q9B dPv<%y2bn4xF}(]QX' );
define( 'NONCE_KEY',        'q_yQek9`/@OxuTwocN>.+=JOn3$O4o)@!&@&sc<iP+! V<SuUoaeMh=<dp@@v;bh' );
define( 'AUTH_SALT',        '`qKTp5@y.%$30o|B5g+%]cxTgWPn>|uj`T%/3i9M_dVq;i)zxA%8P@d%KFAd`c>o' );
define( 'SECURE_AUTH_SALT', 'Mr_F8qz0D)$ja2Oz$)J9o?tcmuxm&hh$OjQ;3A3zy+u~?R4=NB7PD.FRWJVUk o,' );
define( 'LOGGED_IN_SALT',   'a1K,z;#pwd`L>` /7<AEC9EUxd#kwLV}:<2|G3iKXH5/5X&[Q8f}[K0/[F?LeGXy' );
define( 'NONCE_SALT',       '`U V9tKCoaqu3 FZPBkAG_(<EkX2RVQu{AL/  pRSZS(h2IvrjT~r-Cd,56%YQWq' );
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
