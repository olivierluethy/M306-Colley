<?php
if((isset($_POST['kontoNr'])) && (isset($_POST['kontoName'])) && (isset($_POST['kontoZweck']))):
    if(!empty($_POST['kontoNr']) && !empty($_POST['kontoName']) && !empty($_POST['kontoZweck'])):
        $createKonto = new ColleyKonto(
            htmlspecialchars($_POST['kontoNr']),
            htmlspecialchars($_POST['kontoName']),
            htmlspecialchars($_POST['kontoZweck'])
        );
        $createKonto->create();
        header('Location: neues-Konto');
    else:
        $_SESSION['error'] = 'Es gab ein Problem. Bitte füllen Sie alle Felder aus. Vielen Dank.';
        header('Location: neues-Konto');
    endif;
else:
    $_SESSION['error'] = 'Es gab keine Daten';
    header('Location: neues-Konto');
endif;