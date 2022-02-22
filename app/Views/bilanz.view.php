<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/css/bilanz.css">
    <link rel="stylesheet" href="public/css/sideNavigation.css">
    <link rel="stylesheet" href="public/css/heading.css">
    <title>Bilanz</title>
</head>

<body>

    <?php
    include("heading.view.php");
    ?>

    <table>
        <tr>
            <th>
                <div class="option">
                    <img style="width: 9.5%;" src="assets/Kontouebersicht.png" alt="">
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

    <script src="public/js/sideNavigation.js"></script>
</body>

</html>