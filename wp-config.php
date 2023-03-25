<?php

define('DB_NAME', 'trendnewsai');

define('DB_USER', 'root');

define('DB_PASSWORD', '');

define('DB_HOST', '127.0.0.1');

define('DB_CHARSET', 'utf8');

define('DB_COLLATE', '');

define('AUTH_KEY', 'SASkjqMCxnQnI39pnQlIhjJ4vjd21VT9');
define('SECURE_AUTH_KEY', 'PWGvjRszJpD5Y0t8zUCe9MPJ5hkqsooz');
define('LOGGED_IN_KEY', '4K5LWZTw8xrVKyl0P46Rek5NpwCuFpLH');
define('NONCE_KEY', 's9vHodcGIZylqMvdXxWtf7h8MhleiPQt');
define('AUTH_SALT', 'rFBAwhQA9o5forsGFcmFcXQgU6zWvz2T');
define('SECURE_AUTH_SALT', 'xkhfxppXBonti8ziW7cFzbDIGAGNJrkE');
define('LOGGED_IN_SALT', 'ry4BdYNNpELdrQKHyqEiaks3GIIQiX0o');
define('NONCE_SALT', 'zDOQ5O8wkgHXK4as0hOHUNVMGLI12OBT');

$table_prefix = 'wp_';

define('WP_DEBUG', false);

if (!defined('ABSPATH')){
	define('ABSPATH', __DIR__.'/');
}

require_once ABSPATH . 'wp-settings.php';

