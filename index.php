<?php
require 'core/bootstrap.php';

$routes = [
	'/colley/home' => 'ColleyController@index',
	
	/* Routes for login and registration */
	'/colley/login' => 'ColleyController@index',
	'/colley/logout' => 'ColleyController@index',
	'/colley/register' => 'ColleyController@index',
];

$db = [
	'name'     => 'colley',
	'username' => 'root',
	'password' => '',
];

$router = new Router($routes);
$router->run($_GET['url'] ?? '');