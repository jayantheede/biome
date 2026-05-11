<?php

/**
 * Laravel/Symfony style router for PHP built-in web server.
 * Run using: php -S localhost:8000 server.php
 */

$uri = urldecode(
    parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)
);

$publicPath = __DIR__ . '/public' . $uri;

// Serve static files correctly
if ($uri !== '/' && file_exists($publicPath) && is_file($publicPath)) {
    $extension = strtolower(pathinfo($publicPath, PATHINFO_EXTENSION));
    $mimeTypes = [
        'css'  => 'text/css',
        'js'   => 'application/javascript',
        'png'  => 'image/png',
        'jpg'  => 'image/jpeg',
        'jpeg' => 'image/jpeg',
        'gif'  => 'image/gif',
        'svg'  => 'image/svg+xml',
        'ico'  => 'image/x-icon',
        'woff' => 'font/woff',
        'woff2'=> 'font/woff2',
        'ttf'  => 'font/ttf',
        'json' => 'application/json',
        'pdf'  => 'application/pdf',
        'mp4'  => 'video/mp4'
    ];
    
    if (array_key_exists($extension, $mimeTypes)) {
        header('Content-Type: ' . $mimeTypes[$extension]);
    } else if (function_exists('mime_content_type')) {
        header('Content-Type: ' . mime_content_type($publicPath));
    }
    
    readfile($publicPath);
    return;
}

// Route all other requests to index.php
require_once __DIR__ . '/public/index.php';
