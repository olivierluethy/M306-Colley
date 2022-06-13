<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/css/style.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
    <?php include('app/Controllers/inc/header.inc.php'); ?>
        <div class="titel">
            <h2>Verkaufskalkulation</h2>
        </div>
        <div class="text">
            <p>Die berechnete Verkaufskalkulation</p>
        </div>
        <div class="main vk-berechnen-main">
            <div class="tabelle">
                <table>
                    <tr class="border">
                        <th colspan="2">Kosten</th>
                        <th colspan="2">Skonto</th>
                        <th></th>
                        <th colspan="2">Rabatt</th>
                        <th colspan="2">pro Stück</th>
                        <?php if($Menge > 1): ?>
                            <th></th>
                            <th colspan="2"><?= $Menge ?> Stück</th>
                        <?php endif ?>
                    </tr>
                    <?php for($i=0; $i<count($ausgabe); $i++): ?>
                        <tr class="border">
                            <th><?= $ausgabe[$i][0] ?></th>
                            <th class="left"><?= $ausgabe[$i][1] ?></th>
                            <?php if(!empty($ausgabe[$i][2]) && empty($ausgabe[$i][3])): ?>
                                <td class="right"><?= number_format(${$ausgabe[$i][2]},2,",") ?></td>
                                <td class="left">%</td>
                                <td colspan="3"></td>
                            <?php elseif(!empty($ausgabe[$i][2]) && !empty($ausgabe[$i][3])): ?>
                                <td class="right"><?= number_format(${$ausgabe[$i][2]},2,",") ?></td>
                                <td class="left">%</td>
                                <td class="center">=></td>
                                <td class="right"><?= number_format(${$ausgabe[$i][3]},2,",") ?></td>
                                <td class="left">%</td>
                            <?php elseif(empty($ausgabe[$i][2]) && !empty($ausgabe[$i][3])): ?>
                                <td colspan="3"></td>
                                <td class="right"><?= number_format(${$ausgabe[$i][3]},2,",") ?></td>
                                <td class="left">%</td>
                            <?php else: ?>
                                <td colspan="5"></td>
                            <?php endif ?>
                            <td class="right">CHF</td>
                            <td class="right"><?= number_format(${$ausgabe[$i][4]},2,",","'") ?></td>
                            <?php if($Menge > 1): ?>
                                <td class="right">=></td>
                                <td class="right">CHF</td>
                                <td class="right"><?= number_format(${$ausgabe[$i][5]},2,",","'") ?></td>
                            <?php endif ?>
                        </tr>
                    <?php endfor ?>
                    <tr class="border">
                        <td colspan="<?php if($Menge == 1): echo '9'; elseif($Menge > 1): echo '12'; endif ?>" class="center">
                                <a href="vk-erstellen">
                                    <button type="button">neue Berechnung</button>
                                </a>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        <?php include('app/Controllers/inc/footer.inc.php'); ?>
    </div>
</body>
</html>