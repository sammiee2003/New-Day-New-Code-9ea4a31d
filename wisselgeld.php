<?php
$bedrag = readline(" ");
$geldeEnheden = array(50,20,10,5,2,1);
$geld = intval($bedrag);

foreach ($geldeEnheden as $value) {
    $restgeld = floor($geld / $value);
    if ($restgeld >= 1){
        $geld = $geld - ($value * $restgeld);
        echo $restgeld . "x" . $value . "euro" . PHP_EOL;
    }
}

