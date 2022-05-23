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
    <h2>Gesamte Kalkulation</h2>
    <p class="center">Die berechnete Gesamtkalkulation</p>
    <table>
        <tr>
            <td class="side"></td>
            <td>
                <table>
                    <tr class="border">
                        <th class="center" colspan="2">Kosten</th>
                        <th class="center" colspan="4">Einkaufsrabatt</th>
                        <th class="center" colspan="4">Einkaufsskonto</th>
                        <th class="center" colspan="4">Gemeinkosten</th>
                        <th class="center" colspan="4">Reingewinn</th>
                        <th class="center" colspan="4">Verkaufsskonto</th>
                        <th class="center" colspan="4">Verkaufsrabatt</th>
                        <th></th>
                        <th class="center" colspan="2">pro Stück</th>
                        <?php if($Menge != 1): ?>
                            <th colspan="3"></th>
                            <th class="center"  colspan="2"><?= $Menge ?> Stück</th>
                        <?php endif ?>
                    </tr>
            <!-- Tabelle -->
                    <?php for($i=0; $i<count($ausgabe); $i++): ?>
                        <tr class="border">
                        <!-- Fix alle Zeilen -->
                            <th class="center"><?= $ausgabe[$i][0] ?></th>
                            <th class="left"><?= $ausgabe[$i][1]?></th>
                        <!-- Zeile 1 + 2 -->
                            <?php if(!empty($ausgabe[$i][2]) && empty($ausgabe[$i][3])): ?>
                                <td></td>
                                <td class="right"><?= number_format(${$ausgabe[$i][2]},2,",") ?></td>
                                <td class="center">%</td>
                                <td></td>
                                <td colspan="20"></td>
                                <td></td>
                        <!-- Zeile 3 -->
                            <?php elseif(!empty($ausgabe[$i][2]) && !empty($ausgabe[$i][3])): ?>
                                <td></td>
                                <td class="right"><?= number_format(${$ausgabe[$i][2]},2,",") ?></td>
                                <td class="center">%</td>
                                <td class="center " colspan="2">=></td>
                                <td class="right"><?= number_format(${$ausgabe[$i][3]},2,",") ?></td>
                                <td class="center">%</td>
                                <td></td>
                                <td colspan="16"></td>
                                <td></td>
                        <!-- Zeile 4 + 5 -->
                            <?php elseif(empty($ausgabe[$i][2]) && !empty($ausgabe[$i][3])): ?>
                                <td colspan="4"></td>
                                <td></td>
                                <td class="right"><?= number_format(${$ausgabe[$i][3]},2,",") ?></td>
                                <td class="center">%</td>
                                <td></td>
                                <td colspan="16"></td>
                                <td></td>
                            <?php endif ?>
                        <!-- Zeile 7 + 8 -->
                            <?php if(!empty($ausgabe[$i][4]) && empty($ausgabe[$i][5])): ?>
                                <td colspan="8"></td>
                                <td></td>
                                <td class="right"><?= number_format(${$ausgabe[$i][4]},2,",") ?></td>
                                <td class="center">%</td>
                                <td></td>
                                <td colspan="12"></td>
                                <td></td>
                        <!-- Zeile 9 -->
                            <?php elseif(!empty($ausgabe[$i][4]) && !empty($ausgabe[$i][5])): ?>
                                <td colspan="8"></td>
                                <td></td>
                                <td class="right"><?= number_format(${$ausgabe[$i][4]},2,",") ?></td>
                                <td>%</td>
                                <td class="center " colspan="2">=></td>
                                <td class="right"><?= number_format(${$ausgabe[$i][5]},2,",") ?></td>
                                <td class="center">%</td>
                                <td></td>
                                <td colspan="8"></td>
                                <td></td>
                        <!-- Zeile 10 + 11 -->
                            <?php elseif(empty($ausgabe[$i][4]) && !empty($ausgabe[$i][5])): ?>
                                <td colspan="12"></td>
                                <td></td>
                                <td class="right"><?= number_format(${$ausgabe[$i][5]},2,",") ?></td>
                                <td class="center">%</td>
                                <td></td>
                                <td colspan="8"></td>
                                <td></td>
                            <?php endif ?>
                        <!-- Zeile 13 + 14 -->
                            <?php if(!empty($ausgabe[$i][6]) && empty($ausgabe[$i][7])): ?>
                                <td colspan="16"></td>
                                <td></td>
                                <td class="right"><?= number_format(${$ausgabe[$i][6]},2,",") ?></td>
                                <td class="center">%</td>
                                <td></td>
                                <td colspan="4"></td>
                                <td></td>
                        <!-- Zeile 15 -->
                            <?php elseif(!empty($ausgabe[$i][6]) && !empty($ausgabe[$i][7])): ?>
                                <td colspan="16"></td>
                                <td></td>
                                <td class="right"><?= number_format(${$ausgabe[$i][6]},2,",") ?></td>
                                <td class="center">%</td>
                                <td class="center " colspan="2">=></td>
                                <td class="right"><?= number_format(${$ausgabe[$i][7]},2,",") ?></td>
                                <td class="center">%</td>
                                <td></td>
                                <td></td>
                        <!-- Zeile 16 + 17 -->
                            <?php elseif(empty($ausgabe[$i][6]) && !empty($ausgabe[$i][7])): ?>
                                <td colspan="20"></td>
                                <td></td>
                                <td class="right"><?= number_format(${$ausgabe[$i][7]},2,",") ?></td>
                                <td class="center">%</td>
                                <td></td>
                                <td></td>
                            <?php endif ?>
                        <!-- Zeile 6 + 12 -->
                            <?php if(empty($ausgabe[$i][2]) && empty($ausgabe[$i][3]) && empty($ausgabe[$i][4]) && empty($ausgabe[$i][5]) && empty($ausgabe[$i][6]) && empty($ausgabe[$i][7])): ?>
                                <td colspan="24"></td>
                                <td></td>
                            <?php endif ?>
                        <!-- Fix alle Zeilen -->
                            <td class="center">CHF</td>
                            <td class="right"><?= number_format(${$ausgabe[$i][8]},2,",","'") ?></td>
                            <?php if($Menge != 1): ?>
                                <td class="center"></td>
                                <td class="center">=></td>
                                <td class="center"></td>
                                <td class="center">CHF</td>
                                <td class="right"><?= number_format(${$ausgabe[$i][9]},2,",","'") ?></td>
                            <?php endif ?>
                        </tr>
                    <?php endfor ?>
                    <tr>
                        <td class="center " colspan="<?php if($Menge == 1): echo '29'; else: echo '34'; endif ?>">
                            <a href="gk-erstellen">
                                <button type="button">Eine neue Berechnung beginnen</button>
                            </a>
                        </td>
                    </tr>
                </table>
            </td>
            <td class="side"></td>
        </tr>
    </table>
</body>
</html>