<?php
include 'app/Controllers/inc/Gesamt/gk-kontrolle.inc.php';
// Katalogpreis Einkauf
$eKatalogpreisFr;
$eKatalogpreisMf = $eKatalogpreisFr * $Menge;

// Rabatt Einkauf
if($eRabattFr == 0 && $eRabattPr != 0):
    $eRabattFr = $eKatalogpreisFr / 100 * $eRabattPr;
elseif($eRabattFr != 0 && $eRabattPr == 0):
    $eRabattPr = $eRabattFr / $eKatalogpreisFr * 100;
endif;
$eRabattMf = $eKatalogpreisMf / 100 * $eRabattPr;

// Rechnungsbetrag Einkauf
$eRechnungFr = $eKatalogpreisFr - $eRabattFr;
$eRechnungPr = 100 - $eRabattPr;
$eRechnungMf = $eKatalogpreisMf - $eRabattMf;

// Skonto Einkauf
if($eSkontoFr == 0 && $eSkontoPr != 0):
    $eSkontoFr = $eRechnungFr / 100 * $eSkontoPr;
elseif($eSkontoPr != 0 && $eSkontoPr == 0):
    $eSkontoPr = $eSkontoFr / $eRechnungFr * 100;
endif;
$eSkontoMf = $eRechnungMf / 100 * $eSkontoPr;

// Zahlung Einkauf
$eZahlungFr = $eRechnungFr - $eSkontoFr;
$eZahlungPr = 100 - $eSkontoPr;
$eZahlungMf = $eRechnungMf - $eSkontoMf;

// Bezugskosten Einkauf
$eKostenFr;
$eKostenMf = $eKostenFr;

// Einstandspreis Einkauf
$eEinstandspreisFr = $eZahlungFr + $eKostenFr;
$eEinstandspreisMf = $eZahlungMf + $eKostenMf;

// Gemeinkosten
if($KostenFr == 0 && $KostenPr != 0):
    $KostenFr = $eEinstandspreisFr / 100 * $KostenPr;
elseif($KostenFr != 0 && $KostenPr == 0):
    $KostenPr = $KostenFr / $eEinstandspreisFr * 100;
endif;
$KostenMf = $eEinstandspreisMf / 100 * $KostenPr;

// Selbstkosten
$SelbstkostenFr = $eEinstandspreisFr + $KostenFr;
$SelbstkostenPr = 100 + $KostenPr;
$SelbstkostenMf = $eEinstandspreisMf + $KostenMf;

// Gewinn
if($GewinnFr == 0 && $GewinnPr != 0):
    $GewinnFr = $SelbstkostenFr / 100 * $GewinnPr;
elseif($GewinnFr != 0 && $GewinnPr == 0):
    $GewinnPr = $GewinnFr / $SelbstkostenFr * 100;
endif;
$GewinnMf = $SelbstkostenMf / 100 * $GewinnPr;

// Einstandspreis Verkauf
$vEinstandspreisFr = $SelbstkostenFr + $GewinnFr;
$vEinstandspreisPr = 100 + $GewinnPr;
$vEinstandspreisMf = $SelbstkostenMf + $GewinnMf;

// Versandkosten Verkauf
$vKostenFr;
$vKostenMf = $vKostenFr;

// Zahlung Verkauf
$vZahlungFr = $vEinstandspreisFr + $vKostenFr;
$vZahlungMf = $vEinstandspreisMf + $vKostenMf;

// Skonto Verkauf
if($vSkontoFr == 0 && $vSkontoPr != 0):
    $vSkontoFr = $vZahlungFr /100 * $vSkontoPr;
elseif($vSkontoFr != 0 && $vSkontoPr == 0):
    $vSkontoPr = $vSkontoFr / $vZahlungFr * 100;
endif;
$vSkontoMf = $vZahlungMf / 100 * $vSkontoPr;

// Rechnungsbetrag Verkauf
$vRechnungFr = $vZahlungFr + $vSkontoFr;
$vRechnungPr = 100 + $vSkontoPr;
$vRechnungMf = $vZahlungMf + $vSkontoMf;

// Rabatt Verkauf
if($vRabattFr == 0 && $vRabattPr != 0):
    $vRabattFr = $vRechnungFr / 100 * $vRabattPr;
elseif($vRabattFr != 0 && $vRabattPr == 0):
    $vRabattPr = $vRabattFr / $vRechnungFr * 100;
endif;
$vRabattMf = $vRechnungMf / 100 * $vRabattPr;

// Katalogpreis Verkauf
$vKatalogpreisFr = $vRechnungFr + $vRabattFr;
$vKatalogpreisPr = 100 + $vRabattPr;
$vKatalogpreisMf = $vRechnungMf + $vRabattMf;

// Fix
$Hundert = 100;