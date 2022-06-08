<?php
class ColleyKonto
{
	public ?int $kontoId;
	public ?int $kontoNr;
	public ?string $kontoName;
	public ?string $kontoZweck;

	public $db;

	public function __construct($kontoNr = null, $kontoName = null, $kontoZweck = null)
	{
		$this->kontoNr = $kontoNr;
		$this->kontoName = $kontoName;
		$this->kontoZweck = $kontoZweck;

		$this->db = connectDatabase();
	}

	public function create()
	{
		$statement = $this->db->prepare('INSERT INTO `konto`
		(kontoNr, kontoName, kontoZweck)
		VALUES
		(:kontoNr, :kontoName, :kontoZweck)');

		$statement->bindParam(':kontoNr', $this->kontoNr, PDO::PARAM_INT);
		$statement->bindParam(':kontoName', $this->kontoName, PDO::PARAM_STR);
		$statement->bindParam(':kontoZweck', $this->kontoZweck, PDO::PARAM_STR);

		return $statement->execute();
	}

	public function getAll()
	{
		$statement = $this->db->prepare('SELECT * FROM `konto` ORDER BY `kontoNr` ASC');
		$statement->execute();

		return $statement->fetchAll();
	}

	public function getAllPlan()
	{
		$statement = $this->db->prepare('SELECT * FROM `kontenplan`');
		$statement->execute();

		return $statement->fetchAll();
	}
}