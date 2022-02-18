<?php

class ColleyController
{
	/* Die Welcome Seite */
	public function index()
	{
		$hello = 'Viel Spass beim Programmieren!';
		
		require 'app/Views/welcome.view.php';
	}

	/* Damit man sich ein- und ausloggen kann */
	public function loginRegister()
	{
		require 'app/Views/loginRegister.view.php';
	}

	/* Damit man sich ausloggen kann */
	public function logout()
	{
		require 'app/Views/logout.view.php';
	}

	public function config(){
        require 'app/Views/config.php';
    }

}