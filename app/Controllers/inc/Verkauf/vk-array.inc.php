<?php
$eingabe = array(
    array('Einstandspreis', 'CHF', 'eEinstandspreis', 1, '', '', 1234.56,),
    array('Versandkosten', 'CHF', 'eKosten', 2,  '', '', 1234.56,),
    array('Skonto', 'CHF', 'eSkontoFr', 3,  'eSkontoPr', 4,  1234.56,),
    array('Rabatt', 'CHF', 'eRabattFr', 5,  'eRabattPr', 6,  1234.56,),
    array('Menge', 'Anz', 'eMenge', 7,  '', '', 1234.56,),
);

$ausgabe = array(
    array('Einstandspreis', 'EinstandspreisFr', '', '', 'EinstandspreisMf',),
    array('Versandkosten', 'KostenFr', '', '', 'KostenFr',),
    array('Zahlung', 'ZahlungFr', 'Hundert', '', 'ZahlungMf',),
    array('Skonto', 'SkontoFr', 'SkontoPr', '', 'SkontoMf',),
    array('Rechnungsbetrag', 'RechnungFr', 'RechnungPr', 'Hundert', 'RechnungMf',),
    array('Rabatt', 'RabattFr', '', 'RabattPr', 'RabattMf',),
    array('Katalogpreis', 'KatalogpreisFr', '', 'KatalogpreisPr', 'KatalogpreisMf',),
);