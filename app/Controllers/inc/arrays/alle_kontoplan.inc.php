<?php
$kontoplan = (new ColleyKonto)->getAllPlan();

foreach($kontoplan as $item):
    $planId[] = $item['planId'];
    $planNr[] = $item['planNr'];
    $planTitel[] = $item['planTitel'];
endforeach;