<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/css/heading.css">
    <link rel="stylesheet" href="public/css/olivierstyle.css">
    <title>Journaleintrag</title>
</head>

<body>

    <div class="title">
        <h1>Colley</h1>
        <h2>Bitte wählen Sie das Datum, die Konten und geben Sie den Betrag ein.</h2>
    </div>

    <?php
    include("heading.view.php");
    ?>

    <p id="datum_error"></p>
    <p id="haben_error"></p>
    <p id="soll_error"></p>
    <p id="betrag_error"></p>

    <form>

        <table class="journaltabelle margin-auto">
            <tr>
                <td><label>Datum:</label></td>
                <td><input type="date" id="date" name="fname"><br>
                </td>
            </tr>
            <tr>
                <td><label>Haben:</label></td>
                <td>
                    <select name="haben" id="haben">
                        <option value="">-- Select --</option>
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
                </td>
            </tr>
            <tr>
                <td><label>Soll:</label></td>
                <td>
                    <select name="soll" id="soll">
                        <option value="">-- Select --</option>
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
                </td>
            </tr>
            <tr>
                <td>
                    <label>Betrag:</label>
                </td>
                <td>
                    <input type="number" id="betrag" placeholder="CHF">
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

    <script src="public/js/clientSideValidationJournaleintrag.js"></script>
    <script src="public/js/navigate.js"></script>
</body>

</html>