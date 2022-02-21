<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/css/journaleintrag.css">
    <link rel="stylesheet" href="public/css/sideNavigation.css">
    <link rel="stylesheet" href="public/css/heading.css">
    <title>Journaleintrag</title>
</head>
<body>
<div class="title">
    <div class="menu">
        <span style="font-size:40px;cursor:pointer" onclick="openNav()">&#9776;</span>
    </div>
    <div class="text">
        <h1>Colley</h1>
        <p>Bitte wählen Sie das Datum, die Konten und geben Sie den Betrag ein.</p>
    </div>
</div>

<form action="/action_page.php">
  <label for="fname">Datum:</label><br>
  <input type="date" id="date" name="date"><br><br>
  <label for="lname">Haben:</label><br>
  <select name="haben" id="haben">
    <option value="volvo">Volvo</option>
    <option value="saab">Saab</option>
    <option value="opel">Opel</option>
    <option value="audi">Audi</option>
  </select><br><br>
  <label for="lname">Soll:</label><br>
  <select name="haben" id="haben">
    <option value="volvo">Volvo</option>
    <option value="saab">Saab</option>
    <option value="opel">Opel</option>
    <option value="audi">Audi</option>
  </select><br><br>
  <label for="betrag">Betrag:</label><br>
  <input type="number" id="betrag" name="betrag" placeholder="CHF"><br><br>
  <input type="submit" value="Submit">
</form> 

<?php
    include("sideNav.view.php");
    ?>

<script src="public/js/sideNavigation.js"></script>
</body>
</html>