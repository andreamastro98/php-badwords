<?php

$stringa = $_POST['stringa'];
$parola = $_POST['parola'];
$stringaCensurata = str_replace( $parola , '*****', $stringa);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>la stringa é :<?php echo $stringa ?></h2>
    <h2>la lunghezza della stringa é :<?php echo strlen($stringa); ?></h2>

    <h2>la stringa censurata é:"<?php echo str_replace( $parola , '*****', $stringa); ?></h2>
    <h2>la lunghezza della stringa censurata é:<?php echo strlen($stringaCensurata); ?></h2>
</body>
</html>