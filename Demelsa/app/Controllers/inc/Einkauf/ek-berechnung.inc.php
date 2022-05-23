<?php
include 'app/Controllers/inc/Einkauf/ek-kontrolle.inc.php';
// Katalogpreis
$KatalogpreisMf = $Katalogpreis * $Menge;

// Rabatt
if($RabattFr == 0 && $RabattPr != 0):
    $RabattFr = $Katalogpreis / 100 * $RabattPr;
elseif($RabattFr != 0 && $RabattPr == 0):
    $RabattPr = $RabattFr / $Katalogpreis * 100;
endif;
$RabattMf = $KatalogpreisMf / 100 *$RabattPr;

// Rechnungsbetrag:
 $RechnungFr = $Katalogpreis - $RabattFr;
$RechnungPr = 100 - $RabattPr;
$RechnungMf = $KatalogpreisMf - $RabattMf;

// Skonto
if($SkontoFr == 0 && $SkontoPr != 0):
    $SkontoFr = $RechnungFr / 100 * $SkontoPr;
elseif($SkontoFr != 0 && $SkontoPr == 0):
    $SkontoPr = $SkontoFr / $RechnungFr * 100;
endif;
$SkontoMf = $RechnungMf / 100 * $SkontoPr;

// Zahlung
$ZahlungFr = $RechnungFr - $SkontoFr;
$ZahlungPr = 100 - $SkontoPr;
$ZahlungMf = $RechnungMf - $SkontoMf ;

// Einstandspreis
$Einstandspreis = $ZahlungFr + $Bezugskosten;
$EinstandspreisMf = $ZahlungMf + $Bezugskosten;

// Fix
$Hundert = 100;