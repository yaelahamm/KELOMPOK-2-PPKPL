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
        <a class="nav-link" href="admin.php">Home</a>
        <a class="nav-link" href="tampilanpustakawan.php">Pustakawan</a>
        <a class="nav-link" href="tampilananggota.php">Anggota</a>
        <a class="nav-link" href="tampilanbuku.php">Buku</a>
        <a href="index.php" onclick="alert('Anda akan keluar dari akun anda. lanjutkan?')">Logout?</a>
      </li>
    </ul>
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
          <h1><i>Ubah Pustakawan</i></h1>
        </header>

        <div class="flex ">
          <?php
// memasukan file koneksi database
include_once("config.php");

// jika tombol update ditekan 
if(isset($_POST['update']))
{
    $id = $_POST['id'];
    $nama=$_POST['nama'];
    $jk=$_POST['jk'];
    $alamat=$_POST['alamat'];

    // update data user
    $result = mysqli_query($mysqli, "UPDATE pustakawan SET nama='$nama',jk='$jk',alamat='$alamat' WHERE id=$id");

    // diarahkan kembali ke halaman home untuk menampilkan daftar user terbaru
    header("Location: tampilanpustakawan.php");
}
?>
<?php
// menampilkan data user yang terpilih berdasarkan id
// mendapatkan id dari url
$id = $_GET['id'];

// Fetech data user berdasarkan id
$result = mysqli_query($mysqli, "SELECT * FROM pustakawan WHERE id=$id");

//memecah variabel result kedalam bentuk array dan simpan kedalam variabel user_data
while($user_data = mysqli_fetch_array($result))
{
    $nama = $user_data['nama'];
    $jk = $user_data['jk'];
    $alamat = $user_data['alamat'];
}
?>
<html>
<head>  
    <title>Edit User Data</title>
</head>

<body>
    <form name="update_user" method="post" action="ubahpustakawan.php">
        <table border="0">
            <tr> 
                <td>Nama</td>
                <td> : </td>
                <td><input type="text" name="nama" value=<?php echo $nama;?> required ></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td> : </td>
                <td>
                <select name="jurusan" required>
                        <option value="Laki-laki" <?= $jk == "Laki-laki" ? "selected" : null ?>>Laki-laki</option>
                        <option value="Perempuan" <?= $jk == "Perempuan" ? "selected" : null ?>>Perempuan</option>
                </select>
                </td>
            </tr>
            <tr> 
                <td>alamat</td>
                <td> : </td>
                <td><textarea name="alamat" required><?php echo $alamat;?></textarea></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="hidden" name="id" value=<?php echo $id?>></td>
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
