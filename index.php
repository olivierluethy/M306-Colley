<?php
require 'core/bootstrap.php';

$routes = [
	'home' => 'ColleyController@index',
	'bilanz' => 'ColleyController@bilanz',
	'kontouebersicht' => 'ColleyController@kontouebersicht',
	'journaleintrag' => 'ColleyController@journaleintrag',

	/* Routes for login and registration */
	'loginRegister' => 'ColleyController@loginRegister',
	'login' => 'ColleyController@login',
	'register' => 'ColleyController@register',
	'logout' => 'ColleyController@logout',

	/* Routes für Kalkulationen */
	'einkaufskalkulation' => 'ColleyController@einkaufskalkulation',
	'ek-berechnen' => 'ColleyController@einkaufskalkulation_berechnen',
];

$db = [
	'name'     => 'colley',
	'username' => 'root',
	'password' => '',
];

$router = new Router($routes);
$router->run($_GET['url'] ?? '');