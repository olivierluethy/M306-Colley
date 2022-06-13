<?php
$journal = (new ColleyJournal)->getAll();
foreach($journal as $item):
    $journalID[] = $item['journalId'];
    $datum[] = $item['datum'];
    $soll[] = $item['soll'];
    $haben[] = $item['haben'];
    $betrag[] = $item['betrag'];
    /*$rechnungsnr[] = $item('rechnungsnummer');
    $rechnung[] = $item('rechnung');*/
endforeach;
