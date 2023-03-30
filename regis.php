<?php 

require 'function.php';

if(isset($_POST["register"]) ) {
    
    if (register ($_POST) > 0 ) {
        echo 
    "<script>
        alert ('user berhasil ditambahkan')
    </script>";

    header ("location : https//www.login.php") ;
    exit;
} else {
    echo mysqli_error ($conn);
    }

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
    <title>registrasi</title>
</head>

<body>
    <div class="container">
        <h1>REGISTRASI</h1>

        <form action="" method="post" class="form">

            <div class="input">

                <label for="username"></label>
                <input type="text" name="username" id="username" placeholder="username">

                <label for="gmail"></label>
                <input type="gmail" name="gmail" id="gmail" placeholder="gmail">

                <label for="password"></label>
                <input type="password" name="password" id="password" placeholder="password">

                <button type="submit" class="submit" name="register">register</button>
                
            </div>
            
        </div>
    </form>
</body>

</html>

