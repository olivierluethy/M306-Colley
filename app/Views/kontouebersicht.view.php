<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/css/olivierstyle.css">
    <link rel="stylesheet" href="public/css/heading.css">
    <title>Kontoübersicht</title>
</head>

<body>

    <?php
    include("heading.view.php");
    ?>

<div class="title">
    <h1>Colley</h1>
    <h2>Hier ist eine Übersicht aller Konten</h2>
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

    <script src="public/js/navigate.js"></script>
</body>

</html>