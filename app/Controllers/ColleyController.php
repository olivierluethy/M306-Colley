<?php

class ColleyController
{
	/* Die Welcome Seite */
	public function index()
	{	
        session_start();

		// Check if the user is logged in, if not then redirect him to login page
		if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
			header("location: loginRegister");
			exit;
		}

      	include("app/Views/sideNav.view.php");
		require 'app/Views/welcome.view.php';
	}

	/* Damit man sich ein- und ausloggen kann */
	public function loginRegister()
	{
		session_start();
		// Check if the user is already logged in, if yes then redirect him to index page
		if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
    		header("location: home");
    	exit;
}
		require 'app/Views/loginRegister.view.php';
	}

	/* Damit man sich ein- und ausloggen kann */
	/* Diese Seite enthält Sachen die angezeigt werden, sobald ein Fehler auftritt */
	public function login()
	{
		require 'app/Views/login.php';
	}

	/* Damit man sich ein- und ausloggen kann */
	/* Diese Seite enthält Sachen die angezeigt werden, sobald ein Fehler auftritt */
	public function register()
	{
		require 'app/Views/register.php';
	}

	/* Damit man sich ausloggen kann */
	public function logout()
	{
		require 'app/Views/logout.view.php';
	}

	/* Konfiguration für das Login */
	public function config(){
        require 'app/Views/config.php';
    }

    /* Einkaufskalkulation */
    public function einkaufskalkulation()
    {
        include 'app/Controllers/inc/Einkauf/ek-array.inc.php'; // Array für die for-Schlaufe
        require 'app/Views/einkaufskalkulation.view.php';
    }

    public function einkaufskalkulation_berechnen()
    {
        include 'app/Controllers/inc/Einkauf/ek-array.inc.php'; // Array für die for-Schlaufe
        include 'app/Controllers/inc/Einkauf/ek-berechnung.inc.php'; // Berechnungen
        require 'app/Views/ek-berechnen.view.php';
    }

	/* Interne Kalkulation */
	public function internekalkulation()
	{
		include 'app/Controllers/inc/Intern/ik-array.inc.php'; // Array für die for-Schlaufe
		require 'app/Views/internekalkulation.view.php';
	}

	public function internekalkulation_berechnen()
	{
		include 'app/Controllers/inc/Intern/ik-array.inc.php'; // Array für die for-Schlaufe
		include 'app/Controllers/inc/Intern/ik-berechnung.inc.php'; // Berechnungen
		require 'app/Views/ik-berechnen.view.php';
	}

	/* Verkaufskalkulation */
	public function verkaufskalkulation()
	{
		include 'app/Controllers/inc/Verkauf/vk-array.inc.php'; // Array für die for-Schlaufe
		require 'app/Views/verkaufskalkulation.view.php';
	}

	public function verkaufskalkulation_berechnen()
	{
		include 'app/Controllers/inc/Verkauf/vk-array.inc.php'; // Array für die for-Schlaufe
		include 'app/Controllers/inc/Verkauf/vk-berechnung.inc.php'; // Berechnungen
		require 'app/Views/vk-berechnen.view.php';
	}
	
	/* Bilanz */
	public function bilanz(){
		session_start();

		// Check if the user is logged in, if not then redirect him to login page
		if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
			header("location: loginRegister");
			exit;
		}

      	include("app/Views/sideNav.view.php");
		require 'app/Views/bilanz.view.php';
	}

	/* Kontoübersicht */
	public function kontouebersicht(){
		session_start();

		// Check if the user is logged in, if not then redirect him to login page
		if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
			header("location: loginRegister");
			exit;
		}

      	include("app/Views/sideNav.view.php");
		require 'app/Views/kontouebersicht.view.php';
	}

	/* Journaleinträge */
	public function journaleintrag(){
		session_start();

		// Check if the user is logged in, if not then redirect him to login page
		if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
			header("location: loginRegister");
			exit;
		}

      	include("app/Views/sideNav.view.php");
		require 'app/Views/journaleintrag.view.php';
	}

	/* Um ein neues Konto hinzufügen zu können */
	public function neues_konto(){
		session_start();

		// Check if the user is logged in, if not then redirect him to login page
		if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
			header("location: loginRegister");
			exit;
		}

		include("app/Views/sideNav.view.php");
		require 'app/Views/neues_konto.view.php';
	}

	public function rechnungsnummer(){
		session_start();

		// Check if the user is logged in, if not then redirect him to login page
		if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
			header("location: loginRegister");
			exit;
		}

      	include("app/Views/sideNav.view.php");
		require 'app/Views/rechnungsnummer.view.php';
	}

	public function erfolgsrechnung(){
		session_start();

		// Check if the user is logged in, if not then redirect him to login page
		if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
			header("location: loginRegister");
			exit;
		}

      	include("app/Views/sideNav.view.php");
		require 'app/Views/erfolgsrechnung.view.php';
	}

	public function kalkulation(){
		session_start();

		// Check if the user is logged in, if not then redirect him to login page
		if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
			header("location: loginRegister");
			exit;
		}

      	include("app/Views/sideNav.view.php");
		require 'app/Views/kalkulation.view.php';
	}
}