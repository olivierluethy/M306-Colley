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
    <h2>Interne Kalkulation</h2>
    <p class="center">Die berechnete interne Kalkulation</p>
        <!-- Wenn bei der Mengenangabe eine 0 eingegeben wird, soll eine Fehlermeldung erscheinen: -->
        <?php if($Menge == 0): ?>
        <h3 class="center">Uups!</h3>
        <h3 class="center">Da hat es ein Problem gegeben.</h3>
        <h3 class="center">Wir haben leider keinen Abschluss von Hogwarts der Schule für Zauberei.</h3>
        <div class="bild"><img src="public/bilder/Explosion.jpg" alt="Zauber fehlgezündet"></div>
        <h3 class="center">Für die Berechnung brauchen wir eine Stückzahl, welche grösser als 0 ist.</h3>
        <h3 class="center"><a href="internekalkulation"><button type="button">Zurück zur Kalkulationseingabe</button></a></h3>

    <!-- Wenn die Stückzahl grösser als 0 ist: -->
    <?php elseif($Menge > 0): ?>
        <!-- Wenn beim EinstandspreisFr eine 0 eigegeben worden ist, soll eine Fehlermeldung erscheinen: -->
        <?php if($EinstandspreisFr == 0): ?>
            <h3 class="center">Uups!</h3>
            <h3 class="center">Da hat es ein Problem gegeben.</h3>
            <h3 class="center">Wir haben leider keinen Abschluss von Hogwarts der Schule für Zauberei.</h3>
            <div class="bild"><img src="public/bilder/Explosion.jpg" alt="Zauber fehlgegangen"></div>
            <h3 class="center">Für die Berechnung brauchen wir einen EinstandspreisFr, welcher grösser als 0 ist.</h3>
            <h3 class="center"><a href="internekalkulation"><button type="button">Zurück zur Kalkulationseingabe</button></a></h3>
        <!-- Wenn der EinstandspreisFr grösser als 0 ist -->
        <?php elseif($EinstandspreisFr > 0): ?>
            <table>
                <tr>
                    <td class="side weiss"></td>
                    <td class="weiss">
                        <table>
                            <tr>
                                <th>Kosten</th>
                                <th colspan="2">Pro Stück</th>
                                <th colspan="2">Gemeinkosten</th>
                                <th></th>
                                <th colspan="2">Reingewinn</th>
                                <?php if($Menge != 1): ?>
                                    <th></th>
                                    <th colspan="2"><?= $Menge ?> Stück</th>
                                <?php endif ?>
                            </tr>
                            <?php for($i=0; $i<count($ausgabe); $i++): ?>
                                <tr>
                                    <th class="left"><?= $ausgabe[$i][0] ?></th>
                                    <td class="center b-left">CHF</td>
                                    <td class="right b-right"><?= number_format(${$ausgabe[$i][1]}, 2, ",", "'") ?></td>
                                    <?php if(!empty($ausgabe[$i][2])): ?>
                                        <td class="right b-left"><?= number_format(${$ausgabe[$i][2]}, 2, ",") ?></td>
                                        <td class="center b-right">%</td>
                                    <?php else: echo '<td colspan="2"></td>'; endif ?>
                                    <td class="center"><?php if($ausgabe[$i][0] == 'Selbstkosten'): echo '=>'; endif ?></td>
                                    <?php if(!empty($ausgabe[$i][3])): ?>
                                        <td class="right b-left"><?= number_format(${$ausgabe[$i][3]}, 2, ",") ?></td>
                                        <td class="center b-right">%</td>
                                    <?php else: echo '<td colspan="2"></td>'; endif ?>
                                    <?php if($Menge != 1): ?>
                                        <td class="center">=></td>
                                        <td class="center b-left">CHF</td>
                                        <td class="right b-right"><?= number_format(${$ausgabe[$i][4]}, 2, ",", "'") ?></td>
                                    <?php endif ?>
                                </tr>
                            <?php endfor ?>
                            <tr>
                                <td class="center weiss" colspan="<?php if($Menge == 1): echo'8'; else: echo '11'; endif ?>">
                                    <a href="ik-erstellen">
                                        <button type="button">Eine neue Berechnung beginnen</button>
                                    </a>
                                </td>
                            </tr>
                        </table>
                    </td>
                    <td class="side weiss"></td>
                </tr>
            </table>
        <?php endif; endif ?>
</body>
</html>