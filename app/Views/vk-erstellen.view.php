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
    <h2>Verkaufskalkulation</h2>
    <p class="center">Bitte geben Sie den Einstandspreis eines einzelnen Stückes an, da der Kalkulator sonst falsch rechnet</p>
    <form action="vk-berechnen" method="POST">
        <table>
            <tr>
                <td class="side"></td>
                <td>
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
                                    tabindex="<?= $eingabe[$i][3] ?>" 
                                    <?php if($eingabe[$i][0] == 'Einstandspreis' || $eingabe[$i][0] == 'Menge'): echo 'required'; endif ?>
                                    placeholder="<?= $eingabe[$i][8] ?>" 
                                    value="<?= $eingabe[$i][4] ?>">
                                </td>
                                <?php if(!empty($eingabe[$i][5])): ?>
                                    <td>
                                        <input type="text" 
                                        name="<?= $eingabe[$i][5] ?>" 
                                        id="<?= $eingabe[$i][5] ?>" 
                                        tabindex="<?= $eingabe[$i][6] ?>" 
                                        placeholder="<?= $eingabe[$i][8] ?>"
                                        value="<?= $eingabe[$i][7] ?>">
                                    </td>
                                    <td class="center">%</td>
                                <?php else: echo '<td colspan="2"></td>'; endif ?>
                            </tr>
                        <?php endfor ?>
                        <tr>
                            <td><a href="kalkulation"><button type="button" tabindex="9">Zurück</button></a></td>
                            <td class="center" colspan="4"><button type="submit" tabindex="8">Berechnung</button></td>
                        </tr>
                    </table>
                </td>
                <td class="side"></td>
            </tr>
        </table>
    </form>
</body>
</html>