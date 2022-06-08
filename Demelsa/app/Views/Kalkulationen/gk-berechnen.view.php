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
            <h2>Gesamte Kalkulation</h2>
        </div>
        <div class="text">
            <p>Die berechnete Gesamte Kalkulation</p>
        </div>
        <div class="main gk-berechnen-main">
            <div class="tabelle">
                <table>
                <!-- Titelleiste -->
                    <tr class="border">
                        <th colspan="2">Kosten</th>
                        <th colspan="2">Einkaufsrabatt</th>
                        <th></th>
                        <th colspan="2">Einkaufsskonto</th>
                        <th colspan="2">Gemeinkosten</th>
                        <th></th>
                        <th colspan="2">Reingewinn</th>
                        <th colspan="2">Verkaufsskonto</th>
                        <th></th>
                        <th colspan="2">Verkaufsrabatt</th>
                        <th colspan="2">pro Stück</th>
                        <?php if($Menge > 1): ?>
                            <th></th>
                            <th colspan="2"><?= $Menge ?> Stück</th>
                        <?php endif ?>
                    </tr>
                    <?php for($i=0; $i<count($ausgabe); $i++): ?>
                        <tr class="border">
                    <!-- Angaben-Spalte -->
                            <th><?= $ausgabe[$i][0] ?></th>
                            <th class="left"><?= $ausgabe[$i][1] ?></th>
                    <!-- Einkaufsrabatt / Einkaufsskonto -->
                            <?php if(!empty($ausgabe[$i][2]) && empty($ausgabe[$i][3])): ?>
                                <td class="right"><?= number_format(${$ausgabe[$i][2]},2,",") ?></td>
                                <td class="left">%</td>
                                <td colspan="3"></td>
                            <?php elseif(!empty($ausgabe[$i][2]) && !empty($ausgabe[$i][3])): ?>
                                <td class="right"><?= number_format(${$ausgabe[$i][2]},2,",","'") ?></td>
                                <td class="left">%</td>
                                <td class="center">=></td>
                                <td class="right"><?= number_format(${$ausgabe[$i][3]},2,",","'") ?></td>
                                <td class="left">%</td>
                            <?php elseif(empty($ausgabe[$i][2]) && !empty($ausgabe[$i][3])): ?>
                                <td colspan="3"></td>
                                <td class="right"><?= number_format(${$ausgabe[$i][3]},2,",","'") ?></td>
                                <td class="left">%</td>
                            <?php elseif(empty($ausgabe[$i][2]) && empty($ausgabe[$i][3])): ?>
                                <td colspan="5"></td>
                            <?php endif ?>
                    <!-- Gemeinkosten / Reingewinn -->
                                <?php if(!empty($ausgabe[$i][4]) && empty($ausgabe[$i][5])): ?>
                                    <td class="right"><?= number_format(${$ausgabe[$i][4]},2,",") ?></td>
                                    <td class="left">%</td>
                                    <td colspan="3"></td>
                                <?php elseif(!empty($ausgabe[$i][4]) && !empty($ausgabe[$i][5])): ?>
                                    <td class="right"><?= number_format(${$ausgabe[$i][4]},2,",") ?></td>
                                    <td class="left">%</td>
                                    <td class="center">=></td>
                                    <td class="right"><?= number_format(${$ausgabe[$i][5]},2,",") ?></td>
                                    <td class="left">%</td>
                                <?php elseif(empty($ausgabe[$i][4]) && !empty($ausgabe[$i][5])): ?>
                                    <td colspan="3"></td>
                                    <td class="right"><?= number_format(${$ausgabe[$i][5]},2,",") ?></td>
                                    <td class="left">%</td>
                                <?php elseif(empty($ausgabe[$i][4]) && empty($ausgabe[$i][5])): ?>
                                    <td colspan="5"></td>
                                <?php endif ?>
                    <!-- Verkaufsskonto / Verkaufsrabatt -->
                                <?php if(!empty($ausgabe[$i][6]) && empty($ausgabe[$i][7])): ?>
                                    <td class="right"><?= number_format(${$ausgabe[$i][6]},2,",") ?></td>
                                    <td class="left">%</td>
                                    <td colspan="3"></td>
                                <?php elseif(!empty($ausgabe[$i][6]) && !empty($ausgabe[$i][7])): ?>
                                    <td class="right"><?= number_format(${$ausgabe[$i][6]},2,",") ?></td>
                                    <td class="left">%</td>
                                    <td class="center">=></td>
                                    <td class="right"><?= number_format(${$ausgabe[$i][7]},2,",") ?></td>
                                    <td class="left">%</td>
                                <?php elseif(empty($ausgabe[$i][6]) && !empty($ausgabe[$i][7])): ?>
                                    <td colspan="3"></td>
                                    <td class="right"><?= number_format(${$ausgabe[$i][7]},2,",") ?></td>
                                    <td class="left">%</td>
                                <?php elseif(empty($ausgabe[$i][6]) && empty($ausgabe[$i][7])): ?>
                                    <td colspan="5"></td>
                                <?php endif ?>
                    <!-- Pro Stück -->
                                <td class="center">CHF</td>
                                <td class="right"><?= number_format(${$ausgabe[$i][8]},2,",","'") ?></td>
                    <!-- x Stück -->
                                <?php if($Menge > 1): ?>
                                    <td class="center">=></td>
                                    <td class="center">CHF</td>
                                    <td class="right"><?= number_format(${$ausgabe[$i][9]},2,",","'") ?></td>
                                <?php endif ?>
                        </tr>
                    <?php endfor ?>
                    <tr>
                        <td class="center" colspan="<?php if($Menge == 1): echo '19'; elseif($Menge > 1): echo '22'; endif ?>">
                            <a href="gk-erstellen">
                                <button type="button">neue Berechnung erstellen</button>
                            </a>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>

</body>
</html>