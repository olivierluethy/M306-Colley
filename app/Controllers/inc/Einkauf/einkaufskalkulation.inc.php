<?php

$eingabe = array(
    array('Katalogpreis','','eKatalogpreisFr','','100'),
    array('Rabatt','eRabattProzent','eRabattFr','20',''),
    array('Skonto','eSkontoProzent','eSkontoFr','5',''),
    array('Bezugskosten','','eBezugskostenFr','','30'),
);

$ausgabe = array(
    array('= Katalogpreis','katalogpreisProzent','katalogpreisFr',''),
    array('- Rabatt','rabattProzent','rabattFr',''),
    array('= Rechnungsbetrag','rechnungsbetragProzent','rechnungsbetragFr','=> 100'),
    array('- Skonto','skontoProzent','skontoFr',''),
    array('= Zahlung','zahlungProzent','zahlungFr',''),
    array('+ Bezugskosten','','bezugskostenFr',''),
    array('= Einstandspreis','','einstandspreisFr','')
);