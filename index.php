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

	/* Um Emails zu versenden und Passwort zurücksetzen */
	'email_versenden' => 'ColleyController@email_versenden',
	'passwortZurueckEmailSeite' => 'ColleyController@passwortZurueckEmailSeite',
	'passwort_zuruecksetzen' => 'ColleyController@passwort_zuruecksetzen',

	/* Routes for login and registration */
	'loginRegister' => 'ColleyController@loginRegister',
	'login' => 'ColleyController@login',
	'register' => 'ColleyController@register',
	'logout' => 'ColleyController@logout',

	/* Routes für Kalkulationen */
	'ek-erstellen' => 'ColleyController@ekertellen',
	'ek-berechnen' => 'ColleyController@ekberechnen',
	'ik-erstellen' => 'ColleyController@ikerstellen',
	'ik-berechnen' => 'ColleyController@ikberechnen',
	'vk-erstellen' => 'ColleyController@vkerstellen',
	'vk-berechnen' => 'ColleyController@vkberechnen',
];

$db = [
	'name'     => 'colley',
	'username' => 'root',
	'password' => '',
];

$router = new Router($routes);
$router->run($_GET['url'] ?? '');