<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <title>Colley - Homepage</title>
    <link rel="stylesheet" href="public/css/welcome.css">
    <link rel="stylesheet" href="public/css/heading.css">
    <link rel="stylesheet" href="public/css/olivierstyle.css">
</head>

<body>

    <?php
    include("heading.view.php");
    ?>

    <div class="title">
        <h1>Colley</h1>
        <h2>Willkommen bei Colley. Was wollen Sie machen?</h2>
    </div>

    <table class="normalTable">
        <tr>
            <th>
                <div onclick="goToNeuesKonto()" class="option">
                    <img src="assets/NeuesKonto.svg" alt="">
                    <p>Neues Konto</p>
                </div>
            </th>
            <th>
                <div onclick="goToBilanz()" class="option">
                    <img src="assets/Bilanz.svg" alt="">
                    <p>Bilanz</p>
                </div>
            </th>
            <th>
                <div class="option">
                    <img src="assets/Erfolgsrechnung.svg" alt="">
                    <p>Erfolgsrechnung</p>
                </div>
            </th>
            <th>
                <div class="option">
                    <img src="assets/Jahresabschluss.svg" alt="">
                    <p>Jahresabschluss</p>
                </div>
            </th>
            <th>
                <div class="option">
                    <img src="assets/Kalkulation.svg" alt="">
                    <p>Kalkulation</p>
                </div>
            </th>
        </tr>
    </table>

    <script src="public/js/navigate.js"></script>
</body>

</html>