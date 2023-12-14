<?php
include __DIR__ . '/functions.php';

session_start();



if (isset($_POST['email'])) {
    $_SESSION['email'] = $_POST['email'];
    $email = $_POST['email'];
    list($result, $message) = emailCheck($email);

    
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
        <div class="row justify-content-center w-100">
            <div class="col-5">
                <form action="index.php" class="mb-3 d-flex flex-column align-items-center w-100" method="POST">
                    <div class="mb-3 w-75">
                        <input 
                        type="text" 
                        name="email" 
                        class="form-control w-100" 
                        placeholder="Inserisci la tua email"
                        value="<?php echo !empty($_POST['email']) ? $_POST['email'] : '' ?>">
                    </div>

                    <button class="btn btn-primary w-25" type="submit">Invia</button>

                    <?php if(isset($_POST['email'])) { 
                        include 'alert.php';
                    } ?>

                </form>
            </div>

        </div>
    </main>
</body>

</html>