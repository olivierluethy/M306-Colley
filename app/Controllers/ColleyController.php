<?php

class ColleyController
{
	/* Die Welcome Seite */
	public function index()
	{	
		require 'app/Views/welcome.view.php';
	}

	/* Damit man sich ein- und ausloggen kann */
	public function loginRegister()
	{
		require 'app/Views/loginRegister.view.php';
	}

	/* Damit man sich ein- und ausloggen kann */
	public function login()
	{
		require 'app/Views/login.php';
	}

	/* Damit man sich ein- und ausloggen kann */
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
    public function einkaufskalkulation(){
        include 'app/Controllers/inc/Einkauf/einkaufskalkulation.inc.php'; /* Array für die for-Schlaufe */
        require 'app/Views/einkaufskalkulation.view.php';
    }

    public function einkaufskalkulation_berechnen()
    {
        include 'app/Controllers/inc/Einkauf/einkaufskalkulation.inc.php'; /* Array für die for-Schlaufe */
        include 'app/Controllers/inc/Einkauf/einkaufskalkulation-berechnung.inc.php'; /* Berechnung der Kalkulation selber */
        require 'app/Views/ek-berechnen.view.php';
    }

	/* Bilanz */
	public function bilanz(){
		require 'app/Views/bilanz.view.php';
	}

	/* Kontoübersicht */
	public function kontouebersicht(){
		require 'app/Views/kontouebersicht.view.php';
	}

	/* Journaleinträge */
	public function journaleintrag(){
		require 'app/Views/journaleintrag.view.php';
	}

	/* Um ein neues Konto hinzufügen zu können */
	public function neues_konto(){
		require 'app/Views/neues_konto.view.php';
	}
}