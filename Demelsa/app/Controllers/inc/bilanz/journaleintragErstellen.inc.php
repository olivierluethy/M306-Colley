<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'):
    if(isset($_POST['date']) && isset($_POST['soll']) && isset($_POST['haben']) && isset($_POST['betrag'])):
        if(!empty($_POST['date']) && !empty($_POST['soll']) && !empty($_POST['haben']) && !empty($_POST['betrag'])):
            if($_POST['soll'] != $_POST['haben']):
                $createJournalEintrag = new ColleyJournal(
                    htmlspecialchars($_POST['date']),
                    htmlspecialchars($_POST['soll']),
                    htmlspecialchars($_POST['haben']),
                    htmlspecialchars($_POST['betrag'])
                );
                $createJournalEintrag->create();
            else:
                $error = 'Soll und Haben können nicht dasselbe Konto haben. Bitte wählen Sie zwei Konten.';
            endif;
        else:
            $error = 'Es gab ein Problem. Bitte füllen Sie alle Felder aus. Vielen Dank';
        endif;
    else:
        $error = 'Es gabe keine Daten';
    endif;
endif;