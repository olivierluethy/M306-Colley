<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/css/style.css">
    <title>Bilanz</title>
    <script src="public/js/darkLightMode.js"></script>
</head>
<body>
    <div class="container">
    <?php include('app/Controllers/inc/header.inc.php'); ?>
        <div class="titel"><h2>Bilanz</h2></div>
        <div class="text">
            <p>Hier können Sie die Konteoübersiche einsehen, einen Eintrag ins Journal eingeben, einen Kontoeintrag bearbeiten und Rechnungsnummern vergeben</p>
        </div>
        <div class="main bilanz-main">
            <?php for($i=0; $i<count($array); $i++): ?>
                <div class="<?= $array[$i][0] ?>">
                    <a href="<?= $array[$i][1] ?>">
                        <div class="option">
                            <img src="public/bilder/bilanz/<?= $array[$i][2] ?>" alt="<?= $array[$i][3] ?>">
                            <p><?= $array[$i][4] ?></p>
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