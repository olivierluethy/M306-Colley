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
    <?php include('app/Controllers/inc/header.inc.php'); ?>
        <div class="titel">
            <h2>Gesamte Kalkulation</h2>
        </div>
        <div class="text">
            <p>Bitte geben Sie den Katalogpreis eines einzelnen Stückes an, da der Kalkulator sonst falsch rechnet.</p>
        </div>
        <div class="main gk-erstellen-main">
            <form action="gk-berechnen" method="POST">
                <div class="tabelle">
                    <table>
                        <tr class="border">
                            <th>Kosten</th>
                            <th colspan="4">Angaben</th>
                        </tr>
                        <?php for($i=0; $i<count($eingabe); $i++): ?>
                            <tr class="border">
                                <th class="left"><?= $eingabe[$i][0] ?></th>
                                <td class="center"><?= $eingabe[$i][1] ?></td>
                                <td>
                                    <input type="text"
                                    name="<?= $eingabe[$i][2] ?>"
                                    id="<?= $eingabe[$i][2] ?>"
                                    <?php if($eingabe[$i][0] == 'Katalogpreis' || $eingabe[$i][0] == 'Menge'): echo 'required'; endif?>
                                    placeholder="1234.56"
                                    tabindex="<?= $eingabe[$i][3] ?>"
                                    value="<?= $eingabe[$i][4] ?>">
                                    <?php if(!empty($eingabe[$i][5])): ?>
                                        <input type="text"
                                        name="<?= $eingabe[$i][5] ?>"
                                        id="<?= $eingabe[$i][5] ?>"
                                        placeholder="1234.56"
                                        tabindex="<?= $eingabe[$i][6] ?>"
                                        value="<?= $eingabe[$i][7] ?>">
                                        <td class="center">%</td>
                                    <?php else: ?>
                                        <td colspan="2"></td>
                                    <?php endif ?>
                                </td>
                            </tr>
                        <?php endfor ?>
                        <tr class="border">
                            <td colspan="5" class="center">
                                <button type="submit">Berechnen</button>
                            </td>
                        </tr>
                    </table>
                </div>
            </form>
        </div>
        <?php include('app/Controllers/inc/footer.inc.php'); ?>
    </div>
</body>
</html>