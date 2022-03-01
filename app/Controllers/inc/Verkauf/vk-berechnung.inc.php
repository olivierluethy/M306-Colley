<?php
include 'app/Controllers/inc/Verkauf/vk-kontrolle.inc.php';
// Einstandspreis
$EinstandspreisMf = $EinstandspreisFr * $Menge;

// Verkaufssonderkosten
$KostenFr;

// Zahlung
$ZahlungFr = $EinstandspreisFr + $KostenFr;
$ZahlungMf = $EinstandspreisMf + $KostenFr;

// Skonto
if($SkontoFr == 0 && $SkontoPr != 0):
    $SkontoFr = $ZahlungFr / 100 * $SkontoPr;
elseif($SkontoFr != 0 && $SkontoPr == 0):
    $SkontoPr = $SkontoFr / $ZahlungFr * 100;
endif;
$SkontoMf = $ZahlungMf / 100 * $SkontoPr;

// Rechnungsbetrag
$RechnungFr = $ZahlungFr + $SkontoFr;
$RechnungPr = 100 - $SkontoPr;
$RechnungMf = $ZahlungMf + $SkontoMf;

// Rabatt
if($RabattFr == 0 && $RabattPr != 0):
    $RabattFr = $ZahlungFr / 100 * $RabattPr;
elseif($RabattFr != 0 && $RabattPr == 0):
    $RabattPr = $RabattFr / $RechnungFr * 100;
endif;
$RabattMf = $ZahlungMf / 100 * $RabattPr;

// Katalogpreis
$KatalogpreisFr = $RechnungFr + $RabattFr;
$KatalogpreisPr = 100 - $RabattPr;
$KatalogpreisMf = $RechnungMf + $RabattMf;

// Fix
$Hundert = 100;