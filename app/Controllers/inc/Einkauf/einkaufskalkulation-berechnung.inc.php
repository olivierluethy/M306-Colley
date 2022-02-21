<?php
// Einkaufskalkulation

/**
 * Katalogpreis
 */
$katalogpreisProzent = 100;

if(isset($_POST['eKatalogpreisFr'])):
    if(!empty($_POST['eKatalogpreisFr'])):
        $katalogpreisFr = $_POST['eKatalogpreisFr'];
    else:
        $katalogpreisFr = 0;
    endif;
endif;

/**
 * Rabatt
 */
// Definition
if(isset($_POST['eRabattProzent'])):
    if(!empty($_POST['eRabattProzent'])):
        $rabattProzent = $_POST['eRabattProzent'];
    else:
        $rabattProzent = '';
    endif;
endif;

if(isset($_POST['eRabattFr'])):
    if(!empty($_POST['eRabattFr'])):
        $rabattFr = $_POST['eRabattFr'];
    else:
        $rabattFr = '';
    endif;
endif;

// Prozentberechnung
if($rabattProzent != '' && $rabattFr == ''):
    $rabattFr = $katalogpreisFr / 100 * $rabattProzent;
endif;

// Preisberechnung
if($rabattProzent == '' && $rabattFr != ''):
    $rabattProzent = $rabattFr / $katalogpreisFr * 100;
endif;

// Wenn keine Vergünstigung
if($rabattProzent == '' && $rabattFr == ''):
    $rabattProzent = 0;
    $rabattFr = 0;
endif;

/**
 * Rechnungsbetrag
 */
$rechnungsbetragFr = $katalogpreisFr - $rabattFr;
$rechnungsbetragProzent = $katalogpreisProzent - $rabattProzent;

/**
 * Skonto
 */
// Definition
if(isset($_POST['eSkontoProzent'])):
    if(!empty($_POST['eSkontoProzent'])):
        $skontoProzent = $_POST['eSkontoProzent'];
    else:
        $skontoProzent = '';
    endif;
endif;

if(isset($_POST['eSkontoFr'])):
    if(!empty($_POST['eSkontoFr'])):
        $skontoFr = $_POST['eSkontoFr'];
    else:
        $skontoFr = '';
    endif;
endif;

// Prozentberechnung
if($skontoProzent != '' && $skontoFr == ''):
    $skontoFr = $rechnungsbetragFr / 100 * $skontoProzent;
endif;

// Preisberechnung
if($skontoProzent == '' && $skontoFr != ''):
    $skontoProzent = $skontoFr / $rechnungsbetragFr * 100;
endif;

// Wenn keine Vergünstigung
if($skontoProzent == '' && $skontoFr == ''):
    $skontoProzent = 0;
    $skontoFr = 0;
endif;

// Zahlung
$zahlungProzent = 100 - $skontoProzent;

$zahlungFr = $rechnungsbetragFr - $skontoFr;

// Bezugskosten
if(isset($_POST['eBezugskostenFr'])):
    if(!empty($_POST['eBezugskostenFr'])):
        $bezugskostenFr = $_POST['eBezugskostenFr'];
    else:
        $bezugskostenFr = 0;
    endif;
endif;

// Einstandspreis
$einstandspreisFr = $zahlungFr - $bezugskostenFr;
