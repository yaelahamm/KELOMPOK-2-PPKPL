<!DOCTYPE html>

<html>
  <head>
    <title>Login Anggota</title>
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
          <h2>Login Anggota</h2>

      <?php 
        if(isset($_GET['pesan'])){
          if($_GET['pesan']=="gagal"){
            echo "<div class='alert'>Username dan Password tidak sesuai !</div>";
          }
        }
	    ?>

		  <form action="cek_login.php" method="post">
			<div class="login">
			
			  <input type="text" name="NIM"	placeholder="Masukan NIM Anda"/><br />
			  <input type="password" name="pass" placeholder="Masukan Password"/><br />
        <input type="submit" class="tombol_login" value="LOGIN">
		</header>
      </div>
    </section>
  </body>
</html>