<?php
// memasukan file kooneksi database
include_once("config.php");

// mendapatkan id dari url untuk menghapus user
$nim = $_GET['nim'];

// menghapus baris user dari tabel berdasarkan id yang diberikan

$result = mysqli_query($mysqli, "DELETE FROM anggota WHERE nim=$nim");


// setelah menghapus akan di arahkan kembali ke home, agar daftar user terbaru dapat ditampilkan
header("Location:tampilananggota.php");
?>