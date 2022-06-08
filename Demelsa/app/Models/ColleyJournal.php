<?php
class ColleyJournal
{
    public ?string $journalId;
    public ?string $datum;
    public ?int $soll;
    public ?int $haben;
    public ?string $betrag;

    public $db;

    public function __construct($journalId = null, $datum = null, $soll = null, $haben = null, $betrag = null, $rechnungNr = null, $rechnung = null)
    {
        $this->journalId = $journalId;
        $this->datum = $datum;
        $this->soll = $soll;
        $this->haben = $haben;
        $this->betrag = $betrag;
        $this->rechnungNr = $rechnungNr;
        $this->rechnung = $rechnung;

		$this->db = connectDatabase();
    }

	public function create()
	{
		$statement = $this->db->prepare('INSERT INTO `journal`
		(datum, soll, haben, betrag)
		VALUES
		(:date, :soll, :haben, :betrag)');

		$statement->bindParam(':date', $this->datum, PDO::PARAM_STR);
		$statement->bindParam(':soll', $this->soll, PDO::PARAM_INT);
		$statement->bindParam(':haben', $this->haben, PDO::PARAM_INT);
		$statement->bindParam(':betrag', $this->betrag, PDO::PARAM_STR);

		return $statement->execute();
	}

    public function getAll()
    {
        $statement = $this->db->prepare('SELECT *FROM `journal`');
        $statement->execute();

        return $statement->fetchAll();
    }

    public function getEintrag($id)
    {
        $statement = $this->db->prepare('SELECT * FROM `journal` WHERE journalId = :id');
        $statement->bindParam(':id', $id, PDO::PARAM_INT);
        $statement->execute();

        return $statement->fetch();
    }

    public function updateJournal($id)
    {
        $statement = $this->db->prepare('UPDATE `journal` SET
        datum = :datum,
        soll = :soll,
        haben = :haben,
        betrag = :betrag
        WHERE journalId = :id');

        $statement->bindParam(':datum', $this->datum, PDO::PARAM_STR);
        $statement->bindParam(':soll', $this->soll, PDO::PARAM_INT);
        $statement->bindParam(':haben', $this->haben, PDO::PARAM_INT);
        $statement->bindParam(':betrag', $this->betrag, PDO::PARAM_STR);

        $statement->bindParam(':id', $id, PDO::PARAM_INT);

        return $statement->execute();
    }

    public function rechnung()
    {
        $statement = $this->db->prepare('UPDATE `journal` SET rechnungsnummer = :rechnungsnummer, rechnung = :rechnung WHERE journalId = :journalNr');

        $statement->bindParam(':rechnungsnummer', $this->rechnungsnummer, PDO::PARAM_INT);
        $statement->bindParam(':rechnung', $this->rechnung, PDO::PARAM_STR);
        $statement->bindParam(':journalNr', $this->journalId, PDO::PARAM_INT);

        return $statement->execute();
    }
}