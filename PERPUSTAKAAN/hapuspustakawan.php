p<?php
// memasukan file kooneksi database
include_once("config.php");

// mendapatkan id dari url untuk menghapus user
$id = $_GET['id'];

// menghapus baris user dari tabel berdasarkan id yang diberikan

$result = mysqli_query($mysqli, "DELETE FROM pustakawan WHERE id=$id");


// setelah menghapus akan di arahkan kembali ke home, agar daftar user terbaru dapat ditampilkan
header("Location:tampilanpustakawan.php");
?>