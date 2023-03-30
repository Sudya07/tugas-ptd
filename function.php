<?php 

$server = "localhost";
$user = "root";
$pass = "";
$database = "perpus-project";
 
$conn = mysqli_connect("$server", "$user", "$pass", "$database");


function query($query) {

    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ( $row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
return $rows;

}


// menambah data produk
function tambah($data) {
    global $conn;

//  upload gambar
    $gambar = upload ();
    if ( !$gambar ) {
        return false;
    }


    $judul_buku = htmlspecialchars ($data["judul_buku"]);
    $penerbit = htmlspecialchars ($data["penerbit"]);
    $pengarang = htmlspecialchars ($data["pengarang"]);
    $tahun = htmlspecialchars ($data["tahun"]);
    $link = htmlspecialchars ($data["link"]);
    
    $query = "INSERT INTO buku
    VALUES('', '$gambar', '$judul_buku', '$penerbit', '$pengarang', '$tahun', '$link')";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function upload () {
    $namaFile = $_FILES['gambar']['name'];
    $ukuranFile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpName = $_FILES['gambar']['tmp_name'];
    
    // cek apakah tidak ada gambar yang di upload
    if ($error === 4) {
        echo "<script>
        alert('gambar tidak ditambahkan');
        </script>";
        return false;
    }

    // cek apakah yang di upload adalah gambar
    $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
    $ekstensiGambar = explode ('.', $namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));
    if ( !in_array ($ekstensiGambar, $ekstensiGambarValid) ) {
            echo "<script>
            alert('yang anda upload bukan gambar');
            </script>";
            return false;
        }
           // cek ukurannya terlalu besar
    if ($ukuranFile > 1000000) {
        echo "<script>
            alert('ukuran gambar terlalu besar');
            </script>";
    }

    // lolos pengecekan 
    move_uploaded_file($tmpName, 'img/' . $namaFile);

    return $namaFile;


}

 





// mengambil data register
function register ($data) {
 global $conn;
 
 $username = strtolower(stripslashes($data ["username"]));
 $gmail = stripslashes($data ["gmail"]);
 $password =  stripslashes($data ["password"]);


//  password hash
$password = password_hash ($password, PASSWORD_DEFAULT);

// tambahkan user baru ke dalam database
mysqli_query ($conn, "INSERT INTO user VALUES('', '$username', '$gmail', '$password')");

return mysqli_affected_rows($conn);

};



?>