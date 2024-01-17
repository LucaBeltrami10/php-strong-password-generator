<?php
session_start();
$_SESSION['passwordGenerated'];

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
    <div class="mx-5">
        <h1>La tua nuova password è stata generata</h1>
        <p>la tua password è:</p>
        <p><?php echo $_SESSION['passwordGenerated'] ?></p>
    </div>

</body>

</html>