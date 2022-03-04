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
    <table>
        <tr>
            <td class="side"></td>
            <td>
                <table>
                    <tr class="border">
                        <th class="center" colspan="2">Kosten</th>
                        <th class="center" colspan="4">Gemeinkosten</th>
                        <th class="center" colspan="4">Reingewinn</th>
                        <th class="center"></th>
                        <th class="center" colspan="2">Pro Stück</th>
                        <?php if($Menge != 1): ?>
                            <th class="center" colspan="3"></th>
                            <th class="center" colspan="2"><?= $Menge ?> Stück</th>
                        <?php endif ?>
                    </tr>
                    <?php for($i=0; $i<count($ausgabe); $i++): ?>
                        <tr class="border">
                        <!-- Fix -->
                            <td class="center"><?= $ausgabe[$i][0] ?></td>
                            <td class="left"><?= $ausgabe[$i][1] ?></td>
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
                                <td class="right"><?= number_format(${$ausgabe[$i][3]}, 2, ",") ?></td>
                                <td class="center">%</td>
                                <td></td>
                            <?php endif ?>
                        <!-- Fix -->
                            <td></td>
                            <td class="center">CHF</td>
                            <td class="right"><?= number_format(${$ausgabe[$i][4]},2,",","'") ?></td>
                            <?php if($Menge != 1): ?>
                                <td class="center"></td>
                                <td class="center">=></td>
                                <td class="center"></td>
                                <td class="center">CHF</td>
                                <td class="right"><?= number_format(${$ausgabe[$i][5]}, 2, ",", "'") ?></td>
                            <?php endif ?>
                        </tr>
                    <?php endfor ?>
                    <tr>
                        <td class="center weiss" colspan="<?php if($Menge == 1): echo'13'; else: echo '18'; endif ?>">
                            <a href="ik-erstellen">
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