<?php
// Menge
if(isset($_POST['eMenge'])):
    if(!empty($_POST['eMenge'])):
        $Menge = $_POST['eMenge'];
    else: $Menge = 0;
    endif;
else: $Menge = 0;
endif;

// Katalogpreis
if(isset($_POST['eKatalogpreis'])):
    if(!empty($_POST['eKatalogpreis'])):
        $Katalogpreis = $_POST['eKatalogpreis'];
    else: $Katalogpreis = 0;
    endif;
else: $Katalogpreis = 0;
endif;

// Rabatt
if(isset($_POST['eRabattFr'])):
    if(!empty($_POST['eRabattFr'])):
        $RabattFr = $_POST['eRabattFr'];
    else: $RabattFr = 0;
    endif;
else: $RabattFr = 0;
endif;

if(isset($_POST['eRabattPr'])):
    if(!empty($_POST['eRabattPr'])):
        $RabattPr = $_POST['eRabattPr'];
    else: $RabattPr = 0;
    endif;
else: $RabattPr = 0;
endif;

// Skonto
if(isset($_POST['eSkontoFr'])):
    if(!empty($_POST['eSkontoFr'])):
        $SkontoFr = $_POST['eSkontoFr'];
    else: $SkontoFr = 0;
    endif;
else: $SkontoFr = 0;
endif;

if(isset($_POST['eSkontoPr'])):
    if(!empty($_POST['eSkontoPr'])):
        $SkontoPr = $_POST['eSkontoPr'];
    else: $SkontoPr = 0;
    endif;
else: $SkontoPr = 0;
endif;

// Bezugskosten
if(isset($_POST['eBezugskosten'])):
    if(!empty($_POST['eBezugskosten'])):
        $Bezugskosten = $_POST['eBezugskosten'];
    else: $Bezugskosten = 0;
    endif;
else: $Bezugskosten = 0;
endif;
