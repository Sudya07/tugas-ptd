<?php
// Koneksi ke database
require 'function.php';

// Query untuk mengambil data dari database
$query = "SELECT * FROM buku";

// Eksekusi query
$result = mysqli_query($koneksi, $query);

// Tampilkan data dalam bentuk HTML
while ($row = mysqli_fetch_array($result)) {
  echo "<div class='card'>";
  echo "<div class='card-body'>";
  echo "<h5 class='card-title'>" . $row['judul_buku'] . "</h5>";
  echo "<p class='card-text'>" . $row['penerbit'] . "</p>";
  echo "</div>";
  echo "</div>";
}
?>
