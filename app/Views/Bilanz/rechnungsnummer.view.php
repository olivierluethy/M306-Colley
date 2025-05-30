<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/css/style.css">
    <title>Rechnungsnummer</title>
    <script src="public/js/navigate.js"></script>
    <script src="public/js/darkLightMode.js"></script>
</head>
<body>
    <div class="container">
    <?php include('app/Controllers/inc/header.inc.php'); ?>
        <div class="titel">
            <h2>Rechnungsnummer</h2>
        </div>
        <div class="text">
            <p>Hier können Sie Ihren Rechnungen eine Nummer vergeben und Sie dem jeweiligen Journaleintrag zuweisen.</p>
        </div>
        <div class="main rechnung-main">
            <div class="fehler">
                <?php if(!empty($error)): echo $error; endif ?>
            </div>
            <form action="rechnungsnummer" method="POST">
                <div class="form">
                    <div class="form1">
                        <label for="rechnungsnummer">Rechnungsnummer:</label>
                    </div>
                    <div class="form2">
                        <input type="number" name="rechnungsnummer" id="rechnungsnummer">
                    </div>
                    <div class="form3">
                        <label for="journalnummer">Journalnummer:</label>
                    </div>
                    <div class="form4">
                        <select name="journalnummer" id="journalnummer">
                            <?php for($x=0; $x<count($journalID); $x++): ?>
                                <option value="<?= $journalID[$x] ?>"><?= $journalID[$x] ?></option>
                            <?php endfor ?>
                        </select>
                    </div>
                    <div class="form5">
                        <label for="rechnung">Rechnung hinziehen (PDF)</label>
                    </div>
                    <div class="form6">
                        <input type="file" name="rechnung" id="rechnung">
                    </div>
                    <div class="form7">
                        <button type="submit">Rechnungsnummer erstellen</button>
                    </div>
                </div>
            </form>
        </div>
        <?php include('app/Controllers/inc/footer.inc.php'); ?>
    </div>
    <script src="public/js/navigate.js"></script>
</body>
</html>