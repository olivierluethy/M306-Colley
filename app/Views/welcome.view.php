<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/css/style.css">
    <title>Colley</title>
    <script src="public/js/navigate.js"></script>
    <script src="public/js/darkLightMode.js"></script>
</head>
<body>
    <div class="container">
    <?php include('app/Controllers/inc/header.inc.php'); ?>
        <div class="titel"><h2>Welcome</h2></div>
        <div class="text"><p>Was wollen Sie erledigen?</p></div>
        <div class="main welcome-main">
            <?php for($i=0; $i<count($welcome); $i++): ?>
                <div class="<?= $welcome[$i][0] ?>">
                    <a href="<?= $welcome[$i][1] ?>">
                        <div class="option">
                            <img src="public/bilder/welcome/<?= $welcome[$i][2] ?>" alt="<?= $welcome[$i][3] ?>">
                            <p><?= $welcome[$i][4] ?></p>
                        </div>
                    </a>
                </div>
            <?php endfor ?>
        </div>
        <?php include('app/Controllers/inc/footer.inc.php'); ?>
    </div>
</body>
</html>