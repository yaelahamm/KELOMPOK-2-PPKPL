<!DOCTYPE html>

<html>
  <head>
    <title>Login Pustakawan</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="assets/css/main.css" />
  </head>
  <body class="subpage">
    <!-- Header -->
    <header id="header">
      <div class="inner">
        <a href="index.html" class="logo"><strong>Beranda</strong></a>
        <nav id="nav">
          <a href="index.html">Home</a>
        </nav>
        <a href="#navPanel" class="navPanelToggle"
          ><span class="fa fa-bars"></span
        ></a>
      </div>
    </header>

    <!-- Three -->
    <section id="three" class="wrapper">
      <div class="inner">
        <header class="align-center">
          <h2>Login Pustakawan</h2>
          <?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan'] == "gagal"){
			echo "Login gagal! username dan password salah!";
		}else if($_GET['pesan'] == "logout"){
			echo "Anda telah berhasil logout";
		}else if($_GET['pesan'] == "belum_login"){
			echo "Anda harus login untuk mengakses halaman admin";
		}
	}
	?>
            <form method="post" action="../login/cek_login.php">
            <input type="text" name="NIM" placeholder="username" /><br />
            <input type="password" name="pass" placeholder="password" /><br />

            <input type="button" name="masuk" value="login">
          </form>
        </header>
      </div>
    </section>
  </body>
</html>
