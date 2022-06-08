<?php
$konto = (new ColleyKonto)->getAll();
foreach($konto as $item):
    $kontoName[] = $item['kontoName'];
    $kontoNr[] = $item['kontoNr'];
    $kontoId[] = $item['kontoId'];
endforeach;

$array = array(
    array(
        'journal1',
        'date',
        'Datum',
        'journal2',
        'date',
    ),
    array(
        'journal3',
        'soll',
        'Soll',
        'journal4',
        '',
    ),
    array(
        'journal5',
        'haben',
        'Haben',
        'journal6',
        '',
    ),
    array(
        'journal7',
        'betrag',
        'Betrag',
        'journal8',
        'number',
    ),
);