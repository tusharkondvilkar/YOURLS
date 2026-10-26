<?php
// MySQL Settings from Render Environment Variables
define( 'YOURLS_DB_USER',   getenv('YOURLS_DB_USER') ?: 'yourls' );
define( 'YOURLS_DB_PASS',   getenv('YOURLS_DB_PASS') ?: 'password' );
define( 'YOURLS_DB_NAME',   getenv('YOURLS_DB_NAME') ?: 'yourls' );
define( 'YOURLS_DB_HOST',   getenv('YOURLS_DB_HOST') ?: 'localhost:3306' );
define( 'YOURLS_DB_PREFIX', getenv('YOURLS_DB_PREFIX') ?: 'yourls_' );

// Site URL
define( 'YOURLS_SITE', rtrim(getenv('YOURLS_SITE') ?: 'https://yourls-1-lk35.onrender.com', '/') );

// Public shortening
define( 'YOURLS_PRIVATE', false );
define( 'YOURLS_UNIQUE_URLS', true );
define( 'YOURLS_COOKIEKEY', getenv('YOURLS_COOKIEKEY') ?: 'random_key_must_be_32_characters_long_min' );

// Admin user
$yourls_user_passwords = [
    (getenv('YOURLS_ADMIN_USER') ?: 'admin') => (getenv('YOURLS_ADMIN_PASSWORD') ?: 'AdminPass123!'),
];

define( 'YOURLS_URL_CONVERT', 36 );
define( 'YOURLS_DEBUG', false );
$yourls_reserved_URL = [ 'porn', 'faggot', 'sex', 'nigger', 'fuck', 'cunt', 'dick' ];
