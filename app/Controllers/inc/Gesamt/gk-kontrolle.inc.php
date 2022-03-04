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

// Katalogpreis Einkauf
if(isset($_POST['eKatalogpreisFr'])):
    if(!empty($_POST['eKatalogpreisFr'])):
        $eKatalogpreisFr = $_POST['eKatalogpreisFr'];
    else:
        $eKatalogpreisFr = 0;
    endif;
else:
    $eKatalogpreisFr = 0;
endif;

// Rabatt Einkauf
if(isset($_POST['eRabattFr'])):
    if(!empty($_POST['eRabattFr'])):
        $eRabattFr = $_POST['eRabattFr'];
    else:
        $eRabattFr = 0;
    endif;
else:
    $eRabattFr = 0;
endif;

if(isset($_POST['eRabattPr'])):
    if(!empty($_POST['eRabattPr'])):
        $eRabattPr = $_POST['eRabattPr'];
    else:
        $eRabattPr = 0;
    endif;
else:
    $eRabattPr = 0;
endif;

// Skonto Einkauf
if(isset($_POST['eSkontoFr'])):
    if(!empty($_POST['eSkontoFr'])):
        $eSkontoFr = $_POST['eSkontoFr'];
    else:
        $eSkontoFr = 0;
    endif;
else:
    $eSkontoFr = 0;
endif;

if(isset($_POST['eSkontoPr'])):
    if(!empty($_POST['eSkontoPr'])):
        $eSkontoPr = $_POST['eSkontoPr'];
    else:
        $eSkontoPr = 0;
    endif;
else:
    $eSkontoPr = 0;
endif;

// Bezugskosten Einkauf
if(isset($_POST['eBezugskostenFr'])):
    if(!empty($_POST['eBezugskostenFr'])):
        $eKostenFr = $_POST['eBezugskostenFr'];
    else:
        $eKostenFr = 0;
    endif;
else:
    $eKostenFr = 0;
endif;

// Gemeinkosten
if(isset($_POST['eKostenFr'])):
    if(!empty($_POST['eKostenFr'])):
        $KostenFr = $_POST['eKostenFr'];
    else:
        $KostenFr = 0;
    endif;
else:
    $KostenFr = 0;
endif;

if(isset($_POST['eKostenPr'])):
    if(!empty($_POST['eKostenPr'])):
        $KostenPr = $_POST['eKostenPr'];
    else:
        $KostenPr = 0;
    endif;
else:
    $KostenPr = 0;
endif;

// Gewinn
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

// Versandkosten
if(isset($_POST['vVersandkostenFr'])):
    if(!empty($_POST['vVersandkostenFr'])):
        $vKostenFr = $_POST['vVersandkostenFr'];
    else:
        $vKostenFr = 0;
    endif;
else:
    $vKostenFr = 0;
endif;

// Skonto Verkauf
if(isset($_POST['vSkontoFr'])):
    if(!empty($_POST['vSkontoFr'])):
        $vSkontoFr = $_POST['vSkontoFr'];
    else:
        $vSkontoFr = 0;
    endif;
else:
    $vSkontoFr = 0;
endif;

if(isset($_POST['vSkontoPr'])):
    if(!empty($_POST['vSkontoPr'])):
        $vSkontoPr = $_POST['vSkontoPr'];
    else:
        $vSkontoPr = 0;
    endif;
else:
    $vSkontoPr = 0;
endif;

// Rabatt Verkauf
if(isset($_POST['vRabattFr'])):
    if(!empty($_POST['vRabattFr'])):
        $vRabattFr = $_POST['vRabattFr'];
    else:
        $vRabattFr = 0;
    endif;
else:
    $vRabattFr = 0;
endif;

if(isset($_POST['vRabattPr'])):
    if(!empty($_POST['vRabattPr'])):
        $vRabattPr = $_POST['vRabattPr'];
    else:
        $vRabattPr = 0;
    endif;
else:
    $vRabattPr = 0;
endif;