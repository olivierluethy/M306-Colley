<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/css/style.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="header">
            <div class="line"></div>
            <div class="colley">
                <h1>Colley</h1>
            </div>
            <div class="line"></div>
        </div>
        <div class="titel">
            <h2>Journaleintrag Bearbeiten</h2>
        </div>
        <div class="text">
            <p>Hier können Sie den Journaleintrag mit der ID  <?= $journal ?> bearbeiten</p>
        </div>
        <div class="main eintrag-main">
            <form action="journaleintragBearbeiten" method="POST">
                <div class="eintrag">
                    <div class="eintrag1">
                        <label for="id">ID</label>
                    </div>
                    <div class="eintrag2">
                        <input type="number" name="id" id="id" value="<?= $journal ?>" readonly>
                    </div>
                    <div class="eintrag3">
                        <label for="datum">Datum:</label>
                    </div>
                    <div class="eintrag4">
                        <input type="date" name="datum" id="datum" value="<?= $datum ?>">
                    </div>
                    <div class="eintrag5">
                        <label for="soll">Soll:</label>
                    </div>
                    <div class="eintrag6">
                        <select name="soll" id="soll">
                            <?php for($i=0; $i<count($kontoNr); $i++):?>
                                <option value="<?= $kontoId[$i] ?>" <?php if($soll == $kontoId[$i]): echo 'selected'; endif ?>><?= $kontoNr[$i] . ' ' . $kontoName[$i] ?></option>
                            <?php endfor ?>
                        </select>
                    </div>
                    <div class="eintrag7">
                        <label for="haben">Haben:</label>
                    </div>
                    <div class="eintrag8">
                        <select name="haben" id="haben">
                            <?php for($i=0; $i<count($kontoNr); $i++): ?>
                                <option value="<?= $kontoId[$i] ?>" <?php if($haben == $kontoId[$i]): echo 'selected'; endif ?>><?= $kontoNr[$i] . ' ' . $kontoName[$i] ?></option>
                            <?php endfor ?>
                        </select>
                    </div>
                    <div class="eintrag9">
                        <label for="betrag">Betrag:</label>
                    </div>
                    <div class="eintrag10">
                        <input type="number" name="betrag" id="betrag" step="0.05" value="<?= $betrag ?>">
                    </div>
                    <div class="eintrag11">
                        <button type="submit">Bearbeiten</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>