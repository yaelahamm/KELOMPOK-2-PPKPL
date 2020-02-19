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
          <h1><i>Tambah Pustakawan</i></h1>
        </header>

        <div class="flex ">
          <html>
<head>
    <title>Add Users</title>
</head>

<body>
    <form action="tambahpustakawan.php" method="post" name="form1">
        <table width="25%" border="0">
            <tr> 
                <td>Nama</td>
                <td> : </td>
                <td><input type="text" name="nama" required></td>
            </tr>
            <tr> 
                <td>Jenis kelamin</td>
                <td> : </td>
                <td>
                    <select name="jk" required>
                        <option>Laki-laki</option>
                        <option>Perempuan</option>
                    </select>
                </td>
            </tr>
            <tr> 
                <td>Alamat</td>
                <td> : </td>
                <td><textarea name="alamat" required></textarea></td>
            </tr>
            <tr> 
                <td>Username</td>
                <td> : </td>
                <td><input type="text" name="username" required></td>
            </tr>
            <tr> 
                <td>Password</td>
                <td> : </td>
                <td><input type="text" name="password" required></td>
            </tr>
            <tr> 
                <td></td>
                <td></td>
                <td><input type="submit" name="Submit" value="Add"></td>
            </tr>
        </table>
    </form>

    <?php

    // Check If form submitted, insert form data into users table.
    if(isset($_POST['Submit'])) {
        $nama = $_POST['nama'];
        $jk = $_POST['jk'];
        $alamat = $_POST['alamat'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $level = "pustakawan";

        // include database connection file
        include_once("config.php");

        // Insert user data into table
        $result = mysqli_query($mysqli, "INSERT INTO pustakawan(nama,jk,alamat) VALUES('$nama','$jk','$alamat')");
        $result = mysqli_query($mysqli, "INSERT INTO user(nama,username,password,level) VALUES('$nama','$username','$password','$level')");

        // Show message when user added
        echo "User added successfully. <a href='tampilanpustakawan.php'>View Users</a>";
    }
    ?>
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
