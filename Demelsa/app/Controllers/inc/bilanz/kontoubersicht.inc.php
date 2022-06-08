<?php
$konto = (new ColleyKonto)->getAll();
foreach($konto as $item):
    $kontoName[] = $item['kontoName'];
    $kontoNr[] = $item['kontoNr'];
    $kontoZweck[] = $item['kontoZweck'];
endforeach;