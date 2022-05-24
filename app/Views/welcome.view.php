<!DOCTYPE html>
<html lang="de" data-theme="light">

<head>
    <meta charset="UTF-8">
    <title>Colley - Homepage</title>
    <!--<link rel="stylesheet" href="public/css/welcome.css">-->
    <!--<link rel="stylesheet" href="public/css/heading.css">-->
    <link rel="stylesheet" href="public/css/olivierstyle.css">
    <link rel="stylesheet" href="public/css/style.css">
    <link rel="shortcut icon" href="assets/favicon.ico">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <?php include("heading.view.php"); ?>

    <div class="title">
        <h1>Colley</h1>
        <h2>Übersicht</h2>
    </div>

    <p class="center">Willkommen bei Colley. Was wollen Sie machen?</p>
    <br>
    <table class="normalTable">
        <tr>
            <?php for($i=0; $i<count($welcome); $i++): ?>
            <th>
                <a href="<?= $welcome[$i][0] ?>">
                    <div onclick="<?= $welcome[$i][1] ?>" class="option">
                        <img src="assets/<?= $welcome[$i][2] ?>" alt="<?= $welcome[$i][3] ?>">
                        <p><?= $welcome[$i][4] ?></p>
                    </div>
                </a>
            </th>
            <?php endfor ?>
        </tr>
    </table>

    <?php
    include("footer.view.php");
    ?>

    <script src="public/js/navigate.js"></script>
</body>

</html>