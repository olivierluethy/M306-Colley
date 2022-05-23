<?php

class ColleyController
{
// Welcome
	public function index()
	{
		include("app/Controllers/inc/heading.inc.php");
		include('app/Views/sideNav.view.php');
		include('app/Controllers/inc/arrays/welcome.inc.php');
		require('app/Views/welcome.view.php');
	}
// Neues Konto
	public function neuesKonto()
	{
		include('app/Controllers/inc/heading.inc.php');
		include('app/Controllers/inc/bilanz/neuesKonto.inc.php');
		include('app/Views/sideNav.view.php');
		require('app/Views/neuesKonto.view.php');
	}
	public function kontoErstellen()
	{
		include('app/Controllers/inc/bilanz/kontoErstellen.inc.php');
	}
// Bilanz
	// Übersicht
		public function bilanz()
		{
			include('app/Controllers/inc/heading.inc.php');
			include('app/Views/sideNav.view.php');
			include('app/Controllers/inc/arrays/bilanz.inc.php');
			require('app/Views/bilanz.view.php');
		}
	// Kontoübersicht
		public function kontouebersicht()
		{
			include('app/Controllers/inc/heading.inc.php');
			include('app/Views/sideNav.view.php');
			require('app/Views/bilanz/kontouebersicht.view.php');
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