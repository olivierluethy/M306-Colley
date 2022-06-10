<?php

if($_SERVER['REQUEST_METHOD'] == 'POST'):
    if((isset($_POST['kontoNr'])) && (isset($_POST['kontoName'])) && (isset($_POST['kontoZweck']))):
        if(!empty($_POST['kontoNr']) && !empty($_POST['kontoName']) && !empty($_POST['kontoZweck'])):
            if(in_array($_POST['kontoNr'], range('1000', '1999'))):
                $_POST['untergruppe'] = 'Aktive';
            endif;
            $createKonto = new ColleyKonto(
                htmlspecialchars($_POST['kontoNr']),
                htmlspecialchars($_POST['kontoName']),
                htmlspecialchars($_POST['kontoName']),
                htmlspecialchars($_POST['untergruppe']),
                false
            );
            $createKonto->create();
                else:
            $error = 'Es gab ein Problem. Bitte füllen Sie alle Felder aus. Vielen Dank.';
        endif;
    else:
        $error = 'Es gab keine Daten';
    endif;
endif;
