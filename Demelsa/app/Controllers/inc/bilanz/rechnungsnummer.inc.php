<?php
include('app/Controllers/inc/arrays/alle_journal.inc.php');

if($_SERVER['REQUEST_METHOD'] == 'POST'):
    if(isset($rechnungsnummer)):
        if(!empty($rechnungsnummer)):
            $insertRechnung = new ColleyJournal(
                false,
                false,
                false,
                false,
                htmlspecialchars($_POST['rechnungsnummer']),
                false
            );
            $insertRechnung->rechnung();
        else:
            $error = 'Es gibt ein Problem. Bitte füllen Sie alles aus.';
        endif;
    else:
        $error = 'Es gab keine Daten';
    endif;
endif;