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
            <h2>Einkaufskalkulation</h2>
        </div>
        <div class="text">
            <p>Bitte geben Sie den Katalogpreis eines einzelnen Stückes an, da der Kalkulator sonst falsch rechnet.</p>
        </div>
        <div class="main ek-erstellen-main">
            <form action="ek-berechnen" method="POST">
                <div class="tabelle">
                    <table>
                        <tr class="border">
                            <th>Kosten</th>
                            <th colspan="4">Angaben</th>
                        </tr>
                        <?php for($i=0; $i<count($eingabe); $i++): ?>
                            <tr class="border">
                                <th class="left"><?= $eingabe[$i][0] ?></th>
                                <td><?= $eingabe[$i][1] ?></td>
                                <td>
                                    <input type="text" 
                                    name="<?= $eingabe[$i][2] ?>" 
                                    id="<?= $eingabe[$i][2] ?>"
                                    placeholder="1234.56"
                                    class="right"
                                    tabindex="<?= $eingabe[$i][5] ?>"
                                    value="<?= $eingabe[$i][7] ?>"
                                    <?php if($eingabe[$i][1] == 'Katalogpreis' || $eingabe[$i][1] == 'Menge'): echo 'required'; endif ?>
                                    >
                                </td>
                                <?php if($eingabe[$i][3] != ''): ?>
                                    <td>
                                        <input type="text" 
                                        name="<?= $eingabe[$i][3] ?>" 
                                        id="<?= $eingabe[$i][3] ?>"
                                        placeholder="123456"
                                        class="right"
                                        tabindex="<?= $eingabe[$i][6] ?>"
                                        value="<?= $eingabe[$i][8] ?>"
                                        >
                                    </td>
                                    <td><?= $eingabe[$i][4] ?></td>
                                <?php else: ?>
                                    <td></td>
                                    <td></td>
                                <?php endif ?>
                            </tr>
                        <?php endfor ?>
                        <tr>
                            <td class="center" colspan="5"><button type="submit">Berechnen</button></td>
                        </tr>
                    </table>
                </div>
            </form>
        </div>
        <?php include('app/Controllers/inc/footer.inc.php'); ?>
    </div>
</body>

</html>