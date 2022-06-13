<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/css/style.css">
    <link rel="stylesheet" href="public/css/menu.css">
    <title>Colley</title>
    <script src="public/js/darkLightMode.js"></script>
</head>
<body>
    <div class="container">
    <?php include('app/Controllers/inc/header.inc.php'); ?>
        <div class="titel">
            <h2>Kalkulationen</h2>
        </div>
        <div class="text">
            <p>Welche Art der Kalkulation möchten Sie durchführen?</p>
        </div>
        <div class="main kalkulation-main">
            <?php for($i=0; $i<count($kalkulation); $i++): ?>
                <div class="<?= $kalkulation[$i][0] ?>">
                    <a href="<?= $kalkulation[$i][1] ?>" target="_blank">
                        <div class="option">
                            <img src="public/bilder/kalkulation/<?= $kalkulation[$i][2] ?>" alt="<?= $kalkulation[$i][3] ?>">
                            <p><?= $kalkulation[$i][4] ?></p>
                        </div>
                    </a>
                </div>
            <?php endfor ?>
        </div>
        <?php include('app/Controllers/inc/footer.inc.php'); ?>
    </div>

    <script src="public/js/navigate.js"></script>
</body>

</html>