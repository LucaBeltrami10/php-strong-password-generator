<?php
require_once 'function.php';
/* session_start();

$_SESSION['passwordGenerated'] = passwordGenerator($passwordLenght, $alfabetoMaiuscolo, $alfabetoMinuscolo); */
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
        <form action="./showPassword.php" method="get">
            <div class="mb-3">
                <label for="passwordLenght" class="form-label">Inserire lunghezza password</label>
                <input type="number" class="form-control w-25" id="passwordLenght" name="passwordLenght" aria-describedby="passwordLenghtHelp">
                <div id="passwordLenghtHelp" class="form-text">Verrà generata una password con caratteri maiuscoli e
                    minuscoli
                    inseriti
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Genera</button>
        </form>
        <div id="password" class="mt-5">
            <p> La tua Password
                è: <?php echo $_SESSION['passwordGenerated'] ?></p>
        </div>
        </div>
    </main>
</body>

</html>