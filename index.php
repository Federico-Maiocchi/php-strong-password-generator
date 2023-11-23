<?php 

$num_user = $_GET[0];


 

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
            <label for="">inserisci un numero che corrisponde alla lunhezza della password</label>
        </div>
        <div>
            <input type="number" name="str_length">
            <input type="submit" value="Genera password">
        </div>    
    </form>
</body>
</html>