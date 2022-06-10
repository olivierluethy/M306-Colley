<?php
require 'core/bootstrap.php';

$routes = [
	/* Routes für Grundseiten */
	'' => 'ColleyController@index',
	'home' => 'ColleyController@index',
	'neues-konto' => 'ColleyController@neuesKonto',
	'bilanz' => 'ColleyController@bilanz',
	'kalkulation' => 'ColleyController@kalkulation',
	'erfolgsrechnung' => 'ColleyController@erfolgsrechnung',
	'jahresabschluss' => 'ColleyController@jahresabschluss',

	/* Routes für Bilanz */
	'kontouebersicht' => 'ColleyController@kontouebersicht',
	'journaleintrag' => 'ColleyController@journaleintrag',
	'journaleintragBearbeiten' => 'ColleyController@journaleintragBearbeiten',
	'eintrag' => 'ColleyController@eintrag',
	'Rechnungsnummer' => 'ColleyController@Rechnungsnummer',

	/* Routes für Kalkulationen */
	'ek-erstellen' => 'ColleyController@ekerstellen',
	'ek-berechnen' => 'ColleyController@ekberechnen',
	'ik-erstellen' => 'ColleyController@ikerstellen',
	'ik-berechnen' => 'ColleyController@ikberechnen',
	'vk-erstellen' => 'ColleyController@vkerstellen',
	'vk-berechnen' => 'ColleyController@vkberechnen',
	'gk-erstellen' => 'ColleyController@gkerstellen',
	'gk-berechnen' => 'ColleyController@gkberechnen',

	/* Um Emails zu versenden und Passwort zurücksetzen */
	'email_versenden' => 'ColleyController@email_versenden',
	'passwortZurueckEmailSeite' => 'ColleyController@passwortZurueckEmailSeite',
	'passwort_zuruecksetzen' => 'ColleyController@passwort_zuruecksetzen',

	/* Routes for login and registration */
	'loginRegister' => 'ColleyController@loginRegister',
	'login' => 'ColleyController@login',
	'register' => 'ColleyController@register',
	'logout' => 'ColleyController@logout',
];

$db = [
	'name'     => 'colley',
	'username' => 'root',
	'password' => '',
];

$router = new Router($routes);
$router->run($_GET['url'] ?? '');