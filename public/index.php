<?php 
// echo "Selamat Belajar PHP MVC"
/* 
PATH_INFO banyak digunakan untuk URL Routing.
Best Practice dalam framework-framework MVC biasanya hanya menggunakan 1 file php
sebagai gerbang masuk nya, dan menggunakan PATH_INFO sebagai informasi file apa
yang  harus kita load.
*/
// if (isset($_SERVER['PATH_INFO'])) {
//     echo $_SERVER['PATH_INFO'];
// } else {
//     echo "Tidak ada PATH_INFO";
// }

// $path =  '/index';
// if (isset($_SERVER['PATH_INFO'])) {
//     $path = $_SERVER['PATH_INFO'];
// }

// require __DIR__ . '/../app/View' . $path . '.php';

require_once __DIR__ . '/../vendor/autoload.php';

use ProgrammerZamanNow\Belajar\PHP\MVC\App\Router;

Router::add('GET', '/', 'HomeController', 'index');
Router::add('GET', '/login', 'UserController', 'login');
Router::add('GET', '/register', 'UserController', 'register');
Router::run();
?>