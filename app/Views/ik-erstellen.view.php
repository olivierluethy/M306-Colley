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
    <h2>Interne Kalkulation</h2>
    <p class="center">Bitte geben Sie den Katalogpreis eines einzelnen Stückes an, da der Kalkulator sonst falsch rechnet.</p>
    <form action="ik-berechnen" method="POST">
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
                            <!-- Zeilentitel -->
                                <th class="left"><?= $eingabe[$i][0] ?></th>
                            <!-- Bezeichnung CHF / Anz -->
                                <td><?= $eingabe[$i][1] ?></td>
                            <!-- Input CHF / Anz -->
                                <td>
                                    <input type="text" 
                                    name="<?= $eingabe[$i][2] ?>" 
                                    id="<?= $eingabe[$i][2] ?>" 
                                    <?php if($eingabe[$i][0] == 'Einstandspreis'): echo 'required'; endif ?> 
                                    placeholder="1234.56" 
                                    tabindex="<?= $eingabe[$i][3] ?>" 
                                    value="<?= $eingabe[$i][4] ?>">
                                </td>
                                <?php if($eingabe[$i][5] == ''): echo '<td colspan="2"></td>'; else: ?>
                            <!-- Input % -->
                                    <td>
                                        <input type="text" 
                                        name="<?= $eingabe[$i][5] ?>" 
                                        id="<?= $eingabe[$i][5] ?>" 
                                        placeholder="1234.56" 
                                        tabindex="<?= $eingabe[$i][6] ?>" 
                                        value="<?= $eingabe[$i][7] ?>">
                                    </td>
                            <!-- Bezeichnung % -->
                                    <td><?= $eingabe[$i][8] ?></td>
                                <?php endif ?>
                            </tr>
                        <?php endfor ?>
                        <tr>
                            <td><a href="kalkulation"><button type="button" tabindex="8">Zurück</button></a></td>
                            <td class="center" colspan="4"><button type="submit" tabindex="7">Berechnung</button></td>
                        </tr>
                    </table>
                </td>
                <td class="side"></td>
            </tr>
        </table>
    </form>
</body>
</html>