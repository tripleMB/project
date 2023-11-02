<!-- Dit bestand bevat alle overige funcites, functies in relatie tot de database bevinden zich in database.php
Dit bestand wordt geactiveerd vanuit de bovenkant van header.php, bij "include "functions.php;" --> 

<?php

function berekenVerkoopPrijs($adviesPrijs, $btw) {
    return $btw * $adviesPrijs / 100 + $adviesPrijs;
}

function getVoorraadTekst($actueleVoorraad) {
    if ($actueleVoorraad > 1000) {
        return "Ruime voorraad beschikbaar.";
    } else {
        return "Voorraad: $actueleVoorraad";
    }
}

/* 
functies om string naar arrays om te zetten en andersom
getest met de volgende array
$shoppingcart = array(60 => 3, 12 => 1, 24 => 2);
deze worden nog niet gebruikt maar zijn voor de cookies in de winkelwagen
*/



function string_to_array($str){
    parse_str(str_replace(', ', '&', $str), $array);
    return $array;
}



function array_to_string($array){
    return http_build_query($array,'',', ');

}