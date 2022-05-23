<?php
if((isset($_POST['kontoNr'])) && (isset($_POST['kontoName'])) && (isset($_POST['kontoZweck']))):
    if((empty($_POST['kontoNr'])) && (empty($_POST['kontoName'])) && (empty($_POST['kontoZweck']))):
        header('Location: neues-konto?id=1');
    elseif((empty($_POST['kontoNr'])) && (!empty($_POST['kontoName'])) && (!empty($_POST['kontoZweck']))):
        header('Location: neues-konto?id=2');
    elseif((!emtpy($_POST['kontoNr'])) && ($empty($_POST['kontoName'])) && (!empty($_POST['kontoZweck']))):
        header('Location: neues-konto?id=3');
    elseif((!empty($_POST['kontoNr'])) && (!empty($_POST['kontoName'])) && (empty($_POST['kontoZweck']))):
        header('Location: neues-konto?id=4');
    endif;
endif;