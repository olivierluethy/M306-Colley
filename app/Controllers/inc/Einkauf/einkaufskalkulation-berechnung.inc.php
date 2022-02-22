<?php
/**
 * Menge
 */
if(isset($_POST['eMenge'])):
    if(!empty($_POST['eMenge'])):
        $MengeMehrfach = $_POST['eMenge'];
    else:
        $MengeMehrfach = 1;
    endif;
endif;
$Menge = 1;

/**
 * Katalogpreis
 */
if(isset($_POST['eKatalogpreis'])):
    if(!empty($_POST['eKatalogpreis'])):
        $Katalogpreis = $_POST['eKatalogpreis'];
    else:
        $Katalogpreis = 0;
    endif;
endif;
$KatalogpreisMehrfach = $Katalogpreis * $MengeMehrfach;
$KatalogpreisPr = 100;

/**
 * Rabatt
 */
if(isset($_POST['eRabattFr'])):
    if(!empty($_POST['eRabattFr'])):
        $RabattFr = $_POST['eRabattFr'];
    else:
        $RabattFr = 0;
        $RabattFrMehrfach = 0;
    endif;
endif;

if(isset($_POST['eRabattPr'])):
    if(!empty($_POST['eRabattPr'])):
        $RabattPr = $_POST['eRabattPr'];
    else:
        $RabattPr = 0;
    endif;
endif;

if($RabattFr == 0 && $RabattPr != 0):
    $RabattFr = $Katalogpreis / 100 * $RabattPr;
    $RabattFrMehrfach = $KatalogpreisMehrfach / 100 * $RabattPr;
elseif($RabattFr != 0 && $RabattPr == 0):
    $RabattPr = $RabattFr / $Katalogpreis * 100;
    $RabattFrMehrfach = $RabattFr;
endif;

/**
 * Rechnungsbetrag
 */
 $RechnungFr = $Katalogpreis - $RabattFr;
 $RechnungFrMehrfach = $KatalogpreisMehrfach - $RabattFrMehrfach;
 $RechnungPr = 100 - $RabattPr;

/**
 * Skonto
 */
if(isset($_POST['eSkontoFr'])):
    if(!empty($_POST['eSkontoFr'])):
        $SkontoFr = $_POST['eSkontoFr'];
    else:
        $SkontoFr = 0;
        $SkontoFrMehrfach = 0;
    endif;
endif;

if(isset($_POST['eSkontoPr'])):
    if(!empty($_POST['eSkontoPr'])):
        $SkontoPr = $_POST['eSkontoPr'];
    else:
        $SkontoPr = 0;
        endif;
endif;

if($SkontoFr == 0 && $SkontoPr != 0):
    $SkontoFr = $RechnungFr / 100 * $SkontoPr;
    $SkontoFrMehrfach = $RechnungFrMehrfach / 100 * $SkontoPr;
elseif($SkontoFr != 0 && $SkontoPr == 0):
    $SkontoPr = $SkontoFr / $RechnungFr * 100;
    $SkontoFrMehrfach = $SkontoFr;
endif;

/**
 * Zahlung
 */
$ZahlungFr = $RechnungFr - $SkontoFr;
$ZahlungFrMehrfach = $RechnungFrMehrfach - $SkontoFrMehrfach;
$ZahlungPr = 100 - $SkontoPr;

/**
 * Bezugskosten
 */
if(isset($_POST['eBezugskosten'])):
    if(!empty($_POST['eBezugskosten'])):
        $Bezugskosten = $_POST['eBezugskosten'];
    else:
        $Bezugskosten = 0;
    endif;
endif;

/**
 * Einstandspreis
 */
$Einstandspreis = $ZahlungFr + $Bezugskosten;
$EinstandspreisMehrfach = $ZahlungFrMehrfach + $Bezugskosten;