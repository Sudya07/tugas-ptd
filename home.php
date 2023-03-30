<?php 

require 'function.php';

// Query data
$result = mysqli_query($conn, "SELECT * FROM buku");

// Ambil data dan tampilkan di halaman web




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
            <a class="navbar-brand">sudybook</a>
            <form class="d-flex" role="search">
                <input class="form-control me-2" name="keyword" type="search" placeholder="Search" aria-label="Search" autofocus autocomplete="off">
                <button class="btn btn-outline-success" type="submit" name="search">Search</button>
            </form>
        </div>
    </nav>
    <!--  -->

    <!-- isi -->
    <h1 class="d-flex justify-content-center mt-10px">sudya book</h1>

    <div class="buku">
        <div class="d-flex justify-content-center">
          
       
            <div class="card" style="width: 18rem;">
                <img src="img/tujuh_kelana.jpg" class="card-img-top" alt="tujuh kelana">
                <div class="card-body">
                    <h5 class="card-title" > tujuh kelana</h5>
                    <h6 class="card-title">penerbit : Haldy niftah</h6>
                    <h6 class="card-title">pengarang : Haldy niftah</h6>
                    <h6 class="card-title">tahun : Haldy niftah</h6>
                 
                    <a href="https://play.google.com/store/books/details/Nellaneva_Tujuh_Kelana?id=ZE_2DwAAQBAJ&hl=en" class="btn btn-primary">beli Buku</a>
                </div>
            </div>
    
        

            <div class="card" style="width: 18rem;">
                <img src="img/ayat_cinta.jpg" class="card-img-top" alt="ayat ayat cinta">
                <div class="card-body">
                    <h5 class="card-title">Ayat Ayat Cinta</h5>
                    <h6 class="card-title">penerbit : Haldy niftah</h6>
                    <h6 class="card-title">pengarang : Haldy niftah</h6>
                    <h6 class="card-title">tahun : Haldy niftah</h6>
                    <a href="https://play.google.com/store/books/details/Habiburrahman_El_Shirazy_AYAT_AYAT_CINTA?id=Re_mDwAAQBAJ&hl=en" class="btn btn-primary" style="padding-bottom: 0;">beli Buku</a>
                </div>
            </div>

            <div class="card" style="width: 18rem;">
                <img src="img/dilan2.jpg" class="card-img-top" alt="dilan">
                <div class="card-body">
                    <h5 class="card-title">Dilan</h5>
                    <h6 class="card-title">penerbit : Haldy niftah</h6>
                    <h6 class="card-title">pengarang : Haldy niftah</h6>
                    <h6 class="card-title">tahun : Haldy niftah</h6>
                    <a href="https://play.google.com/store/books/details/Pidi_baiq_Dilan?id=U_-BBAAAQBAJ&hl=en" class="btn btn-primary">beli Buku</a>
                </div>
            </div>

            <div class="card" style="width: 18rem;">
                <img src="img/bumi_manusia.jpg" class="card-img-top" alt="bumia manusia">
                <div class="card-body">
                    <h5 class="card-title">Bumi Manusia</h5>
                    <h6 class="card-title">penerbit : Haldy niftah</h6>
                    <h6 class="card-title">pengarang : Haldy niftah</h6>
                    <h6 class="card-title">tahun : Haldy niftah</h6>
                    <a href="#" class="btn btn-primary">beli Buku</a>
                </div>
            </div>
        </div>


        <div class="d-flex justify-content-center">
            <div class="card" style="width: 18rem;">
                <img src="img/cantik_itu_luka.jpg" class="card-img-top" alt="cantik itu luka">
                <div class="card-body">
                    <h5 class="card-title">Cantik Itu Luka</h5>
                    <h6 class="card-title">penerbit : Haldy niftah</h6>
                    <h6 class="card-title">pengarang : Haldy niftah</h6>
                    <h6 class="card-title">tahun : Haldy niftah</h6>
                    <a href="#" class="btn btn-primary">beli Buku</a>
                </div>
            </div>

            <div class="card" style="width: 18rem;">
                <img src="img/fiersa.jpg" class="card-img-top" alt="fiersa bersari">
                <div class="card-body">
                    <h5 class="card-title">11:11</h5>
                    <h6 class="card-title">penerbit : Haldy niftah</h6>
                    <h6 class="card-title">pengarang : Haldy niftah</h6>
                    <h6 class="card-title">tahun : Haldy niftah</h6>
                    <a href="#" class="btn btn-primary">beli Buku</a>
                </div>
            </div>

            <div class="card" style="width: 18rem;">
                <img src="img/ngenest.jpg" class="card-img-top" alt="ngenest">
                <div class="card-body">
                    <h5 class="card-title">Ngenest</h5>
                    <h6 class="card-title">penerbit : Haldy niftah</h6>
                    <h6 class="card-title">pengarang : Haldy niftah</h6>
                    <h6 class="card-title">tahun : Haldy niftah</h6>
                    <a href="https://play.google.com/store/books/details/Ernest_Prakasa_Ngenest?id=bgR6CgAAQBAJ&hl=en" class="btn btn-primary">beli Buku</a>
                </div>
            </div>

            <div class="card" style="width: 18rem;">
                <img src="img/rinndu.jpg" class="card-img-top" alt="rindu">
                <div class="card-body">
                    <h5 class="card-title">Rindu</h5>
                    <h6 class="card-title">penerbit : Haldy niftah</h6>
                    <h6 class="card-title">pengarang : Haldy niftah</h6>
                    <h6 class="card-title">tahun : Haldy niftah</h6>
                    <a href="https://play.google.com/store/books/details/Tere_Liye_RINDU_unedited_version?id=6SFnDwAAQBAJ&hl=en" class="btn btn-primary">beli Buku</a>
                </div>
            </div>
        </div>

    </div>






</body>

</html>