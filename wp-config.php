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
define('DB_NAME', 'i2409533_wp1');

/** MySQL database username */
define('DB_USER', 'i2409533_wp1');

/** MySQL database password */
define('DB_PASSWORD', 'D[Srv1AiAaBm4ua5Z].46(@7');

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
define('AUTH_KEY',         'BNoeHX4KRE3hktV5YVqeWaPu2S55uEPKr0n18KwnB6FcnySydbikJ9HS1REVKBoI');
define('SECURE_AUTH_KEY',  'HotMMPm7wMs4giO4z7hNrgNr1QJKHzfm9VUIcYCunXXNr7jC5MAXGU7uQzca7kqV');
define('LOGGED_IN_KEY',    '84ZYXKRMMg4qnliynegz6erTxxNI60Buuw8VUHV2Apl8YoHi1i7FASLPJvhFAKrt');
define('NONCE_KEY',        'uOWb4OXYNnkxCFu1viB1ID8KYBBPvETfw5oKJzyO37ILm4hbIbcsZ0HuTAY8v039');
define('AUTH_SALT',        'Y5SMFkd5oQtnnYMrXukSh2wJQNcnlHzDY0ckEAn8bjPOxYFFMPJkdDANdasW23tT');
define('SECURE_AUTH_SALT', 'd38aDriASo8B25ELiT8Z5fn51hGULwT6udthAJlTqquREymxxk2Z4EwNKXLO1uh9');
define('LOGGED_IN_SALT',   'QQc5eevB5C0T17QtfC8u0ki5ALSpcit7sRCwz7HiLzkJmIep7Hf6ejQBW63LsnS6');
define('NONCE_SALT',       'GqLrkcK8uy2RyjtvYLiSyMyki5y8CJunTUd5TnBXbIoPc9Yh36zdMWXFqQzgA4Z1');

/**
 * Other customizations.
 */
define('FS_METHOD','direct');define('FS_CHMOD_DIR',0755);define('FS_CHMOD_FILE',0644);
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');

/**
 * Turn off automatic updates since these are managed upstream.
 */
define('AUTOMATIC_UPDATER_DISABLED', true);


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
