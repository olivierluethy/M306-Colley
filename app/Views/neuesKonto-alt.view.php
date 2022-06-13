<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/css/style.css">
    <title>Colley</title>
</head>

<body>
    <div class="container">
        <!-- Header -->
        <div class="header">
            <div class="line"></div>
            <div class="colley">
                <h1>Colley</h1>
            </div>
            <div class="line"></div>
        </div>
        <!-- Titel -->
        <div class="titel">
            <h2>Neues Konto</h2>
        </div>
        <!-- Text -->
        <div class="text">
            <p>Bitte geben Sie die gewünschte Kontonummer, einen Titel und einen Verwendungszweck an.</p>
        </div>
        <!-- Neues Konto erstellen -->
        <div class="neuesKonto-main">
            <!-- Fehlermeldungen -->
            <div class="fehler">
                <p id="kontoNrError"></p>
                <p id="titel_konto_error"></p>
                <p id="verwendungszweck_konto_error"></p>
            </div>
            <!-- Formular -->
            <form action="kontoErstellen" method="POST">
                <div class="konto">
                    <div class="konto1">
                        <label for="kontoNr">Kontonummer:</label>
                    </div>
                    <div class="konto2">
                        <input type="number" name="kontoNr" id="kontoNr" placeholder="1000">
                    </div>
                    <div class="konto3">
                        <label for="kontoName">Titel:</label>
                    </div>
                    <div class="konto4">
                        <input type="text" name="kontoName" id="kontoName" placeholder="Titel">
                    </div>
                    <div class="konto5">
                        <label for="kontoZweck">Verwendungszweck:</label>
                    </div>
                    <div class="konto6">
                        <textarea name="kontoZweck" id="kontoZweck" rows="2" placeholder="Verwendungszweck"></textarea>
                    </div>
                    <div class="konto7">
                        <button type="submit" class="btn submit">Konto erstellen</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <script src="public/js/NeuesKonto.js"></script>
    <script src="public/js/navigate.js"></script>
</body>

</html>