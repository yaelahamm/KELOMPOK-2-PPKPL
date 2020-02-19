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
          <h1><i>Ubah Buku</i></h1>
        </header>

        <div class="flex ">
          <div>
<?php
// memasukan file koneksi database
include_once("config.php");

// jika tombol update ditekan 
if(isset($_POST['update']))
{
        $id_buku = $_POST['id_buku'];
        $judul_buku = $_POST['judul_buku'];
        $jumlah_buku = $_POST['jumlah_buku'];
        $sinopsis = $_POST['sinopsis'];
        $penerbit = $_POST['penerbit'];
        $pengarang = $_POST['pengarang'];
        $tahun_buku = $_POST['tahun_buku'];

    // update data user
    $result = mysqli_query($mysqli, "UPDATE buku SET id_buku='$id_buku',judul_buku='$judul_buku',jumlah_buku='$jumlah_buku',sinopsis='$sinopsis',penerbit='$penerbit',pengarang='$pengarang',tahun_buku='$tahun_buku' WHERE id_buku=$id_buku");

    // diarahkan kembali ke halaman home untuk menampilkan daftar user terbaru
    header("Location: tampilanbuku.php");
}
?>
<?php
// menampilkan data user yang terpilih berdasarkan id
// mendapatkan id dari url
//$id = $_GET['id'];

// Fetech data user berdasarkan id
$result = mysqli_query($mysqli, "SELECT * FROM buku");

//memecah variabel result kedalam bentuk array dan simpan kedalam variabel user_data
while($user_data = mysqli_fetch_array($result))
{
    $id_buku = $user_data['id_buku'];
    $judul_buku = $user_data['judul_buku'];
    $jumlah_buku = $user_data['jumlah_buku'];
    $sinopsis = $user_data['sinopsis'];
    $penerbit = $user_data['penerbit'];
    $pengarang = $user_data['pengarang'];
    $tahun_buku = $user_data['tahun_buku'];
}
?>
<html>
<head>  
    <title>Edit User Data</title>
</head>

<body>
    <form name="update_user" method="post" action="ubahbuku.php">
        <table border="0">
            <tr> 
                <td>id_buku</td>
                <td><input type="text" name="id_buku" value="<?php echo $id_buku;?>" required ></td>
            </tr>
            <tr> 
                <td>Judul Buku</td>
                <td><input type="text" name="judul_buku" value="<?php echo $judul_buku;?>" required ></td>
            </tr>
            <tr> 
                <td>Jumlah Buku</td>
                <td><input type="text" name="jumlah_buku" value="<?php echo $jumlah_buku;?>" required ></td>
            </tr>
            <tr> 
                <td>Sinopsis</td>
                <td><textarea name="sinopsis" required><?php echo $sinopsis;?></textarea></td>
            </tr>
            <tr> 
                <td>Penerbit</td>
                <td><input type="text" name="penerbit" value="<?php echo $penerbit;?>" required ></td>
            </tr>
            <tr> 
                <td>Pengarang</td>
                <td><input type="text" name="pengarang" value="<?php echo $pengarang;?>" required ></td>
            </tr>
            <tr> 
                <td>Tahun Buku</td>
                <td><input type="text" name="tahun_buku" value="<?php echo $tahun_buku;?>" required ></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value=<?php echo $id_buku?>></td>
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
