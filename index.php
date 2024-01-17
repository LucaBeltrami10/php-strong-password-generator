<?php

$passwordLenght = $_GET['passwordLenght'];

/* funzione per generazione password */
function passwordGenerator($passwordLenght)
{
    $alfabetoMinuscolo = range('a', 'z');
    $alfabetoMaiuscolo = range('A', 'Z');
    $numeri = range(0, 9);
    $simboli = array('!', '@', '#', '$', '%', '^', '&', '*', '(', ')', '_', '+', '-', '=', '[', ']', '{', '}', ';', ':', ',');
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <main class="m-5">
        <form action="./index.php" method="get">
            <div class="mb-3">
                <label for="passwordLenght" class="form-label">Inserire lunghezza password</label>
                <input type="number" class="form-control w-25" id="passwordLenght" name="passwordLenght" aria-describedby="passwordLenghtHelp">
                <div id="passwordLenghtHelp" class="form-text">Verrà generata una password del numero di caratteri
                    inseriti
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Genera</button>
        </form>
        <div class="prova"><?php echo $passwordLenght ?></div>
    </main>
</body>

</html>