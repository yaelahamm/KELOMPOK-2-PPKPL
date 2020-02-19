<!DOCTYPE html>

<html>
  <head>
    <title></title>
    <link
            rel="stylesheet"
            href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
            integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
            crossorigin="anonymous">
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="assets/css/main.css" />
  </head>
  <body>  
    <!-- Header -->
    <header id="header">
      <div class="inner">
        <a href="index.html" class="logo"><strong></strong></a>
        <nav class="navbar navbar-expand-lg navbar-trans navbar-inverse">

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <a class="nav-link" href="anggota.php">Home</a>
        <a href="index.php" onclick="alert('Anda akan keluar dari akun anda. lanjutkan?')">Logout?</a>
  </div>
</nav>
        
        <a href="#navPanel" class="navPanelToggle"
          ><span class="fa fa-bars"></span
        ></a>
      </div>
    </header>

    <!-- Banner -->
    <section id="banner">
      <div class="inner">
        <header>
          <h1><i>Ubah Anggota</i></h1>
        </header>

        <div class="flex ">
          <div>
<?php
// memasukan file koneksi database
include_once("config.php");

// jika tombol update ditekan 
if(isset($_POST['update']))
{
    $nim = $_POST['nim'];
    $nama=$_POST['nama'];
    $jurusan=$_POST['jurusan'];
    $kelas=$_POST['kelas'];

    // update data user
    $result = mysqli_query($mysqli, "UPDATE anggota SET nim='$nim',nama='$nama',jurusan='$jurusan',kelas='$kelas' WHERE nim=$nim");

    // diarahkan kembali ke halaman home untuk menampilkan daftar user terbaru
    header("Location: tampilananggota.php");
}
?>
<?php
// menampilkan data user yang terpilih berdasarkan id
// mendapatkan id dari url
$nim = $_GET['nim'];

// Fetech data user berdasarkan id
$result = mysqli_query($mysqli, "SELECT * FROM anggota WHERE nim=$nim");

//memecah variabel result kedalam bentuk array dan simpan kedalam variabel user_data
while($user_data = mysqli_fetch_array($result))
{
    $nim = $user_data['nim'];
    $nama = $user_data['nama'];
    $jurusan = $user_data['jurusan'];
    $kelas = $user_data['kelas'];
}
?>
<html>
<head>  
    <title>Edit User Data</title>
</head>

<body>
    <form name="update_user" method="post" action="ubahanggota.php">
        <table border="0">
            <tr> 
                <td>Nim</td>
                <td> : </td>
                <td><input type="text" name="nim" value=<?php echo $nim;?> required ></td>
            </tr>
            <tr> 
                <td>Nama</td>
                <td> : </td>
                <td><input type="text" name="nama" value=<?php echo $nama;?> required ></td>
            </tr>
            <tr>
                <td>Jurusan</td>
                <td> : </td>
                <td>
                <select name="jurusan" required>
                        <option value="Keperawatan" <?= $jurusan == "keperawatan" ? "selected" : null ?>>Keperawatan</option>
                        <option value="Teknik Informatika" <?= $jurusan == "Teknik Informatika" ? "selected" : null ?>>Teknik Informatika</option>
                        <option value="Teknik Mesin" <?= $jurusan == "Teknik Mesin" ? "selected" : null ?>>Teknik Mesin</option>
                        <option value="Teknik Pendingin dan Tata Udara" <?= $jurusan == "Teknik Pendingin dan Tata Udara" ? "selected" : null ?>>Teknik Pendingin dan Tata Udara</option>
                </select>
                </td>
            </tr>
            <tr> 
                <td>Kelas</td>
                <td> : </td>
                <td><input type="text" name="kelas" value=<?php echo $kelas;?> required ></td>
            </tr>
            <tr>
                <!-- <td><input type="hidden" name="nim" value=?php echo $nim?>></td> -->
                <td></td>
                <td></td>
                <td><input type="submit" name="update" value="update"></td>
            </tr>
        </table>
    </form>
</body>
</html>
        </div>
        
    <!-- Scripts -->
    <script
    src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
    <script
    src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
    <script
    src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/skel.min.js"></script>
    <script src="assets/js/util.js"></script>
    <script src="assets/js/main.js"></script>
  </body>
</html>
