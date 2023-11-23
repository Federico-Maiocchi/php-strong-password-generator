<?php 

require __DIR__ . "/partials/functions.php"



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
    <p> <?php echo $sum  ?></p>
    
</body>
</html>