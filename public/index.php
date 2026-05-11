<?php

/**
 * Renu Biome - Main Entry Point
 */

// Basic error reporting for development
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Define base path
define('BASE_PATH', dirname(__DIR__));

// Autoloader (simple version for MVP)
spl_autoload_register(function ($class) {
    $classPath = str_replace('\\', '/', $class);
    $file = BASE_PATH . '/src/' . $classPath . '.php';
    // Remove "App/" prefix if using namespaces mapped to src
    $file = str_replace('/src/App/', '/src/', $file);
    if (file_exists($file)) {
        require $file;
    }
});

// Load Config
require BASE_PATH . '/src/Config/Database.php';

// Initialize Router
$router = new \Core\Router();

// Frontend Routes
$router->get('/', 'HomeController@index');
$router->get('/shop', 'PageController@shop');
$router->get('/cart', 'PageController@cart');
$router->get('/about', 'PageController@about');
$router->get('/rd', 'PageController@rd');
$router->get('/sustainability', 'PageController@sustainability');
$router->get('/products', 'ProductController@index');
$router->get('/technology', 'PageController@technology');
$router->get('/innovation-lab', 'PageController@innovationLab');
$router->get('/climate-solutions', 'PageController@climateSolutions');
$router->get('/contact', 'ContactController@index');
$router->get('/investor-relations', 'PageController@investors');
$router->get('/blog', 'BlogController@index');
$router->get('/careers', 'PageController@careers');
$router->get('/global-presence', 'PageController@globalPresence');
$router->get('/product-registration', 'ProductController@registration');
$router->get('/admin', 'AdminController@dashboard');

// Legacy Redirects
$router->get('/admin/login', function() {
    header('Location: /login', true, 301);
    exit;
});
$router->get('/login/admin', function() {
    header('Location: /login', true, 301);
    exit;
});

// Dispatch
$router->get('/login', 'AdminController@login');
$router->get('/admin/dashboard', 'AdminController@dashboard');
$router->get('/admin/products', 'AdminController@products');

// SaaS Routes
$router->get('/pricing', 'PageController@pricing');
$router->get('/signup', 'PageController@signup');

// API Routes
$router->post('/api/auth/login', 'Api\AuthController@login');
$router->get('/api/cms/pages', 'Api\CmsController@getPages');
$router->post('/api/cms/pages', 'Api\CmsController@savePage');
$router->post('/api/ai/generate', 'Api\AiController@generateContent');
$router->post('/api/ai/seo-score', 'Api\AiController@analyzeSeo');

$router->dispatch($_SERVER['REQUEST_URI'], $_SERVER['REQUEST_METHOD']);
