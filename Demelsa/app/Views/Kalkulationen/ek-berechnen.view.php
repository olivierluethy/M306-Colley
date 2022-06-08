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
    <div class="container">
        <div class="header">
            <div class="line"></div>
            <div class="colley">
                <h1>Colley</h1>
            </div>
            <div class="line"></div>
        </div>
        <div class="titel">
            <h2>Einkaufskalkulation</h2>
        </div>
        <div class="text">
            <p>Ihre Berechnete Einkaufskalkulation</p>
        </div>
        <div class="main ek-berechnen-main">
            <div class="tabelle">
                <table>
                <!-- Titelleiste -->
                    <tr class="border">
                        <th colspan="2">Kosten</th>
                        <th colspan="4">Rabatt<br>Berechnung</th>
                        <th></th>
                        <th colspan="4">Skonto<br>Berechnung</th>
                        <th></th>
                        <th colspan="2">pro Stück</th>
                        <?php if($Menge > 1): ?>
                            <th colspan="3"></th>
                            <th colspan="2"><?= $Menge ?> Stück</th>
                        <?php endif ?>
                    </tr>
                <!-- Ausgabe -->
                    <?php for($i=0; $i<count($ausgabe); $i++): ?>
                        <tr class="border">
                        <!-- Vorzeichen -->
                            <th><?= $ausgabe[$i][0] ?></th>
                        <!-- Position -->
                            <th class="left"><?= $ausgabe[$i][1] ?></th>
                        <!-- Zeilen 1+ 2 -->
                            <?php if(!empty($ausgabe[$i][2]) && empty($ausgabe[$i][3])): ?>
                                <td></td>
                            <!-- Prozent Rabatt -->
                                <td class="right"><?= number_format(${$ausgabe[$i][2]},2,",") ?></td>
                                <td class="center">%</td>
                            <!-- Platzhalter -->
                                <td></td>
                                <td colspan="5"></td>
                        <!-- Zeile 3 -->
                            <?php elseif(!empty($ausgabe[$i][2]) && !empty($ausgabe[$i][3])): ?>
                                <td></td>
                            <!-- Prozent Rabatt -->
                                <td class="right"><?= number_format(${$ausgabe[$i][2]},2,",") ?></td>
                                <td class="center">%</td>
                            <!-- Weiterleitung -->
                                <td></td>
                                <td class="center">=></td>
                                <td></td>
                            <!-- Prozent Skonto -->
                                <td class="right"><?= number_format(${$ausgabe[$i][3]},2,",") ?></td>
                                <td class="center">%</td>
                                <td></td>
                        <!-- Zeile 4 + 5 -->
                            <?php elseif(empty($ausgabe[$i][2]) && !empty($ausgabe[$i][3])): ?>
                            <!-- Platzhalter -->
                                <td colspan="5"></td>
                                <td></td>
                            <!-- Rabatt Skonto -->
                                <td class="right"><?= number_format(${$ausgabe[$i][3]},2,",") ?></td>
                                <td class="center">%</td>
                                <td></td>
                        <!-- Zeile 6 + 7 -->
                            <?php elseif(empty($ausgabe[$i][2]) && empty($ausgabe[$i][3])): ?>
                                <td colspan="9"></td>
                            <?php endif ?>
                            <td></td>
                        <!-- CHF pro Stück -->
                            <td class="center">CHF</td>
                            <td class="right"><?= number_format(${$ausgabe[$i][4]},2,",","'") ?></td>
                        <!-- CHF pro X-Stück -->
                            <?php if($Menge > 1): ?>
                                <td></td>
                                <td class="center">=></td>
                                <td></td>
                                <td class="center">CHF</td>
                                <td class="right"><?= number_format(${$ausgabe[$i][5]},2,",","'") ?></td>
                            <?php endif ?>
                        </tr>
                    <?php endfor ?>
                <!-- Button -->
                    <tr>
                        <td class="center" colspan="<?php if($Menge == 1): echo '13'; else: echo '18'; endif ?>">
                            <a href="ek-erstellen">
                                <button type="button">Neue Berechnung beginnen</button>
                            </a>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</body>
</html>