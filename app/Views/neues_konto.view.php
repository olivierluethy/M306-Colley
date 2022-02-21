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
    <link rel="stylesheet" href="public/css/neues_konto.css">
    <link rel="stylesheet" href="public/css/sideNavigation.css">
    <link rel="stylesheet" href="public/css/heading.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Neues Konto</title>
</head>
<body>
<div class="title">
    <div class="menu">
        <span style="font-size:40px;cursor:pointer" onclick="openNav()">&#9776;</span>
    </div>
    <div class="text">
        <h1>Colley</h1>
        <p>Bitte geben Sie die gewünschte Kontonummer, einen Titel und einen Verwendungszweck an.</p>
    </div>
</div>

    <form action="/action_page.php">
  <label for="fname">Kontonummer:</label>
  <input type="number" id="kontonummer" name="kontonummer">
  <p id="kontonummer_konto_error"></p>
  <label for="lname">Titel:</label>
  <input type="text" id="titel" name="titel">
  <p id="titel_konto_error"></p>
  <label for="lname">Verwendungszweck:</label>
  <textarea name="verwendungszweck" id="verwendungszweck" cols="30" rows="10"></textarea>
  <p id="verwendungszweck_konto_error"></p>
  <input type="submit" value="Erstellen">
</form>

    <?php
    include("sideNav.view.php");
    ?>

<script src="public/js/clientSideValidationNeuesKonto.js"></script>
<script src="public/js/sideNavigation.js"></script>
</body>
</html>