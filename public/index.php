<?php

/**
 * DARI PATH INFO LANGSUNG KE FILE (TIDAK MENGGUNAKAN CLASS ROUTER)
 */

// $path = "/index";
// if (isset($_SERVER['PATH_INFO'])) {
//     $path = $_SERVER['PATH_INFO'];
// }

// require_once __DIR__ . "/../app/View" . $path . ".php";


require_once __DIR__ . "/../vendor/autoload.php";

use Andromeda\Belajar\PHP\MVC\App\Router;
use Andromeda\Belajar\PHP\MVC\Controller\HomeController;
use Andromeda\Belajar\PHP\MVC\Controller\ProductController;
use Andromeda\Belajar\PHP\MVC\Middleware\AuthMiddleware;

Router::add('GET', '/products/([0-9a-zA-Z]*)/categories/([0-9a-z-A-Z]*)', ProductController::class, 'categories');

Router::add('GET', '/', HomeController::class, 'index');
Router::add('GET', '/hello', HomeController::class, 'hello', [AuthMiddleware::class]);
Router::add('GET', '/world', HomeController::class, 'world', [AuthMiddleware::class]);
Router::add('GET', '/about', HomeController::class, 'about');

Router::run();