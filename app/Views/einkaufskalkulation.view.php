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
    <h2>Einkaufskalkulation</h2>
    <p class="center">Bitte geben Sie den Katalogpreis eines einzelnen Stückes an, da der Kalkulator sonst falsch
        rechnet.</p>

    <form action="ek-berechnen" method="POST">
        <!-- Tabelle für Masseingabe -->
        <table>
            <tr>
                <td class="side weiss"></td><!-- Seite / Keinen Rahmen -->
                <td class="max weiss">
                    <!-- Eigentliche Tabelle / Keinen Rahmen -->
                    <table>
                        <!-- Titelzeile -->
                        <tr>
                            <th>Kosten</th>
                            <th colspan="4">Angaben</th>
                        </tr>
                        <?php for($i=0;$i<count($eingabe); $i++): ?>
                        <tr>
                            <!-- Tabellenzeile -->
                            <th class="max left"><?= $eingabe[$i][0] ?></th>
                            <!-- Bezeichnung CHF / Anz -->
                            <td class="max left b-left"><?= $eingabe[$i][1] ?></td>
                            <!-- Input Betrag -->
                            <td class="max b-right">
                                <input type="text" name="<?= $eingabe[$i][2] ?>" id="<?= $eingabe[$i][2] ?>" <?php if($eingabe[$i][0] == 'Katalogpreis'): echo 'required'; endif ?> placeholder="1234.56" class="right" tabindex="<?= $eingabe[$i][5] ?>" value="<?= $eingabe[$i][7] ?>"></td>
                            <?php if($eingabe[$i][3] != ''): ?>
                            <!-- Input Prozente -->
                            <td class="max b-left"><input type="text" name="<?= $eingabe[$i][3] ?>" id="<?= $eingabe[$i][3] ?>" placeholder="1234.56" class="right" tabindex="<?= $eingabe[$i][6] ?>" value="<?= $eingabe[$i][8] ?>"></td>
                            <!-- Bezeichnung % -->
                            <td class="max center b-right">%</td>
                            <!-- Wenn kein Prozente-Input -->
                            <?php else: echo '<td colspan="2"></td>';?>
                            <?php endif; ?>
                        </tr>
                        <?php endfor ?>
                        <tr class="weiss">
                            <td class="left weiss"><a href="kalkulation"><button type="button" tabindex="9">Zurück</button></a></td>
                            <td class="center weiss" colspan="4"><button type="submit" tabindex="8">Berechnung</button></td>
                        </tr>
                    </table>
                </td>
                <td class="side weiss"></td>
            </tr>
        </table>
    </form>
</body>

</html>