<?php

class ColleyController
{
// Login
	// Login or Register Page
	public function loginRegister()
	{
		// Initialize the session
		session_start();

		// Check if the user is already logged in, if yes then redirect him to index page
		if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
			header("location: home");
			exit;
		}
		require 'app/Views/Login/loginRegister.view.php';
	}
	// Login-System
	public function login()
	{
		$pdo = connectDatabase();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		
		require 'app/Views/Login/login.php';
	}
	// Logout-System
	public function logout()
	{
		require 'app/Views/Login/logout.view.php';
	}
	// Register-System
	public function register()
	{
		$pdo = connectDatabase();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		require 'app/Views/Login/register.php';
	}
	public function email_versenden()
	{
		// Initialize the session
		session_start();

		$pdo = connectDatabase();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		
		$_SESSION["code"] = random_int(100000, 999999);

		if($_SESSION["emailDirection"]){
			$Colley = new ColleyLogin();

			$Colley -> email();

			require("app/Views/Login/mailer.php");

			/* Email wird versendet */
			sendMail();
		}else {
			header("location: loginRegister");
		}
	}

	public function checkIfCodeIsCorrect()
	{
		// Initialize the session
		session_start();

		$pdo = connectDatabase();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		if($_SERVER["REQUEST_METHOD"] == "POST"){
			$Colley = new ColleyLogin();

			$code = $Colley -> CheckEnteredCode();
			$code = $code->fetchAll();
			
			if($code[0][0] == $_POST["codeFromUser"]){
				require 'app/Views/Login/passwort_zuruecksetzen.view.php';
			}else{
				require 'app/Views/Login/wrongCodeForPasswordBack.view.php';
			}
		}else {
			header("location: loginRegister");
		}
	}

	public function passwort_zuruecksetzen()
	{
		// Initialize the session
		session_start();

		$pdo = connectDatabase();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		require 'app/Views/Login/passwordReset.php';
	}
// Welcome
	public function index()
	{
		// Initialize the session
        session_start();

		$pdo = connectDatabase();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		// Check if the user is logged in, if not then redirect him to login page
		if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
			header("location: loginRegister");
			exit;
		}
		// SeitenNavigation
		include('app/Controllers/inc/heading.inc.php');
		include('app/Views/sideNav.view.php');
		// welcome
		include('app/Controllers/inc/arrays/welcome.inc.php');
		require('app/Views/welcome.view.php');
	}
// Neues Konto
	// Neues Konto erstellen
		public function neuesKonto()
		{
			session_start();
			// SeitenNavigation
			include('app/Controllers/inc/heading.inc.php');
			include('app/Views/sideNav.view.php');
			// neues Konto
			include('app/Controllers/inc/arrays/neuesKonto.inc.php');
			include('app/Controllers/inc/bilanz/kontoErstellen.inc.php');
			require('app/Views/neuesKonto.view.php');
		}
	
// Bilanz
	// Übersicht
		public function bilanz()
		{
			// SeitenNavigation
			include('app/Controllers/inc/heading.inc.php');
			include('app/Views/sideNav.view.php');
			// Bilanz
			include('app/Controllers/inc/arrays/bilanz.inc.php');
			require('app/Views/bilanz.view.php');
		}
	// Kontoübersicht
		public function kontouebersicht()
		{
			// SeitenNavigation
			include('app/Controllers/inc/heading.inc.php');
			include('app/Views/sideNav.view.php');
			// Kontoübersicht
			include('app/Controllers/inc/arrays/alle_konten.inc.php');
			require('app/Views/bilanz/kontouebersicht.view.php');
		}
	// Journaleintrag
		public function journaleintrag()
		{
			// SeitenNavigation
			include('app/Controllers/inc/heading.inc.php');
			include('app/Views/sideNav.view.php');
			// Journaleintrag
			include('app/Controllers/inc/bilanz/journaleintrag.inc.php');
			include('app/Controllers/inc/bilanz/journaleintragErstellen.inc.php');
			require('app/Views/bilanz/journaleintrag.view.php');
		}

		// Journaleintrag bearbeiten
		public function journaleintragBearbeiten()
		{
			// SeitenNavigation
			include('app/Controllers/inc/heading.inc.php');
			include('app/Views/sideNav.view.php');
			// Journaleintrag Bearbeiten
			include('app/Controllers/inc/bilanz/journaleintragBearbeiten.inc.php');
			require('app/Views/bilanz/journaleintragBearbeiten.view.php');
		}

		// Journaleintrag
		public function eintrag()
		{
			include('app/Controllers/inc/bilanz/eintrag.inc.php');
			require('app/Views/bilanz/eintrag.view.php');
		}

	// Rechnungsnummer
		public function rechnungsnummer()
		{
			// SeitenNavigation
			include('app/Controllers/inc/heading.inc.php');
			include('app/Views/sideNav.view.php');
			// Rechnungsnummer
			include('app/Controllers/inc/bilanz/rechnungsnummer.inc.php');
			require('app/Views/bilanz/rechnungsnummer.view.php');
		}

