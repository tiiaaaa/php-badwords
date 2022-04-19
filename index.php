<?php

//!Inizializzata variabile con paragrafo//
$text = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias accusantium itaque ducimus voluptates ad illum quod, magni necessitatibus assumenda ipsum, natus quibusdam quas ullam est eos atque tempora, architecto magnam!';
// var_dump(strlen($text));

//! Inizializzato variabile con chimata GET con parametro 'Word'
$word = $_GET['word'];
// var_dump($word); //! Var_dump si usa come controllo in ambito di sviluppo ma non in produzione

//! Variabile con nuovo paragrafo sostituaendo il valore di $word con i '***' conenuto in $text.
$newText = str_replace($word, '***', $text);
// var_dump($newText);


// $array = explode(",", $text);
// var_dump($array);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
</head>
<body>
    <div>
        <!-- Con comando ECHO stampo il valore della variabile $text -->
        <h1>
            <?php echo $text; ?>
        </h1>
        
        <p> //!Lunghezza paragrafo $text -->
            <?php echo strlen($text); ?>
        </p>
        <!-- stampo valore variabile $word -->
        <h2>
            <?php echo $word; ?>
        </h2>
        <!-- stampo valore variabile $newText -->
        <h2>
            <?php echo $newText; ?>
        </h2>

        <p>//! Lunghezza paragrafo $newText
            <?php echo strlen($newText); ?>
        </p>
    </div>
</body>
</html>