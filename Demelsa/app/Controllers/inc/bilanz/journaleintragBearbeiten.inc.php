<?php

if(isset($_POST['id']) && isset($_POST['datum']) && isset($_POST['soll']) && isset($_POST['haben']) && isset($_POST['betrag'])):
    if(!empty($_POST['id']) && !empty($_POST['datum']) && !empty($_POST['soll']) && !empty($_POST['haben']) && !empty($_POST['betrag'])):
        $id_journal = $_POST['id'];
        $datum_journal = $_POST['datum'];
        $soll_journal = $_POST['soll'];
        $haben_journal = $_POST['haben'];
        $betrag_journal = $_POST['betrag'];
        $update = new ColleyJournal(
            false,
            htmlspecialchars($_POST['datum']),
            htmlspecialchars($_POST['soll']),
            htmlspecialchars($_POST['haben']),
            htmlspecialchars($_POST['betrag']),
            false,
            false
        );
        $id = $_POST['id'];
        $update->updateJournal($id);
    else:
        $error = 'Es gab ein Problem';
    endif;
else:
    $error = 'Es gab keine Daten';
endif;

$journal = (new ColleyJournal)->getAll();
foreach($journal as $item):
    $journalID[] = $item['journalId'];
    $datum[] = $item['datum'];
    $soll[] = $item['soll'];
    $haben[] = $item['haben'];
    $betrag[] = $item['betrag'];
endforeach;

$konto = (new ColleyKonto)->getAll();
foreach($konto as $data):
    $kontoId[] = $data['kontoId'];
    $kontoNr[] = $data['kontoNr'];
    $kontoName[] = $data['kontoName'];
endforeach;

