<?php
session_start();

// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: loginRegister");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/css/bilanz.css">
    <link rel="stylesheet" href="public/css/sideNavigation.css">
    <link rel="stylesheet" href="public/css/heading.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Bilanz</title>
</head>
<body>

    <div class="menu">
        <span style="font-size:40px;cursor:pointer" onclick="openNav()">&#9776;</span>
    </div>
    <div class="title">
        <h1>Colley</h1>
        <p>Hier können Sie einen Eintrag ins Journal eingeben, einen Kontoeintrag bearbeiten und Rechnungsnummern vergeben.</p>
    </div>

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

    <?php
    include("sideNav.view.php");
    ?>

<script src="public/js/sideNavigation.js"></script>
</body>
</html>