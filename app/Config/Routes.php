<?php

use App\Controllers\Admin\AuthController;
use App\Controllers\Admin\HomeController;
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('/dashboard', 'Admin\HomeController::dashboard');

$routes->group('admin', ['namespace' => 'Admin'], function (RouteCollection $routes) {
  $routes->get('dashboard', [HomeController::class, 'dashboard'], ['as' => 'admin.dashboard']);

  $routes->group('auth', function (RouteCollection $routes) {
    $routes->get('login', [AuthController::class, 'login'], ['as' => 'login']);
    $routes->get('sign-up', [AuthController::class, 'signUp']);
    $routes->get('logout', [AuthController::class, 'logout']);
  });
});