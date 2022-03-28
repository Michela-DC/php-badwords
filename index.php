<!-- Creare una variabile con un paragrafo di testo a vostra scelta.
Stampare a schermo il paragrafo e la sua lunghezza.
Una parola da censurare viene passata dall’utente tramite parametro GET.
Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare. -->

<?php

    $text = "Don't wanna be an American idiot!
    Don't want a nation under the new media
    And can you hear the sound of hysteria?
    The subliminal mind fuck America!";

    $censore = "***";
 
    $censored_text = str_replace($_GET['bad_word'], $censore, $text);
    // potevo anche mettere solo *** invece che creare una variabile $censore
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>First PHP</title>
</head>
<body>

    <p>
        <?php echo $text ?>
    </p>

    <p>
        <?php echo $censored_text ?>
    </p>

</body>
</html>

