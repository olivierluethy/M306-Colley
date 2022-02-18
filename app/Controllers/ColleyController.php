<?php

class ColleyController
{
	/* Die Welcome Seite */
	public function index()
	{
		$hello = 'Viel Spass beim Programmieren!';
		
		require 'app/Views/welcome.view.php';
	}

	/* Damit man sich einloggen kann */
	public function login()
	{
		require 'app/Views/login.view.php';
	}

	/* Damit man sich ausloggen kann */
	public function logout()
	{
		require 'app/Views/logout.view.php';
	}

	/* Damit man sich registrieren kann */
	public function register()
	{
		require 'app/Views/register.view.php';
	}

	public function config(){
        require 'app/Views/config.php';
    }

}