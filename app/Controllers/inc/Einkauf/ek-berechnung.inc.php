<?php
include 'app/Controllers/inc/Einkauf/ek-kontrolle.inc.php';
/**
 * Katalogpreis
 * Wenn die Menge mehr als 1 beträgt, muss der Katalogpreis
 * für die mehrfache Menge ausgerechnet werden
 */
if($Menge != 1):
    $KatalogpreisMf = $Katalogpreis * $Menge;
endif;

/**
 * Rabatt:
 * Der Rabatt wird auf den Katalogpreis gegeben.
 * 
 * Wenn nur die Prozente bei Rabatt bekannt sind
 * Vorhanden sein müssen: Der Katalogpreis und der Rabatt in %
 */
if($RabattFr == 0 && $RabattPr != 0):
    $RabattFr = $Katalogpreis / 100 * $RabattPr;
endif;

/**
 * Wenn nur der Betrag bei Rabatt bekannt ist
 * Vorhanden sien müssen: Der Katalogpreis und der Rabatt in CHF
 */
if($RabattFr != 0 && $RabattPr == 0){$RabattPr = $RabattFr / $Katalogpreis * 100;}

/* Wenn es mehr als 1 Stück gibt */
if($Menge != 1):
    $RabattMf = $KatalogpreisMf / 100 *$RabattPr;
endif;

/**
 * Rechnungsbetrag:
 * Der Rechnungsbetrag wird aus dem Einstandspreis minus dem Rabatt errechnet
 */
$RechnungFr = $Katalogpreis - $RabattFr;
$RechnungPr = 100 - $RabattPr;

if($Menge != 1):
    $RechnungMf = $KatalogpreisMf - $RabattMf;
endif;

/**
 * Skonto:
 * Der Skonto wird auf den Rechnungsbetrag
 * 
 * Wenn nur die Prozente des Skonto bekannt sind.
 * Vorhanden sein müssen: Rechnungsbetrag und Skonto in %
 */
if($SkontoFr == 0 && $SkontoPr != 0):
    $SkontoFr = $RechnungFr / 100 * $SkontoPr;
endif;

/**
 * Wenn nur der Betrag bei Skonto bekannt ist.
 * Vorhanden sein müssen: Rechnungsbetrag und Skonto in CHF
 */
if($SkontoFr != 0 && $SkontoPr == 0):
    $SkontoPr = $SkontoFr / $RechnungFr * 100;
endif;

/* Wenn es mehr als 1 Stück ist */
if($Menge != 1):
    $SkontoMf = $RechnungMf / 100 * $SkontoPr;
endif;

/**
 * Zahlung:
 * Die Zahlung wird aus dem Rechnungsbetrag minus dem Skonto errechnet
 */
$ZahlungFr = $RechnungFr - $SkontoFr;
$ZahlungPr = 100 - $SkontoPr;

/* Wenn mehr als 1 Stück */
if($Menge != 1):
    $ZahlungMf = $RechnungMf - $SkontoMf ;
endif;

/**
 * Einstandspreis:
 * Der Einstandspreis kann sowohl über die Zahlung plus den Bezugskosten errechnet werden,
 * wie aber auch über den Katalogpreis minus dem Rabatt minus dem Skonto und plus der Bezugskosten.
 */
$ergebnis = $ZahlungFr + $Bezugskosten;
$ergebnisKontrolle = $Katalogpreis - $RabattFr - $SkontoFr + $Bezugskosten;

/* Vergleich der beiden Beträge: */
if($ergebnis == $ergebnisKontrolle):
    $Einstandspreis = $ergebnis;
endif;

/* Wenn mehr als 1 Stück */
if($Menge != 1):
    $erg = $ZahlungMf + $Bezugskosten;
    $ergKontrolle = $KatalogpreisMf - $RabattMf - $SkontoMf + $Bezugskosten;
    /* Vergleich der beiden Beträge: */
    if($erg == $ergKontrolle):
        $EinstandspreisMf = $erg;
    endif;
endif;