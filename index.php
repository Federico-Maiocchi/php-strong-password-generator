<?php 

$str_user = $_GET[ "str_length" ];
var_dump( $str_user );

$int_user = intval( $str_user ) ;
var_dump( $int_user ) ;

$letter_up = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";

$letter_low = "abcdefghijklmnopqrstuvwxyz";

$symbols = ",./-&%!?§_";

$int = '1234567890';



function intRandom ($min, $max) {
    $index = mt_rand ( $min , $max );

    return $index;
}


$pass_let_low = '';
// var_dump ($pass_let_low);

for ($i = 0 ; $i < $int_user; $i++) {
    
    $current_letters_low = intRandom (0, 25);
    // var_dump($current_letters_low);

    $letters_low_random = $letter_low[$current_letters_low];
    // var_dump($letters_low_random);

    $pass_let_low .= $letters_low_random;


};

$pass_let_up  = '';
// var_dump($pass_let_up );

for ($i = 0 ; $i < $int_user; $i++) {
    
    $current_letter_up = intRandom (0, 25);
    // var_dump($current_letter_up );

    $letters_up_random = $letter_up[$current_letter_up];
    // var_dump($letters_up_random );

    $pass_let_up .= $letters_up_random;

};


$pass_symbols = '';
// var_dump($pass_symbols);

for ($i = 0 ; $i < $int_user; $i++) {
    
    $current_symbols = intRandom (0, 9);
    var_dump($current_symbols);

    $symbols_random = $symbols[$current_symbols];
    var_dump($symbols_random);

    $pass_symbols .= $symbols_random;


};


$pass_int = '';

for ($i = 0 ; $i < $int_user; $i++) {
    
    $current_int = intRandom (0, 9);
    var_dump($current_symbols);

    $int_random = $int[$current_int];
    var_dump($int_random);

    $pass_int .= $int_random ;


};






?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generatore Password</title>
</head>
<body>
    <h1>Generatore di password casuale con lettere,numeri e simboli</h1>

    <form action="index.php" method="GET">
        <div>
            <label for="">inserisci un numero 3 a 15 che corrisponde alla lunhezza della password</label>
        </div>
        <div>
            <input type="number" name="str_length"  min="3" max="15">
            <input type="submit" value="Genera password">
        </div>    
    </form>

    <p> <?php echo $pass_let_low  ?></p>
    <p> <?php echo $pass_let_up ?></p>
    <p> <?php echo $symbols_random ?></p>
    <p> <?php echo $pass_int ?> </p>
</body>
</html>