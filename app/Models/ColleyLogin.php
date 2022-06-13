<?php
class ColleyLogin
{
    public $db;

    public function __construct()
    {
        $this->db = connectDatabase();
    }

    public function email(){
		$statement = $this->db->prepare('UPDATE `users` SET tmp_login_code = :tmp_login_code WHERE email = :email');
		$statement->bindParam(':tmp_login_code', $_SESSION["code"], PDO::PARAM_STR);
		$statement->bindParam(':email', $_SESSION["emailDirection"], PDO::PARAM_STR);
		$statement->execute();
		return $statement;
	}

    public function CheckEnteredCode(){
		$statement = $this->db->prepare('SELECT tmp_login_code FROM users WHERE email = :email');
		$statement->bindParam(':email', $_SESSION["emailDirection"], PDO::PARAM_STR);
		$statement->execute();
		return $statement;
	}
}