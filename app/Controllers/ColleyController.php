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
		include('app/Controllers/inc/welcome.inc.php');
		require 'app/Views/welcome.view.php';
	}

	/* Die Mail wird innert dieser Funktion versenden */
	public function email_versenden(){
		session_start();
		
		$_SESSION["code"] = random_int(100000, 999999);

		if($_SERVER["REQUEST_METHOD"] == "POST"){
			$_SESSION["emailDirection"] = $_POST['email'];

			$title = '';
        	$pdo = connectDatabase();
        	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $statement = $pdo->prepare('UPDATE `users` SET tmp_login_code = :tmp_login_code WHERE email = :email');
            $statement->bindParam(':tmp_login_code', $_SESSION["code"], PDO::PARAM_STR);
			$statement->bindParam(':email', $_SESSION["emailDirection"], PDO::PARAM_STR);
            $statement->execute();

			require("app/Views/mailer.php");
			sendMail();
		}else {
			header("location: loginRegister");
		}
	}

	public function checkIfCodeIsCorrect(){
		if($_SERVER["REQUEST_METHOD"] == "POST"){
			session_start();

			$title = '';
			$pdo = connectDatabase();
			$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

			$statement = $pdo->prepare('SELECT tmp_login_code FROM users WHERE email = :email');
			$statement->bindParam(':email', $_SESSION["emailDirection"], PDO::PARAM_STR);
			$statement->execute();
			$code = $statement->fetchAll();
			
			if($code[0][0] == $_POST["codeFromUser"]){
				require 'app/Views/passwort_zuruecksetzen.view.php';
			}else{
				require 'app/Views/wrongCodeForPasswordBack.view.php';
			}
		}else {
			header("location: loginRegister");
		}
	}

	public function password_zuruecksetzen(){
		session_start();
		$title = '';
		$pdo = connectDatabase();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		require 'app/Views/passwordReset.php';
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
		$title = '';
		$pdo = connectDatabase();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		
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

    // Einkaufskalkulation
    public function ekerstellen()
    {
        include 'app/Controllers/inc/Einkauf/ek-array.inc.php'; // Array für die for-Schlaufe
        require 'app/Views/ek-erstellen.view.php';
    }

    public function ekberechnen()
    {
        include 'app/Controllers/inc/Einkauf/ek-array.inc.php'; // Array für die for-Schlaufe
        include 'app/Controllers/inc/Einkauf/ek-berechnung.inc.php'; // Berechnungen
        if($Katalogpreis == 0 || $Menge == 0):
            require 'app/Controllers/inc/Einkauf/ek-fehler.inc.php';
        else:
            require 'app/Views/ek-berechnen.view.php';
        endif;
    }

    // Interne Kalkulation
    public function ikerstellen()
    {
        include 'app/Controllers/inc/Intern/ik-array.inc.php'; // Array für die for-Schlaufe
        require 'app/Views/ik-erstellen.view.php';
    }

    public function ikberechnen()
    {
        include 'app/Controllers/inc/Intern/ik-array.inc.php'; // Array für die for-Schlaufe
        include 'app/Controllers/inc/Intern/ik-berechnung.inc.php'; // Berechnungen
        if($Menge == 0 || $EinstandspreisFr == 0): 
            require 'app/Controllers/inc/Intern/ik-fehler.inc.php';
        else:
            require 'app/Views/ik-berechnen.view.php';
        endif;
    }

    // Verkaufskalkulation
    public function vkerstellen()
    {
        include 'app/Controllers/inc/Verkauf/vk-array.inc.php'; // Array für die for-Schlaufe
        require 'app/Views/vk-erstellen.view.php';
    }

    public function vkberechnen()
    {
        include 'app/Controllers/inc/Verkauf/vk-array.inc.php'; // Array für die for-Schlaufe
        include 'app/Controllers/inc/Verkauf/vk-berechnung.inc.php'; // Berechnungen
        if($Menge == 0 || $EinstandspreisFr == 0):
            require 'app/Controllers/inc/Verkauf/vk-fehler.inc.php';
        else:
            require 'app/Views/vk-berechnen.view.php';
        endif;
    }

    // Gesamtkalkulation
    public function gkerstellen()
    {
        include 'app/Controllers/inc/Gesamt/gk-array.inc.php'; // Array für die for-Schlaufe
        require 'app/Views/gk-erstellen.view.php';
    }

    public function gkberechnen()
    {
    include 'app/Controllers/inc/Gesamt/gk-array.inc.php'; // Array für die for-Schlaufe
    include 'app/Controllers/inc/Gesamt/gk-berechnung.inc.php'; // Berechnungen
    if($Menge == 0 || $eKatalogpreisFr == 0):
        require 'app/Controllers/inc/Gesamt/gk-fehler.inc.php';
    else:
        require 'app/Views/gk-berechnen.view.php';
    endif;
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