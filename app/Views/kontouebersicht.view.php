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
    <link rel="stylesheet" href="public/css/kontouebersicht.css">
    <link rel="stylesheet" href="public/css/sideNavigation.css">
    <link rel="stylesheet" href="public/css/heading.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Kontoübersicht</title>
</head>
<body>

    <div class="menu">
        <span style="font-size:40px;cursor:pointer" onclick="openNav()">&#9776;</span>
    </div>
    <div class="title">
        <h1>Colley</h1>
        <p>Hier ist eine Übersicht aller Konten.</p>
    </div>


<div class="konten">
    <div class="konto">
        <p>1000</p>
        <p>Kasse</p>
        <p>Kasse im Büro</p>
    </div>
    <div class="konto">
        <p>1020</p>
        <p>Bankkonto</p>
        <p>Bankkonto für Rechnungsbeträge der Kunden</p>
    </div>
    <div class="konto">
        <p>1020</p>
        <p>Sparkonto</p>
        <p>Sparkonto für Rückstellungen und Steuern</p>
    </div>
    <div class="konto">
        <p>1100</p>
        <p>Debitoren</p>
        <p>Rechnungen an Kunden</p>
    </div>
    <div class="konto">
        <p>1200</p>
        <p>Lager</p>
        <p>Handelswaren im Lager</p>
    </div>
    <div class="konto">
        <p>1510</p>
        <p>Mobiliar und Einrichtungen</p>
        <p>Gesamte Einrichtung und Mobiliar</p>
    </div>
    <div class="konto">
        <p>1530</p>
        <p>Fahrzeuge</p>
        <p>Fahrzeuge aller Mitarbeiter</p>
    </div>
    <div class="konto">
        <p>2000</p>
        <p>Kreditoren</p>
        <p>Rechnungen von Lieferanten</p>
    </div>
    <div class="konto">
        <p>2450</p>
        <p>Darlehen</p>
        <p>Darlehen für Unternehmensgründung bei der Bank</p>
    </div>
    <div class="konto">
        <p>2800</p>
        <p>Eigenkapital</p>
        <p>Wert zu beginn des Jahres</p>
    </div>
    <div class="konto">
        <p>5000</p>
        <p>Lohnzahlungen</p>
        <p>Alle Löhne für Mitarbeiter</p>
    </div>
    <div class="konto">
        <p>5700</p>
        <p>Sozialversicherungsaufwand</p>
        <p>Die Sozialversicherungsaufwände für Mitarbeiter</p>
    </div>
</div>


<?php
    include("sideNav.view.php");
    ?>

<script src="public/js/sideNavigation.js"></script>
</body>
</html>