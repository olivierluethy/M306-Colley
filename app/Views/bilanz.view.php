<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/css/olivierstyle.css">
    <link rel="stylesheet" href="public/css/heading.css">
    <link rel="shortcut icon" href="assets/favicon.ico">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Bilanz</title>
</head>

<body>

    <?php
    include("heading.view.php");
    ?>

    <div class="title">
        <h1>Colley</h1>
        <h2>Hier können Sie einen Eintrag ins Journal eingeben, einen Kontoeintrag bearbeiten und Rechnungsnummer
            vergeben.</h2>
    </div>

    <table class="normalTable">
        <tr>
            <th>
                <div class="option">
                    <img src="assets/Kontouebersicht.svg" alt="">
                    <p>Kontoübersicht</p>
                </div>
            </th>
            <th>
                <div class="option">
                    <img src="assets/Journaleintrag.svg" alt="">
                    <p>Journaleintrag</p>
                </div>
            </th>
            <th>
                <div class="option">
                    <img src="assets/Kontoeintrag.svg" alt="">
                    <p>Kontoeintrag bearbeiten</p>
                </div>
            </th>
            <th>
                <div class="option">
                    <img src="assets/Rechnungsnummer.svg" alt="">
                    <p>Rechnungsnummer</p>
                </div>
            </th>
        </tr>
    </table>

    <script src="public/js/navigate.js"></script>
</body>

</html>