<?php
class Colley
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

	public function journaleintrag($datum, $haben, $soll, $betrag){
		$isValid = true;
        $datum = htmlspecialchars($_POST['datum']);
        $haben = htmlspecialchars($_POST['haben']);
        $soll = htmlspecialchars($_POST['soll']);
		$betrag = htmlspecialchars($_POST['betrag']);

		if ($isValid){
			$statement = $this->db->prepare('INSERT INTO journaleintrag (datum, haben, soll, betrag, fk_usersId) VALUES (:datum, :haben, :soll, :betrag, :fk_usersId)');
			$statement->bindParam(':datum', $datum, PDO::PARAM_STR);
			$statement->bindParam(':haben', $haben, PDO::PARAM_STR);
			$statement->bindParam(':soll', $soll, PDO::PARAM_STR);
			$statement->bindParam(':betrag', $betrag, PDO::PARAM_STR);
			$statement->bindParam(':fk_usersId', $_SESSION["id"], PDO::PARAM_STR);
			$statement->execute();
		}
		return $isValid;
	}

	public function neues_konto($kontonummer, $titel, $verwendungszweck){
		$isValid = true;
		$kontonummer = htmlspecialchars($_POST['kontonummer']);
        $titel = htmlspecialchars($_POST['titel']);
        $verwendungszweck = htmlspecialchars($_POST['verwendungszweck']);

		if ($isValid){
			$statement = $this->db->prepare('INSERT INTO konto (kontoNr, kontoName, kontoZweck) VALUES (:kontoNr, :kontoName, :kontoZweck)');
			$statement->bindParam(':kontoNr', $kontonummer, PDO::PARAM_STR);
			$statement->bindParam(':kontoName', $titel, PDO::PARAM_STR);
			$statement->bindParam(':kontoZweck', $verwendungszweck, PDO::PARAM_STR);
			$statement->execute();
		}
		return $isValid;
	}
}