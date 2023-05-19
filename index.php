<?php



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-badwords</title>
</head>
<body>
    <h1>Data una stringa con la parola 'password' sará restituita una stringa con la parola 'password' censurata</h1>

    <form action="risultatoEsercizio.php" method="POST">
        <div>
            <label for="stringa">Stringa</label>
            <input type="text" placeholder="Inserisci la tua stringa" name="stringa">
        </div>
        <div>
            <label for="parola">Inserisci la parola da censurare</label>
            <input type="text" placeholder="Inserisci la parola da censurare" name="parola">
            <button type="submit">Invia</button>
        </div>
    </form>
    
</body>
</html>