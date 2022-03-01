<?php
require 'core/bootstrap.php';

$routes = [
	/* Routes für Grundseiten */
	'' => 'ColleyController@index',
	'home' => 'ColleyController@index',
	'bilanz' => 'ColleyController@bilanz',
	'kontouebersicht' => 'ColleyController@kontouebersicht',
	'journaleintrag' => 'ColleyController@journaleintrag',
	'neues-konto' => 'ColleyController@neues_konto',
	'rechnungsnummer' => 'ColleyController@rechnungsnummer',
	'erfolgsrechnung' => 'ColleyController@erfolgsrechnung',
	'kalkulation' => 'ColleyController@kalkulation',

	/* Routes for login and registration */
	'loginRegister' => 'ColleyController@loginRegister',
	'login' => 'ColleyController@login',
	'register' => 'ColleyController@register',
	'logout' => 'ColleyController@logout',

	/* Routes für Kalkulationen */
	'ek-erstellen' => 'ColleyController@einkaufskalkulation',
	'ek-berechnen' => 'ColleyController@einkaufskalkulation_berechnen',
	'ik-erstellen' => 'ColleyController@internekalkulation',
	'ik-berechnen' => 'ColleyController@internekalkulation_berechnen',
	'vk-erstellen' => 'ColleyController@verkaufskalkulation',
	'vk-berechnen' => 'ColleyController@verkaufskalkulation_berechnen',
];

$db = [
	'name'     => 'colley',
	'username' => 'root',
	'password' => '',
];

$router = new Router($routes);
$router->run($_GET['url'] ?? '');