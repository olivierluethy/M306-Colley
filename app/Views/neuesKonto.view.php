<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/css/style.css">
    <title>Colley</title>
    <script src="public/js/navigate.js"></script>
</head>
<body>
    <div class="container">
    <!-- Header -->
    <?php include('app/Controllers/inc/header.inc.php'); ?>
    <!-- Titel -->
        <div class="titel"><h2>Neues Konto</h2></div>
    <!-- Text -->
        <div class="text"><p>Bitte geben Sie die gewünschte Kontonummer, einen Titel und einen Verwendungszweck an.</p></div>
    <!-- Neues Konto erstellen -->
        <div class="main neuesKonto-main">
        <!-- Fehlermeldungen -->
            <div class="fehler">
                <?php
                if(!empty($error)):
                    echo $error;
                endif;
                ?>
            </div>
        <!-- Formular -->
            <form action="neues-konto" method="POST">
                <div class="konto">
                <!-- Kontonummer -->
                    <div class="konto1">
                        <label for="kontoNr">Kontonummer:</label>
                    </div>
                    <div class="konto2">
                        <select name="kontoNr" id="kontoNr">
                            <?php for($i=0; $i<count($kontoplan); $i++): ?>
                                <option value="<?= $planValue[$i] ?>" <?php if($planValue[$i] == ''): ?> disabled class="leer" <?php endif ?>><?= $planNr[$i] . ' ' . $planTitel[$i] ?></option>
                            <?php endfor ?>
                        </select>
                    </div>
                <!-- Kontoname -->
                    <div class="konto3">
                        <label for="kontoName">Kontotitel:</label>
                    </div>
                    <div class="konto4">
                        <input type="text" name="kontoName" id="kontoName" placeholder="Kontotitel" required>
                    </div>
                <!-- Verwendungszweck -->
                    <div class="konto5">
                        <label for="kontoZweck">Verwendungszweck:</label>
                    </div>
                    <div class="konto6">
                        <textarea name="kontoZweck" id="kontoZweck" rows="2" placeholder="Verwendungszweck" required></textarea>
                    </div>
                <!-- Button -->
                    <div class="konto7">
                        <button type="submit">Konto erstellen</button>
                    </div>
                </div>
            </form>
        </div>
        <?php include('app/Controllers/inc/footer.inc.php'); ?>
    </div>
</body>
</html>