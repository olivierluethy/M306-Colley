<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/css/style.css">
    <link rel="shortcut icon" href="assets/favicon.ico">
    <title>Colley</title>
</head>

<body>
    <h1>Colley</h1>
    <h2>Einkaufskalkulation</h2>
    <table>
        <tr>
            <!-- Seite/ Keinen Rahmen -->
            <td class="side"></td>
            <!-- eigentliche Tabelle / Keinen Rahmen -->
            <td>
                <table>
                    <!-- Spaltentitel -->
                    <tr class="border">
                        <th class="center" colspan="2">Kosten</th>
                        <th class="center" colspan="4">Rabatt Berechnung</th>
                        <th class="center" colspan="4">Skonto Berechnung</th>
                        <th class="center"></th>
                        <th class="center" colspan="2">pro Stück</th>
                        <?php if($Menge != 1): ?>
                        <th class="center" colspan="3"></th>
                        <th class="center" colspan="2"><?= $Menge ?> Stück</th>
                        <?php endif ?>
                    </tr>
                    <?php for($i=0; $i<count($ausgabe); $i++): ?>
                    <tr class="border">
                        <!-- Fix alle Zeilen -->
                        <th class="center"><?= $ausgabe[$i][0] ?></th>
                        <th class="left"><?= $ausgabe[$i][1] ?></th>
                        <!-- Zeile 1 + 2 -->
                        <?php if(!empty($ausgabe[$i][2]) && empty($ausgabe[$i][3])): ?>
                        <td></td>
                        <td class="right"><?= number_format(${$ausgabe[$i][2]},2,",") ?></td>
                        <td class="center">%</td>
                        <td></td>
                        <td colspan="4"></td>
                        <!-- Zeile 3 -->
                        <?php elseif(!empty($ausgabe[$i][2]) && !empty($ausgabe[$i][3])): ?>
                        <td></td>
                        <td class="right"><?= number_format(${$ausgabe[$i][2]},2,",") ?></td>
                        <td class="center">%</td>
                        <td class="center" colspan="2">=></td>
                        <td class="right"><?= number_format(${$ausgabe[$i][3]},2,",") ?></td>
                        <td class="center">%</td>
                        <td></td>
                        <!-- Zeile 4 + 5 -->
                        <?php elseif(empty($ausgabe[$i][2]) && !empty($ausgabe[$i][3])): ?>
                        <td colspan="4"></td>
                        <td></td>
                        <td class="right"><?= number_format(${$ausgabe[$i][3]},2,",") ?></td>
                        <td class="center">%</td>
                        <td></td>
                        <!-- Zeile 6 + 7 -->
                        <?php elseif(empty($ausgabe[$i][2]) && empty($ausgabe[$i][3])): ?>
                        <td colspan="4"></td>
                        <td colspan="4"></td>
                        <?php endif ?>
                        <!-- Fix alle Zeilen -->
                        <td></td>
                        <td class="center">CHF</td>
                        <td class="right"><?= number_format(${$ausgabe[$i][4]},2,",","'") ?></td>
                        <?php if($Menge != 1): ?>
                        <td class="center"></td>
                        <td class="center">=></td>
                        <td class="center"></td>
                        <td class="center">CHF</td>
                        <td class="right"><?= number_format(${$ausgabe[$i][5]},2,",","'") ?></td>
                        <?php endif ?>
                    </tr>
                    <?php endfor ?>
                    <!-- Button um zur Eingabe zurückzukehren -->
                    <tr>
                        <td class="weiss center" colspan="<?php if($Menge == 1): echo '13'; else: echo '18'; endif ?>">
                            <a href="ek-erstellen"><button type="button">Neue Berechnung beginnen</button></a></td>
                    </tr>
                </table>
            </td>
            <td class="side"></td><!-- Seite / Keinen Rahmen -->
        </tr>
    </table>
</body>

</html>