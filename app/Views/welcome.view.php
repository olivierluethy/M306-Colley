<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <title>Colley - Homepage</title>
    <link rel="stylesheet" href="public/css/welcome.css">
    <link rel="stylesheet" href="public/css/sideNavigation.css">
    <link rel="stylesheet" href="public/css/heading.css">
</head>

<body>

    <?php
    include("heading.view.php");
    ?>

    <table>
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

    <script src="public/js/sideNavigation.js"></script>
    <script src="public/js/welcome.js"></script>
</body>

</html>