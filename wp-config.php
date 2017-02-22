<?php
// Requiring environment specific parameters
require_once dirname( __FILE__ ) . '/parameters.php';

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
define('AUTH_KEY',         '}0F{#OEO_Fns:E<sOHV|I)GIh@092a6+~]c:E#TTAm1EP7=[nr?A|CZh[7VI@q3F');
define('SECURE_AUTH_KEY',  'Yx%nDfW*u1(Mf^}s#q{#HPo@5=[|,kkRC8%VLLAN[$4^rh [^!nV)KGh?Gwt? ;[');
define('LOGGED_IN_KEY',    'FPnWs(?3:<jNmC&0uvd5,4hrAsSN76B`0lY5kT9%&aij_H~Vq)8~;ylpK}g,$bVG');
define('NONCE_KEY',        '#Lq<Q<FVLH}tBYenLp~Di6Rg4&/]NC0P2xw0u7vg?TI@Y^d!mJ`P0;@5_W*tE~|P');
define('AUTH_SALT',        'F3a1/+h`_,bw7lF5e.)JB$~@;HdRaSBG9GRYqKJ12pzT){%H:5vr;LWBmo`m3n2l');
define('SECURE_AUTH_SALT', '( r83qtO9@:KjT(o&Z;TlQc$-dLD+yY$,QSvl__p5Z;|dL%nenn8kV,RW{ZV<YY$');
define('LOGGED_IN_SALT',   'G.sj,C5^n!{^Iw-ZR!uK $!f}L&mwg`k`[k17H0l_|TN|{4@:Gy%w~V-5F}D_^|E');
define('NONCE_SALT',       '2(hiX>W(Bc-;!aBcqvrH@U[@a.jJYH!-MBi9|K|@!TYqm#gy,0#.pzD/8wQk-f`U');

define( 'WP_CONTENT_DIR', dirname(__FILE__) . '/var' );

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

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
