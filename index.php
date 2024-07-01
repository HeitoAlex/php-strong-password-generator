<?php 
session_start();

if(!isset ($_SESSION['Logged'])){
    header('location: ./login.php');
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
        <h1>
            
        </h1>
    </header>

    <main>
        <?php if (isset($_SESSION["Logged"]) && $_SESSION["Logged"] === true) { ?>
            <h2>
                Benvenuto/a <?php echo $_SESSION["username"] ?> !!
            </h2>
        <?php } else { ?>
            <h2>
                Non sei autorizzato
            </h2>
        <?php } ?>

        <div>
            <a href="./logout.php"> 
                Logout 
            </a>
        </div>
    </main>
</body>
</html>