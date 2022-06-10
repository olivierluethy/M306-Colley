<?php
include('app/Controllers/inc/arrays/alle_kontoplan.inc.php');

for($i=0; $i<count($planNr); $i++):
    if(
        $planNr[$i] == '1' ||
        $planNr[$i] == '10' ||
        $planNr[$i] == '100' ||
        $planNr[$i] == '106' ||
        $planNr[$i] == '110' ||
        $planNr[$i] == '114' ||
        $planNr[$i] == '120' ||
        $planNr[$i] == '130' ||
        $planNr[$i] == '14' ||
        $planNr[$i] == '140' ||
        $planNr[$i] == '148' ||
        $planNr[$i] == '150' ||
        $planNr[$i] == '160' ||
        $planNr[$i] == '170' ||
        $planNr[$i] == '180' ||
        $planNr[$i] == '2' ||
        $planNr[$i] == '20' ||
        $planNr[$i] == '200' ||
        $planNr[$i] == '210' ||
        $planNr[$i] == '220' ||
        $planNr[$i] == '230' ||
        $planNr[$i] == '24' ||
        $planNr[$i] == '240' ||
        $planNr[$i] == '250' ||
        $planNr[$i] == '260' ||
        $planNr[$i] == '28' ||
        $planNr[$i] == '3' ||
        $planNr[$i] == '4' ||
        $planNr[$i] == '5' ||
        $planNr[$i] == '6' ||
        $planNr[$i] == '7' ||
        $planNr[$i] == '8' ||
        $planNr[$i] == '9'
    ): 
        $planValue[] = '';
    else:
        $planValue[] = $planNr[$i];
    endif;
endfor;