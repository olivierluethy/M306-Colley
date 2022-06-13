<?php
$er = (new ColleyKonto)->getAll();

foreach($er as $item):
    $kontoId[] = $item['kontoId'];
    $kontoNr[] = $item['kontoNr'];
    $kontoName[] = $item['kontoName'];
    $kontoZweck[] = $item['kontoZweck'];
endforeach;