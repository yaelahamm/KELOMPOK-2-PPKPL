<?php
// memasukan file kooneksi database
include_once("config.php");

// mendapatkan id dari url untuk menghapus user
$id_buku = $_GET['id_buku'];

// menghapus baris user dari tabel berdasarkan id yang diberikan

$result = mysqli_query($mysqli, "DELETE FROM buku WHERE id_buku=$id_buku");


// setelah menghapus akan di arahkan kembali ke home, agar daftar user terbaru dapat ditampilkan
header("Location:tampilanbuku.php");
?>