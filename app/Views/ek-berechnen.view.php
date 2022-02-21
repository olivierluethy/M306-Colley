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
    <table class="size1">
        <tr>
            <td class="size30"></td>
            <td class="size40">
                <table class="size1">
                    <tr>
                        <th>Kosten</th>
                        <th colspan="4">Angaben</th>
                    </tr>
                    <?php for($i=0; $i<count($ausgabe);$i++): ?>
                        <tr>
                            <td><?= $ausgabe[$i][0] ?></td>
                            <?php if($ausgabe[$i][1] == ''): ?>
                                <td></td>
                                <td></td>
                            <?php else: ?>
                                <td><?= ${$ausgabe[$i][1]} . ' ' . $ausgabe[$i][3] ?></td>
                                <td>%</td>
                            <?php endif ?>
                            <td>CHF</td>
                            <td><?= ${$ausgabe[$i][2]} ?></td>
                        </tr>
                    <?php endfor ?>
                    <tr>
                        <td colspan="5"><a href="einkaufskalkulation"><button>neu Berechnung</button></a></td>
                    </tr>
                </table>
            </td>
            <td class="size30"></td>
        </tr>
    </table>
</body>
</html>