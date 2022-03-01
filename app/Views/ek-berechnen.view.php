<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/css/style.css">
    <title>Colley</title>
</head>
<body>
    <h1>Colley</h1>
    <h2>Einkaufskalkulation</h2>
    <!-- Wenn bei der Mengenangabe eine 0 eingegeben wird, soll eine Fehlermeldung erscheinen: -->
    <?php if($Menge == 0): ?>
        <h3>Uups!</h3>
        <h3>Da hat es ein Problem gegeben.</h3>
        <h3>Wir haben leider keinen Abschluss von Hogwarts der Schule für Zauberei.</h3>
        <div class="bild"><img src="public/bilder/Explosion.jpg" alt="Zauber fehlgegangen"></div>
        <h3>Für die Berechnung brauchen wir eine Stückzahl, welche grösser als 0 ist.</h3>
        <h3><a href="einkaufskalkulation"><button type="button">Zurück zur Kalkulationseingabe</button></a></h3>
    <?php endif ?>

    <!-- Wenn die Stückzahl grösser als 0 ist: -->
    <?php if($Menge > 0): ?>
        <table>
            <tr>
                <td class="side weiss"></td><!-- Seite/ Keinen Rahmen -->
                <td class="weiss"><!-- eigentliche Tabelle / Keinen Rahmen -->
                    <table>
                    <!-- Spaltentitel -->
                        <tr>
                            <th>Kosten</th>
                            <th colspan="2">pro Stück</th>
                            <th>Rabatt Berechnung</th>
                            <th></th>
                            <th>Skonto Berechnung</th>
                        <!-- Wenn nicht genau 1 Stück -->
                            <?php if($Menge != 1): echo '<th></th><th colspan="2">' . $Menge . ' Stücke</th>'; endif ?>
                        </tr>
                        <?php for($i=0; $i<count($ausgabe); $i++): ?>
                            <tr>
                            <!-- Zeilentitel -->
                                <th class="left"><?= $ausgabe[$i][0] ?></th>
                            <!-- Bezeichnung CHF -->
                                <td class="center b-left">CHF</td>
                            <!-- Betrag in CHF -->
                                <td class="right b-right"><?= number_format(${$ausgabe[$i][1]}, 2, ",", "'") ?></td>
                            <!-- Rabatt -->
                                <?php if(!empty($ausgabe[$i][2])): echo '<td class="right">' . number_format(${$ausgabe[$i][2]}, 2, ",", "'") . ' %</td>'; else: echo '<td></td>'; endif ?>
                            <!-- Übertrag von Rabatt zu Skonto -->
                                <?php if($ausgabe[$i][0] == 'Rechnungsbetrag'): echo '<td class="center"> => </td>'; else: echo '<td></td>'; endif ?>
                            <!-- Skonto -->
                                <?php if(!empty($ausgabe[$i][3])): echo '<td class="right">' . number_format(${$ausgabe[$i][3]}, 2 ,",", "'") . ' %</td>'; else: echo '<td></td>'; endif ?>
                            <!-- Wenn nicht genau 1 Stück -->
                                <?php if($Menge != 1): echo '
                                <td class="center"> => </td>
                                <td class="center b-left">CHF</td>
                                <td class="right b-right">' . number_format(${$ausgabe[$i][4]}, 2, ",", "'") . '</td>';
                                endif?>
                                </tr>
                        <?php endfor ?>
                    <!-- Button um zur Eingabe zurückzukehren -->
                        <tr class="weiss">
                            <td class="weiss center" colspan="<?php if($Menge != 1): echo '9'; else: echo '7'; endif ?>"><a href="ek-erstellen"><button type="button">Neue Berechnung beginnen</button></a></td>
                        </tr>
                    </table>
                </td>
                <td class="side weiss"></td><!-- Seite / Keinen Rahmen -->
            </tr>
        </table>
    <?php endif ?>
</body>
</html>