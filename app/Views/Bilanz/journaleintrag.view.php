<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/css/style.css">
    <title>Journaleintrag</title>
    <script src="public/js/navigate.js"></script>
    <script src="public/js/darkLightMode.js"></script>
</head>
<body>
    <div class="container">
    <?php include('app/Controllers/inc/header.inc.php'); ?>
        <div class="titel">
            <h2>Journaleintrag</h2>
        </div>
        <div class="text">
            <p>Hier können Sie einen Journaleintrag tätigen</p>
        </div>
        <div class="main journaleintrag-main">
            <div class="fehler">
                <?php
                if(!empty($error)):
                    echo $error;
                endif;
                ?>
            </div>
            <form action="journaleintrag" method="POST">
                <div class="journaleintrag">
                    <?php for($i=0; $i<count($array); $i++): ?>
                        <div class="<?= $array[$i][0] ?>">
                            <label for="<?= $array[$i][1] ?>"><?= $array[$i][2] ?>:</label>
                        </div>
                        <div class="<?= $array[$i][3] ?>">
                            <?php if(!empty($array[$i][4])): ?>
                                <input type="<?= $array[$i][4] ?>" name="<?= $array[$i][1] ?>" id="<?= $array[$i][1] ?>" required
                                <?php if($array[$i][4] == 'number'): ?>
                                    placeholder="123.45" step="0.05" max="9999999.95"
                                <?php elseif($array[$i][4] == 'date'): ?>
                                    value="<?= date('Y-m-d') ?>"
                                <?php endif ?>>
                            <?php else: ?>
                                <select name="<?= $array[$i][1] ?>" id="<?= $array[$i][1] ?>">
                                    <?php for($x=0; $x<count($kontoNr); $x++): ?>
                                        <option value="<?= $kontoId[$x] ?>"><?= $kontoNr[$x] . ' ' . $kontoName[$x] ?></option>
                                    <?php endfor ?>
                                </select>
                            <?php endif ?>
                        </div>
                    <?php endfor ?>
                <!-- Button -->
                    <div class="journal9">
                        <button type="submit" class="btn">Journaleintrag erstellen</button>
                    </div>
                </div>
            </form>
        </div>
        <?php include('app/Controllers/inc/footer.inc.php'); ?>
    </div>
</body>
</html>