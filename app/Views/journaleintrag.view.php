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
    <link rel="stylesheet" href="public/css/journaleintrag.css">
    <link rel="stylesheet" href="public/css/sideNavigation.css">
    <link rel="stylesheet" href="public/css/heading.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Journaleintrag</title>
</head>

<body>

    <div class="menu">
        <span style="font-size:40px;cursor:pointer" onclick="openNav()">&#9776;</span>
    </div>
    <div class="title">
        <h1>Colley</h1>
        <p>Bitte wählen Sie das Datum, die Konten und geben Sie den Betrag ein.</p>
    </div>
    <form action="">

    <table>
        <tr>
            <td><label for="fname">Datum:</label></td>
            <td><input type="date" id="date" name="fname"><br>
            <p id="datum_error"></p>
        </td>
        </tr>
        <tr>
            <td><label for="fname">Haben:</label></td>
            <td>
                <select name="haben" id="cars">
                    <option value="1000">1000</option>
                    <option value="1020">1020</option>
                    <option value="1020">1020</option>
                    <option value="1100">1100</option>
                    <option value="1200">1200</option>
                    <option value="1510">1510</option>
                    <option value="1530">1530</option>
                    <option value="2000">2000</option>
                    <option value="2450">2450</option>
                    <option value="2800">2800</option>
                    <option value="5000">5000</option>
                    <option value="5700">5700</option>
                </select><br>
                <p id="haben_error"></p>
            </td>
        </tr>
        <tr>
            <td><label for="fname">Soll:</label></td>
            <td>
                <select name="soll" id="cars">
                    <option value="1000">1000</option>
                    <option value="1020">1020</option>
                    <option value="1020">1020</option>
                    <option value="1100">1100</option>
                    <option value="1200">1200</option>
                    <option value="1510">1510</option>
                    <option value="1530">1530</option>
                    <option value="2000">2000</option>
                    <option value="2450">2450</option>
                    <option value="2800">2800</option>
                    <option value="5000">5000</option>
                    <option value="5700">5700</option>
                </select><br>
                <p id="haben_error"></p>
            </td>
        </tr>
        <tr>
            <td>
                <label for="fname">Betrag:</label>
            </td>
            <td>
                <input type="number" id="fname" name="fname" placeholder="CHF">
            </td>
        </tr>
        <tr>
            <td>

            </td>
            <td>
                <button type="submit">Journaleintrag erstellen</button>
            </td>
        </tr>
    </table>
    </form>

    <?php
      include("sideNav.view.php");
    ?>

    <script src="public/js/clientSideValidationJournaleintrag.js"></script>
    <script src="public/js/sideNavigation.js"></script>
</body>

</html>