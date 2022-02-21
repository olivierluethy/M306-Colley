<?php
require 'core/bootstrap.php';

$routes = [
	'/colley/home' => 'ColleyController@index',
	'/colley/bilanz' => 'ColleyController@bilanz',
	'/colley/kontouebersicht' => 'ColleyController@kontouebersicht',
	'/colley/journaleintrag' => 'ColleyController@journaleintrag',

	/* Routes for login and registration */
	'/colley/loginRegister' => 'ColleyController@loginRegister',
	'/colley/login' => 'ColleyController@login',
	'/colley/register' => 'ColleyController@register',
	'/colley/logout' => 'ColleyController@logout',
];

$db = [
	'name'     => 'colley',
	'username' => 'root',
	'password' => '',
];

$router = new Router($routes);
$router->run($_GET['url'] ?? '');