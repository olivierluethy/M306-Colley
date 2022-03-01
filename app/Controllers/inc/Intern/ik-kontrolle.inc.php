<?php
// Menge
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

// Gemeinkosten
if(isset($_POST['eGemeinFr'])):
    if(!empty($_POST['eGemeinFr'])):
        $GemeinkostenFr = $_POST['eGemeinFr'];
    else:
        $GemeinkostenFr = 0;
    endif;
else: 
    $GemeinkostenFr = 0;
endif;

if(isset($_POST['eGemeinPr'])):
    if(!empty($_POST['eGemeinPr'])):
        $GemeinkostenPr = $_POST['eGemeinPr'];
    else:
        $GemeinkostenPr = 0;
    endif;
else: 
    $GemeinkostenPr = 0;
endif;

// Reingewinn
if(isset($_POST['eGewinnFr'])):
    if(!empty($_POST['eGewinnFr'])):
        $GewinnFr = $_POST['eGewinnFr'];
    else:
        $GewinnFr = 0;
    endif;
else:
    $GewinnFr = 0;
endif;

if(isset($_POST['eGewinnPr'])):
    if(!empty($_POST['eGewinnPr'])):
        $GewinnPr = $_POST['eGewinnPr'];
    else:
        $GewinnPr = 0;
    endif;
else:
    $GewinnPr = 0;
endif;