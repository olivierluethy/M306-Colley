<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/css/style.css">
    <link rel="stylesheet" href="public/css/menu.css">
    <title>Colley</title>
</head>
<body>
    <h1>Colley</h1>
    <h2>Kalkulationen</h2>
    <p>Welche Art der Kalkulation möchten Sie durchführen?</p>
    <br>
    <table>
        <tr>
            <?php for($i=0; $i<count($kalkulation); $i++): ?>
                <th>
                    <a href="<?= $kalkulation[$i][0] ?>" target="_blank">
                        <div class="option">
                            <img src="public/bilder/kalkulation/<?= $kalkulation[$i][1] ?>" alt="<?= $kalkulation[$i][2] ?>">
                            <p><?= $kalkulation[$i][3] ?></p>
                        </div>
                    </a>
                </th>
            <?php endfor ?>
        </tr>
    </table>

    <script src="public/js/navigate.js"></script>
</body>

</html>