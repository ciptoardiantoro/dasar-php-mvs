<?php

require_once __DIR__ . '/../vendor/autoload.php';

use ProgramerZamanNow\Belajar\php\MVC\App\Router;
use ProgramerZamanNow\Belajar\php\MVC\Controller;
use ProgramerZamanNow\Belajar\php\MVC\Controller\HomeController;

Router::add('GET', '/', HomeController::class, 'index');
Router::add('GET', '/hello', HomeController::class, 'hello');
Router::add('GET', '/world', HomeController::class, 'world');
Router::add('GET', '/about', HomeController::class, 'about');

Router::run();
