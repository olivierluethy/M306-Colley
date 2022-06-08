<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/css/style.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="header">
            <div class="line"></div>
            <div class="colley"><h1>Colley</h1></div>
            <div class="line"></div>
        </div>¨
        <div class="titel">
            <h2>Kontoübersicht</h2>
        </div>
        <div class="text">
            <p>Eine Übersicht all Ihrer Konten</p>
        </div>
        <div class="main uebersicht-main">
            <div class="konto">
                <?php for($i=0; $i<count($kontoName); $i++): ?>
                    <div>
                        <table>
                            <tr>
                                <th class="left t1">Kontoname:</th>
                                <th class="left t2"><?= $kontoName[$i] ?></th>
                            </tr>
                            <tr>
                                <td>Kontonummer:</td>
                                <td><?= $kontoNr[$i] ?></td>
                            </tr>
                            <tr>
                                <td>Kontozweck:</td>
                                <td><?= $kontoZweck[$i] ?></td>
                            </tr>
                        </table>
                    </div>
                <?php endfor ?>
            </div>
        </div>
    </div>
<script src="public/js/navigate.js"></script>
</body>
</html>