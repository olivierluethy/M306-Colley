<?php
//Menge
if(isset($_POST['eMenge'])):
    if(!empty($_POST['eMenge'])):
        $Menge = $_POST['eMenge'];
    else:
        $Menge = 0;
    endif;
else:
    $Menge = 0;
endif;

// Einstandspreis
if(isset($_POST['eEinstandspreis'])):
    if(!empty($_POST['eEinstandspreis'])):
        $EinstandspreisFr = $_POST['eEinstandspreis'];
    else:
        $EinstandspreisFr = 0;
    endif;
else:
    $EinstandspreisFr = 0;
endif;

// Verkaufssonderkosten
if(isset($_POST['eKosten'])):
    if(!empty($_POST['eKosten'])):
        $KostenFr = $_POST['eKosten'];
    else:
        $KostenFr = 0;
    endif;
else:
    $KostenFr = 0;
endif;

// Skonto
if(isset($_POST['eSkontoFr'])):
    if(!empty($_POST['eSkontoFr'])):
        $SkontoFr = $_POST['eSkontoFr'];
    else:
        $SkontoFr = 0;
    endif;
else:
    $SkontoFr = 0;
endif;

if(isset($_POST['eSkontoPr'])):
    if(!empty($_POST['eSkontoPr'])):
        $SkontoPr = $_POST['eSkontoPr'];
    else:
        $SkontoPr = 0;
    endif;
else:
    $SkontoPr = 0;
endif;

// Rabatt
if(isset($_POST['eRabattFr'])):
    if(!empty($_POST['eRabattFr'])):
        $RabattFr = $_POST['eRabattFr'];
    else:
        $RabattFr = 0;
    endif;
else:
    $RabattFr = 0;
endif;

if(isset($_POST['eRabattPr'])):
    if(!empty($_POST['eRabattPr'])):
        $RabattPr = $_POST['eRabattPr'];
    else:
        $RabattPr = 0;
    endif;
else:
    $RabattPr = 0;
endif;