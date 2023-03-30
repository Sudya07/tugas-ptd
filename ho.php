<?php 

require 'function.php';



?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Kanit&family=Viga&display=swap" rel="stylesheet">    
    <title>Home</title>
</head>

<body>

    <!-- navigasi -->
    <nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand pl-20" href="tambah.php">tambah produk</a>
            <form class="d-flex" role="search">
                <input class="form-control me-2" name="keyword" type="search" placeholder="Search" aria-label="Search" autofocus autocomplete="off">
                <button class="btn btn-outline-success" type="submit" name="search">Search</button>
            </form>
        </div>
    </nav>
    <!--  -->

    <!-- isi -->
    <h1 class="d-flex justify-content-center mt-10px">belinovel</h1>


        
    <div class="row justify-content-center">
    <?php  
    $result = mysqli_query($conn, "SELECT * FROM buku"); 
    $count = 0; // variabel untuk menghitung jumlah buku
    while($row = mysqli_fetch_array($result)) { 
        if($count % 4 == 0) { // buat baris baru setiap empat buku
            echo "</div><div class='row justify-content-center mt-4'>";
        }
        echo "<div class='col-md-3'>";
        echo "<div class='card' style='width: 18rem;'>";
        echo "<img src='img/" . $row['img'] . "' alt='" ;
        echo "class='card-img-top' style='height: 400px; '" ; 
        echo "alt='tujuh kelana'>" ;
        echo "<div class='card-body'>" ;
        echo "<h5 class='card-title'>" . $row['judul_buku'] . "</h5>" ;
        echo "<h6 class='card-title'>penerbit :". $row['penerbit'] ."</h6>" ;
        echo "<h6 class='card-title'>pengarang :". $row['pengarang'] ."</h6>" ;
        echo "<h6 class='card-title'>tahun terbit :". $row['tahun'] ."</h6>" ;
        echo "<a href='" . $row['link'] . "'class='btn btn-primary'>Beli Buku</a>";
        echo "</div></div></div>";
        $count++; // tambahkan 1 pada variabel hitung buku setiap loop
    }
    ?>
</div>         
       
        








</body>

</html>