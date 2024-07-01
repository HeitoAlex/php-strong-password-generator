<?php 

$accounts = [
    [
        'username' => 'Goku',
        'password' => 'kamehameha'
    ],
    [
        'username' => 'Vegeta',
        'password' => 'galikcannon'
    ],
    [
        'username' => 'Trunks',
        'password' => 'burningattack'
    ],
    [
        'username' => 'Gohan',
        'password' => 'masenko'
    ],
    [
        'username' => 'Piccolo',
        'password' => 'makankosappo'
    ]
];

session_start();

$attemptedLogin = false;

$inputUsername = $_POST["username"];
$inputPassword = $_POST["password"];

if (isset($_SESSION["Logged"]) && $_SESSION["Logged"] === true){
    header("location: ./index.php");
}

if (isset ($inputUsername) && isset ($inputPassword)){
    
    foreach ($accounts as $account){
        
        if ($user["username"] === $inputUsername){

            if ($user["password"] === $inputPassword){

                $_SESSION["username"] = $inputUsername;
                $_SESSION["password"] = $inputPassword;
                $_SESSION["Logged"] = true;
                header('location: ./index.php');
                break;
            }
        }
    }
    
    if (!isset($_SESSION["Logged"])){
        $attemptedLogin = true;
    }
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
    <form action="./login.php" method="POST">
        <div>
            <label for="username">Username:</label>
            <input type="text" name="username" id="username">
        </div>
        <div>
            <label for="password">Password:</label>
            <input type="password" name="password" id="password">
        </div>
        <button type="submit">Login</button>
        <?php if ($attemptedLogin) { ?>
            <p>Dati errati!</p>
        <?php } ?>
    </form>
</body>
</html>