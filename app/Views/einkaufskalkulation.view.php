<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/css/style.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Colley</title>
</head>

<body>
    <h1>Colley</h1>
    <h2>Einkaufskalkulation</h2>
    <p class="center">Lorem Ipsum</p>
    <!--<a href="home"><button>zurück</button></a>-->
    <form action="ek-berechnen" method="POST">
        <table class="size1">
            <tr>
                <td class="size30"></td>
                <td class="size40">
                    <table class="size1">
                        <tr>
                            <th class="size30">Kosten</th>
                            <th class="size70" colspan="4">Angaben</th>
                        </tr>
                        <?php for($i=0; $i<count($eingabe);$i++): ?>
                        <tr>
                            <td><?= $eingabe[$i][0] ?></td>
                            <?php if(!empty($eingabe[$i][1])): ?>
                            <td><input type="number" name="<?= $eingabe[$i][1] ?>" id="<?= $eingabe[$i][1] ?>"
                                    value="<?= $eingabe[$i][3] ?>"></td>
                            <td>%</td>
                            <?php else: ?>
                            <td></td>
                            <td></td>
                            <?php endif ?>
                            <td>CHF</td>
                            <td><input type="number" name="<?= $eingabe[$i][2] ?>" id="<?= $eingabe[$i][2] ?>"
                                    value="<?= $eingabe[$i][4] ?>" placeholder="<?= $eingabe[$i][0] ?>"></td>
                        </tr>
                        <?php endfor ?>
                        <tr>
                            <td colspan="5"><button>Berechnen</button></td>
                        </tr>
                    </table>
                </td>
                <td class="size30"></td>
            </tr>
        </table>
    </form>
</body>

</html>