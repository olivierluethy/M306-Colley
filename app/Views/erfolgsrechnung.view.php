<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/css/olivierstyle.css">
    <link rel="stylesheet" href="public/css/heading.css">
    <link rel="shortcut icon" href="assets/favicon.ico">
    <title>Erfolgsrechnung</title>
</head>

<body>

    <?php
    include("heading.view.php");
    ?>

    <div class="title">
        <h1>Colley</h1>
        <h2>Hier können Sie eine Erfolgsrechnung eröffnen, bearbeiten und abschliessen.</h2>
    </div>

    <table class="normalTable">
        <tr>
            <th>
                <div class="option">
                    <img src="assets/er_bearbeiten.svg" alt="">
                    <p>Erfolgsrechnung eröffnen</p>
                </div>
            </th>
            <th>
                <div class="option">
                    <img src="assets/er_bearbeiten.svg" alt="">
                    <p>Erfolgsrechnung bearbeiten</p>
                </div>
            </th>
            <th>
                <div class="option">
                    <img src="assets/er_abschliessen.svg" alt="">
                    <p>Erfolgsrechnung abschliessen</p>
                </div>
            </th>
        </tr>
    </table>

    <script src="public/js/navigate.js"></script>
</body>

</html>