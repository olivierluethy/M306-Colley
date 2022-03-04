<?php include 'app/Controllers/inc/Verkauf/vk-kontrolle.inc.php'; ?>
<html lang="de">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="public/css/style.css">
    <title>Colley</title>
    <h3>Uups!</h3>
    <h3>Da hat es ein Problem gegeben.</h3>
    <h3>Wir haben leider keinen Abschluss von Hogwars der Schule für Zauberei und Hexerei</h3>
    <div class="bild"><img src="public/bilder/Explosion.svg" alt="Zauber fehlgezündet"></div>
    <h3>
        Für die Berechnung brauchen wir
        <?php if($EinstandspreisFr == 0 && $Menge != 0){echo ' einen Einstandspreis, welcher grösser als 0 ist.';}
        elseif($EinstandspreisFr != 0 && $Menge== 0){echo ' eine Menge, welcher grösser als 0 ist. ';} 
        elseif($EinstandspreisFr == 0 && $Menge == 0){echo ' einen Einstandspreis und eine Menge, welche grösser als 0 sind. ';}?>
    </h3>
    <h3>
        <a href="vk-erstellen">
            <button type="button">
                Zurück zur erstellung der Einkaufskalkulationen
            </button>
        </a>
    </h3>
</html>