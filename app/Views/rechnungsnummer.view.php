<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/css/olivierstyle.css">
    <link rel="stylesheet" href="public/css/heading.css">
    <title>Rechnungsnummer</title>
</head>

<body>
    <?php
    include("heading.view.php");
    ?>

    <div class="title">
        <h1>Colley</h1>
        <h2>Hier können Sie Ihren Rechnungen eine Nummer vergeben und Sie dem jeweiligen Journaleintrag zuweisen.</h2>
    </div>

    <p id="rechnungsnummer_rechnungsnummer_error"></p>
    <p id="journalnummer_rechnungsnummer_error"></p>
    <p id="rechnung_rechnungsnummer_error"></p>

    <form>
        <table class="TabelleKlein margin-auto">
            <tr>
                <td><label for="fname">Rechnungsnummer:</label></td>
                <td><input type="number" id="rechnungsnummer" name="rechnungsnummer"></td>
            </tr>
            <tr>
                <td><label for="lname">Journalnummer:</label></td>
                <td>
                    <input type="text" id="journalnummer" name="journalnummer">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="">Rechnung hinziehen (pdf)</label>
                </td>
                <td>
                    <input type="file" id="rechnung" name="rechnung">
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

    <script src="public/js/clientSideValidationRechnungsnummer.js"></script>
    <script src="public/js/navigate.js"></script>
</body>

</html>