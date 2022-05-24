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
    <h2>Gesamte Kalkulation</h2>
    <p class="center">Bitte giben Sie den Katalogpreis eines einzelnen Stückes an, da der Kalkukator sonst falsch
        rechnet.</p>
    <form action="gk-berechnen" method="POST">
        <table>
            <tr>
                <td class="side "></td>
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
                            <!-- Bezeichnung -->
                            <td class="center">
                                <?= $eingabe[$i][1] ?>
                            </td>
                            <!-- Input CHF -->
                            <td>
                                <input type="text" name="<?= $eingabe[$i][2] ?>" id="<?= $eingabe[$i][2] ?>"
                                    placeholder="1234.56" tabindex="<?= $eingabe[$i][3] ?>"
                                    <?php if($eingabe[$i][0] == 'Katalogpreis'){ echo 'required';} ?>
                                    <?php if($eingabe[$i][0] == 'Menge'){ echo 'required';} ?>
                                    value="<?= $value[$i][0] ?>">
                            </td>
                            <!-- Input % -->
                            <?php if($eingabe[$i][4] != ''): ?>
                            <td>
                                <input type="text" name="<?= $eingabe[$i][4] ?>" id="<?= $eingabe[$i][4] ?>"
                                    placeholder="1234.56" tabindex="<?= $eingabe[$i][5] ?>"
                                    value="<?= $value[$i][1] ?>">
                            </td>
                            <!-- Bezeichnung % -->
                            <td class="center">%</td>
                            <?php else: echo '<td colspan="2"></td>'; endif ?>
                        </tr>
                        <?php endfor ?>
                        <tr>
                            <td><a href="kalkulation"><button type="button" tabindex="18">Zurück</button></a></td>
                            <td class="center" colspan="4"><button type="submit" tabindex="17">Berechnen</button></td>
                        </tr>
                    </table>
                </td>
                <td class="side"></td>
            </tr>
        </table>
    </form>
</body>

</html>