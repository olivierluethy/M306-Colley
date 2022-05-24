<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/css/olivierstyle.css">
    <link rel="stylesheet" href="public/css/heading.css">
    <link rel="shortcut icon" href="assets/favicon.ico">
    <title>Kalkulation</title>
</head>

<body>

    <?php
    include("heading.view.php");
    ?>

    <div class="title">
        <h1>Colley</h1>
        <h2>Wählen Sie die gewünschte Kalkulation.</h2>
    </div>

    <table class="normalTable">
        <tr>
            <th>
                <div class="option">
                    <img src="assets/einkaufs_kalkulation.svg" alt="">
                    <p>Einkaufskalkulation</p>
                </div>
            </th>
            <th>
                <div class="option">
                    <img src="assets/interne_kalkulation.svg" alt="">
                    <p>Internekalkulation</p>
                </div>
            </th>
            <th>
                <div class="option">
                    <img src="assets/verkaufs_kalkulation.svg" alt="">
                    <p>Verkaufskalkulation</p>
                </div>
            </th>
            <th>
                <div class="option">
                    <img src="assets/gesamte_kalkulation.svg" alt="">
                    <p>Gesamtekalkulation</p>
                </div>
            </th>
        </tr>
    </table>

    <script src="public/js/navigate.js"></script>
</body>

</html>