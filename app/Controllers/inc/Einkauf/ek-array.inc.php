<?php

$eingabe = array(
    array('Katalogpreis', 'CHF', 'eKatalogpreis', '', '', 1, '', ),
    array('Rabatt', 'CHF', 'eRabattFr', 'eRabattPr', '%', 2, 3,),
    array('Skonto', 'CHF', 'eSkontoFr', 'eSkontoPr', '%', 4, 5,),
    array('Bezugskosten', 'CHF', 'eBezugskosten', '', '', 6, '',),
    array('Menge', 'Anz', 'eMenge', '', '', 7, '',),
);

$ausgabe = array(
    array('Katalogpreis', 'Katalogpreis', 'Hundert', '', 'KatalogpreisMf',),
    array('Rabatt', 'RabattFr', 'RabattPr', '', 'RabattMf',),
    array('Rechnungsbetrag', 'RechnungFr', 'RechnungPr', 'Hundert', 'RechnungMf',),
    array('Skonto', 'SkontoFr', '', 'SkontoPr', 'SkontoMf',),
    array('Zahlung', 'ZahlungFr', '', 'ZahlungPr', 'ZahlungMf',),
    array('Bezugskosten', 'Bezugskosten', '', '', 'Bezugskosten',),
    array('Einstandspreis', 'Einstandspreis', '', '', 'EinstandspreisMf',),
);
