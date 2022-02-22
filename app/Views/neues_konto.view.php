<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/css/neues_konto.css">
    <link rel="stylesheet" href="public/css/sideNavigation.css">
    <link rel="stylesheet" href="public/css/heading.css">
    <title>Neues Konto</title>
</head>

<body>
    <?php
    include("heading.view.php");
    ?>

    <form action="">
        <table>
            <tr>
                <td><label for="fname">Kontonummer:</label></td>
                <td><input type="number" id="kontonummer" name="kontonummer"></td>
            </tr>
            <p id="kontonummer_konto_error"></p>
            <tr>
                <td><label for="lname">Titel:</label></td>
                <td>
                    <input type="text" id="titel" name="titel">
                </td>
            </tr>
            <p id="titel_konto_error"></p>
            <tr>
                <td>
                    <p>Verwendungszweck:</p>
                </td>
                <td>
                    <textarea name="verwendungszweck" id="verwendungszweck" cols="30" rows="10"></textarea>
                </td>
            </tr>
            <p id="verwendungszweck_konto_error"></p>
            <tr>
                <td>

                </td>
                <td>
                    <button type="submit">Journaleintrag erstellen</button>
                </td>
            </tr>
        </table>
    </form>

    <script src="public/js/clientSideValidationNeuesKonto.js"></script>
    <script src="public/js/sideNavigation.js"></script>
</body>

</html>