<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/css/style.css">
    <link rel="stylesheet" href="public/css/grid/einkaufskalkulation.grid.css">
    <title>Colley</title>
</head>
<body>
    <div class="container">
        <div class="header"><h1>Colley</h1></div>
        <div class="main">
            <div class="sub-header"><h2>Einkaufskalkulation</h2></div>
            <div class="text"><p>Lorem Ipsum</p></div>
            <div class="kalkulation">
                <div class="eingabe">
                    <?php for($i=0; $i<count($eingabe); $i++): ?>
                        <div class="<?= $eingabe[$i][0] ?>"><label for="<?= $eingabe[$i][3] ?>"><?= $eingabe[$i][1] ?></label></div>
                        <div class="<?= $eingabe[$i][2] ?>"><input type="text" name="<?= $eingabe[$i][3] ?>" id="<?= $eingabe[$i][3] ?>"></div>
                    <?php endfor ?>
                    <div class="ebtn"><button>Berechnen</button></div>
                </div>
                <div class="ausgabe">
                    <?php for($i=0; $i<count($ausgabe); $i++): ?>
                        <div class="<?= $ausgabe[$i][0] ?>"><label for="<?= $ausgabe[$i][3] ?>"><?= $ausgabe[$i][1] ?></label></div>
                        <div class="<?= $ausgabe[$i][2] ?>"><input type="text" name="<?= $ausgabe[$i][3] ?>" id="<?= $ausgabe[$i][3] ?>" class="readonly" readonly></div>
                    <?php endfor ?>
                </div>
            </div>
        </div>
    </div>
</body>
</html>