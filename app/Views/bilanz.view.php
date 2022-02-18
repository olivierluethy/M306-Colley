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
    <link rel="stylesheet" href="../public/css/bilanz.css">
    <link rel="stylesheet" href="../public/css/sideNavigation.css">
    <title>Bilanz - Homepage</title>
</head>
<body>
<div class="title">
    <div class="menu">
        <span style="font-size:40px;cursor:pointer" onclick="openNav()">&#9776;</span>
    </div>
    <div class="text">
        <h1>Colley</h1>
        <p>Hier können Sie einen Eintrag ins Journal eingeben, einen Kontoeintrag bearbeiten und Rechnungsnummern vergeben.</p>
    </div>
</div>

    <div class="optionen">
        <div class="option">
            <img style="width: 80%;" src="../assets/Kontouebersicht.png" alt="">
            <p>Kontoübersicht</p>
        </div>
        <div class="option">
        <img src="../assets/Journaleintrag.svg" alt="">
            <p>Journaleintrag</p>
        </div>
        <div class="option">
        <img src="../assets/Kontoeintrag.svg" alt="">
            <p>Kontoeintrag bearbeiten</p>
        </div>
        <div class="option">
        <img src="../assets/Rechnungsnummer.svg" alt="">
            <p>Rechnungsnummer</p>
        </div>
    </div>

    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="#">Hello {Name}</a>
        <a href="#">Neues Konto</a>
        <a href="#">Bilanz</a>
        <a href="#">Erfolgsrechnung</a>
        <a href="#">Jahresabschluss</a>
        <a href="#">Kalkulation</a>
        <a href="logout">Logout</a>
    </div>

<script src="../public/js/sideNavigation.js"></script>
</body>
</html>