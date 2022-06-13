<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/css/style.css">
    <title>Colley</title>
</head>
<body>
<div class="container">
<?php include('app/Controllers/inc/header.inc.php'); ?>
    <div class="titel">
        <h2>Journaleintrag Bearbeiten</h2>
    </div>
    <div class="text">
        <p>Hier können Sie einen Journaleintrag bearbeiten resp. korrigieren</p>
    </div>
    <div class="main journaleintragBearbeiten-main">
        <div class="fehler">
            <?php if(isset($error)): echo $error; endif ?>
        </div>
        <div class="table">
            <table>
                <tr>
                    <th>Journal-ID</th>
                    <th class="puffer"></th>
                    <th>Datum</th>
                    <th class="puffer"></th>
                    <th>Soll</th>
                    <th class="puffer"></th>
                    <th>Haben</th>
                    <th class="puffer"></th>
                    <th>Betrag</th>
                    <th class="puffer"></th>
                    <th>Bearbeiten</th>
                </tr>
                <?php for($i=0; $i<count($journalID); $i++): ?>
                    <tr>
                        <th class="left"><?= $journalID[$i] ?></th>
                        <td></td>
                        <td><?= $datum[$i] ?></td>
                        <td></td>
                        <td class="left">
                            <?php
                            for($x =0; $x<count($kontoId); $x++):
                                if($soll[$i] == $kontoId[$x]):
                                    echo $kontoName[$x];
                                endif;
                            endfor;
                            ?>
                        </td>
                        <td></td>
                        <td class="left">
                            <?php
                            for($x=0; $x<count($kontoId); $x++):
                                if($haben[$i] == $kontoId[$x]):
                                    echo $kontoName[$x];
                                endif;
                            endfor;
                            ?>
                        </td>
                        <td></td>
                        <td class="right"><?= $betrag[$i] ?></td>
                        <td></td>
                        <td><a href="eintrag?id=<?= $i ?>"><button type="button">bearbeiten</button></a></td>
                    </tr>
                <?php endfor ?>
            </table>
        </div>
    </div>
    <?php include('app/Controllers/inc/footer.inc.php'); ?>
    </div>
<script src="public/js/navigate.js"></script>
</body>
</html>