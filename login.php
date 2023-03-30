<?php

require 'function.php';

if (isset($_POST["submit"]) ) {

    $username = $_POST ["username"];
    $gmail = $_POST ["gmail"];
    $password = $_POST ["password"];

    $result = mysqli_query ($conn, "SELECT * FROM user WHERE username = '$username'");

    if (mysqli_num_rows($result) === 1) {

        $row = mysqli_fetch_assoc($result);
        if ( password_verify ($password, $row["password"]) ) {
            header ("location : home.php");
            exit;
        }
    }

    $error = true;

}

?> 

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit&family=Viga&display=swap" rel="stylesheet">
    <title>login</title>
</head>

<body>
    <div class="container">
        <h1>LOGIN</h1>

        <?php if(isset($error) ) :?>
            <p style="color : red;" >username atau password salah</p>
        <?php endif; ?>

        <form action="" method="post" class="form">

            <div class="input">

                <label for="username"></label>
                <input type="text" name="username" placeholder="username">

                <label for="gmail"></label>
                <input type="gmail" name="gmail" placeholder="gmail">

                <label for="password"></label>
                <input type="password" name="password" placeholder="password">
                
                <button class="submit" name="submit">submit</button>
                
            </div>
            <a href="regis.php" class="reg">belum punya akun?</a>
        </div>
    </form>
</body>

</html>

