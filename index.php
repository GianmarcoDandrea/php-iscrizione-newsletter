<?php
include __DIR__ . './functions.php';

if (isset($_GET['email'])) {
    list($result, $message) = emailCheck($_GET['email']);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Newsletter</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>

<body>
    <main class="mt-5 container">
        <h2 class="text-center"> Iscriviti alla nostra Newsletter</h2>
        <p class="text-center">
            Inserisci la tua email
        </p>
        <div class="row justify-content-center">
            <div class="col-5">
                <form action="index.php" class="mb-3 d-flex flex-column align-items-center" method="GET">
                    <div class="mb-3">
                        <input type="text" name="email" class="form-control" placeholder="Inserisci la tua email">
                    </div>

                    <button class="btn btn-primary w-25" type="submit">Invia</button>

                    <?php if(isset($_GET['email'])) { 
                        include 'alert.php';
                    } ?>

                </form>
            </div>

        </div>
    </main>
</body>

</html>