// Erfolgsrechnung
		public function erfolgsrechnung()
		{
			// SeitenNavigation
			include('app/Controllers/inc/heading.inc.php');
			include('app/Views/sideNav.view.php');
			// Erfolgsrechnung
			include('app/Controllers/inc/arrays/erfolgsrechnung.inc.php');
			require('app/Views/Erfolgsrechnung/erfolgsrechnung.view.php');
		}

// Jahresabschluss
		public function jahresabschluss()
		{
			// SeitenNavigation
			include('app/Controllers/inc/heading.inc.php');
			include('app/Views/sideNav.view.php');
			// Jahresabschluss
			require('app/Views/Jahresabschluss/jahresabschluss.view.php');
		}

//Kalkulationen
	// Kalkulationsübersicht
		public function kalkulation()
		{
			include('app/Controllers/inc/heading.inc.php');
			include('app/Views/sideNav.view.php');
			include('app/Controllers/inc/arrays/kalkulation.inc.php');
			require('app/Views/kalkulation.view.php');
		}
	// Einkaufskalkulation
		public function ekerstellen()
		{
			include 'app/Controllers/inc/Einkauf/ek-array.inc.php'; // Array für die for-Schlaufe
			require 'app/Views/Kalkulationen/ek-erstellen.view.php';
		}

		public function ekberechnen()
		{
			include 'app/Controllers/inc/Einkauf/ek-array.inc.php'; // Array für die for-Schlaufe
			include 'app/Controllers/inc/Einkauf/ek-berechnung.inc.php'; // Berechnungen
			if($Katalogpreis == 0 || $Menge == 0):
				require 'app/Controllers/inc/Einkauf/ek-fehler.inc.php';
			else:
				require 'app/Views/Kalkulationen/ek-berechnen.view.php';
			endif;
		}

    // Interne Kalkulation
		public function ikerstellen()
		{
			include 'app/Controllers/inc/Intern/ik-array.inc.php'; // Array für die for-Schlaufe
			require 'app/Views/Kalkulationen/ik-erstellen.view.php';
		}

		public function ikberechnen()
		{
			include 'app/Controllers/inc/Intern/ik-array.inc.php'; // Array für die for-Schlaufe
			include 'app/Controllers/inc/Intern/ik-berechnung.inc.php'; // Berechnungen
			if($Menge == 0 || $EinstandspreisFr == 0): 
				require 'app/Controllers/inc/Intern/ik-fehler.inc.php';
			else:
				require 'app/Views/Kalkulationen/ik-berechnen.view.php';
			endif;
		}

    // Verkaufskalkulation
		public function vkerstellen()
		{
			include 'app/Controllers/inc/Verkauf/vk-array.inc.php'; // Array für die for-Schlaufe
			require 'app/Views/Kalkulationen/vk-erstellen.view.php';
		}

		public function vkberechnen()
		{
			include 'app/Controllers/inc/Verkauf/vk-array.inc.php'; // Array für die for-Schlaufe
			include 'app/Controllers/inc/Verkauf/vk-berechnung.inc.php'; // Berechnungen
			if($Menge == 0 || $EinstandspreisFr == 0):
				require 'app/Controllers/inc/Verkauf/vk-fehler.inc.php';
			else:
				require 'app/Views/Kalkulationen/vk-berechnen.view.php';
			endif;
		}

    // Gesamtkalkulation
		public function gkerstellen()
		{
			include 'app/Controllers/inc/Gesamt/gk-array.inc.php'; // Array für die for-Schlaufe
			require 'app/Views/Kalkulationen/gk-erstellen.view.php';
		}

		public function gkberechnen()
		{
		include 'app/Controllers/inc/Gesamt/gk-array.inc.php'; // Array für die for-Schlaufe
		include 'app/Controllers/inc/Gesamt/gk-berechnung.inc.php'; // Berechnungen
		if($Menge == 0 || $eKatalogpreisFr == 0):
			require 'app/Controllers/inc/Gesamt/gk-fehler.inc.php';
		else:
			require 'app/Views/Kalkulationen/gk-berechnen.view.php';
		endif;
		}

	// ende
// ende
	}