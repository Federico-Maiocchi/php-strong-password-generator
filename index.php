<?php 

$str_user = $_GET["str_length"];
var_dump($str_user);

$int_user = intval($str_user);
var_dump($int_user);

$letter_up = "A, B, C, D, E, F, G, H, I, J, K, L, M, N, O, P, Q, R, S, T, U, V, W, X, Y, Z";
 
$letter_low = "a, b, c, d, e, f, g, h, i, j, k, l, m, n, o, p, q, r, s, t, u, v, w, x, y, z";


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
</body>
</html>