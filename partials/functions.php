<?php

$str_user = 0;
if (array_key_exists("str_length", $_GET)) {
    var_dump("OK");
    $str_user = $_GET["str_length"];
    var_dump( $_GET );
} else {
    var_dump("KO");
}

$int_user = intval( $str_user ) ;

$letter_up = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";

$letter_low = "abcdefghijklmnopqrstuvwxyz";

$symbols = ",./-&%!?§_";

$int = '1234567890';

$ful_set = $letter_up . $letter_low . $symbols . $int;

function intRandom ($min, $max) {
    $index = mt_rand ( $min , $max );

    return $index;
}


$sum = '';
var_dump($sum);

for ($i = 0 ; $i < $int_user; $i++) {
    
    $current_letters_low = intRandom (0, strlen($ful_set) -1);
    // var_dump($current_letters_low);

    $letters_low_random = $ful_set[$current_letters_low];
    // var_dump($letters_low_random);

    $sum .= $letters_low_random;


}
