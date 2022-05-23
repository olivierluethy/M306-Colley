<?php
include 'app/Controllers/inc/Intern/ik-kontrolle.inc.php';
// Fix
$Hundert = 100;

// Einstandspreis
$EinstandspreisMf= $Menge * $EinstandspreisFr;

// Gemeinkosten
if($GemeinkostenFr == 0 && $GemeinkostenPr != 0):
    $GemeinkostenFr = $EinstandspreisFr / 100 * $GemeinkostenPr;
elseif($GemeinkostenFr != 0 && $GemeinkostenPr == 0):
    $GemeinkostenPr = $GemeinkostenFr / $EinstandspreisFr * 100;
endif;
$GemeinkostenMf = $EinstandspreisMf / 100 * $GemeinkostenPr;

// Selbstkosten
$SelbstkostenFr = $EinstandspreisFr + $GemeinkostenFr;
$SelbstkostenPr = 100 + $GemeinkostenPr;
$SelbstkostenMf = $EinstandspreisMf + $GemeinkostenMf;

// Reingewinn
if($GewinnFr == 0 && $GewinnPr != 0):
    $GewinnFr = $SelbstkostenFr / 100 * $GewinnPr;
elseif($GewinnFr != 0 && $GewinnPr == 0):
    $GewinnPr = $GewinnFr / $SelbstkostenFr * 100;
endif;
$GewinnMf = $SelbstkostenMf / 100 * $GewinnPr;

// Nettoerlös
$NettoFr = $SelbstkostenFr + $GewinnFr;
$NettoPr = 100 + $GewinnPr;
$NettoMf = $SelbstkostenMf + $GewinnMf;