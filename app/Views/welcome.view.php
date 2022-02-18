<?php
session_start();

// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: loginRegister");
    exit;
}
?>

<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Colley - Homepage</title>
    <link rel="stylesheet" href="../public/css/welcome.css">
    <link rel="stylesheet" href="../public/css/sideNavigation.css">
</head>
<body>

<div class="title">
    <div class="menu">
        <span style="font-size:40px;cursor:pointer" onclick="openNav()">&#9776;</span>
    </div>
    <div class="text">
        <h1>Colley</h1>
        <p>Willkommen bei Colley.</p>
        <p>Was wollen Sie machen?</p>
    </div>
</div>

    <div class="optionen">
        <div class="option">
            <img src="../assets/NeuesKonto.svg" alt="">
            <p>Neues Konto</p>
        </div>
        <div onclick="goToBilanz()" class="option">
        <img src="../assets/Bilanz.svg" alt="">
            <p>Bilanz</p>
        </div>
        <div class="option">
        <img src="../assets/Erfolgsrechnung.svg" alt="">
            <p>Erfolgsrechnung</p>
        </div>
        <div class="option">
        <img src="../assets/Jahresabschluss.svg" alt="">
            <p>Jahresabschluss</p>
        </div>
        <div class="option">
        <img src="../assets/Kalkulation.svg" alt="">
            <p>Kalkulation</p>
        </div>
    </div>

    <?php
    include("sideNav.view.php");
    ?>

<script src="../public/js/sideNavigation.js"></script>
<script src="../public/js/welcome.js"></script>
</body>
</html>
