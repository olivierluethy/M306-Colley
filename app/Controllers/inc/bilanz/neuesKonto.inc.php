<?php
if(isset($_GET['id'])):
    $fehler = $_GET['id'];
    if($fehler == 1):
        $error = '<div class="fehler">Uups, da ist wohl was verloren gegangen.<br>Bitte geben Sie sowohl eine <b><i>Kontonummer</i></b>, einen <b><i>Kontotitel</i></b> und einen <b><i>Verwendungszweck</i></b> für das Konto an.<br>Vielen Dank.</div>';
    elseif($fehler == 2):
        $error = '<div class="fehler">Uups, da ist wohl was verloren gegangen.<br>Bitte geben Sie eine <b><i>Kontonummer</i></b> ein.<br>Vielen Dank.</div>';
    elseif($fehler == 3):
        $error = '<div class="fehler">Uups, da ist wohl was verloren gegangen.<br>Bitte geben Sie einen <b><i>Kontotitel</i></b> ein.<br>Vielen Dank.</div>';
    elseif($fehler == 4):
        $error = '<div class="fehler">Uups, da ist wohl was verloren gegangen.<br>Bitte geben Sie einen <b><i>Verwendungszweck</i></b> ein.<br>Vielen Dank.</div>';
    elseif($fehler == 5):
        $konto = new ColleyKonto(
            htmlspecialchars($_POST['kontoNr']),
            htmlspecialchars($_POST['kontoName']),
            htmlspecialchars($_POST['kontoZweck'])
        );
        $konto->create();
        $toll = 'Es hat geklappt.<br>Wollen Sie noch ein Konto erstellen?<br>Wenn nicht, geht es hier zurück zur Willkommensseite.<a href"welcome"><button class="btn back">Zurück</button></a>';
    endif;
endif;