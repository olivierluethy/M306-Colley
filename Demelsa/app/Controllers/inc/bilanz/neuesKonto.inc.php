<?php
if(isset($_GET['id'])):
    $fehler = $_GET['id'];
    if($fehler == 1):
        $error = 'Uups, da ist wohl was verloren gegangen.<br>Bitte geben Sie sowohl eine <b><i>Kontonummer</i></b>, einen <b><i>Kontotitel</i></b> und einen <b><i>Verwendungszweck</i></b> für das Konto an.<br>Vielen Dank.';
    elseif($fehler == 2):
        $error = 'Uups, da ist wohl was verlorengegangen.<br>Bitte geben Sie eine <b><i>Kontonummer</i></b> ein.<br>Vielen Dank.';
    endif;
endif;