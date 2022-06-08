<?php
if(isset($_GET['id'])):
        $id = $_GET['id'];
endif;

$id = $id + 1;
$eintrag = (new ColleyJournal)->getEintrag($id);

$journal = $eintrag['journalId'];
$datum = $eintrag['datum'];
$soll = $eintrag['soll'];
$haben = $eintrag['haben'];
$betrag = $eintrag['betrag'];

$konto = (new ColleyKonto)->getAll();

foreach($konto as $data):
    $kontoId[] = $data['kontoId'];
    $kontoNr[] = $data['kontoNr'];
    $kontoName[] = $data['kontoName'];
endforeach;