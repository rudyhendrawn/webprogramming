<?php
include_once 'config/database.php';
include_once 'middleware/Router.php';
include_once 'controllers/UsersController.php';

$database = new Database();
$db = $database->getConnection();

// $usersController = new UsersController($db);
// echo $usersController->readUsers();

// Setup the router
$router = new Router();
$router->register('GET', '/api/users', [new UsersController($db), 'readUsers']);

// Dispatch the request
$router->dispatch($_SERVER['REQUEST_METHOD'], parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));