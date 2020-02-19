<!DOCTYPE html>
<html>
<head>
	<title>Polindra Library</title>
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

<header id="header">
      <div class="inner">
        <a href="index.html" class="logo"><strong></strong></a>
        <nav id="nav">
        <a href="index.php">Home</a>
        </nav>
        <a href="#navPanel" class="navPanelToggle">
		<span class="fa fa-bars"></span></a>
      </div>
    </header>
 
 <section id="banner">
      <div class="inner">
	<h1>Login</h1>

	<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan']=="gagal"){
			echo "<div class='alert'>Username dan Password tidak sesuai !</div>";
		}
	}
	?>
 
	<div class="kotak_login"> 
		<form action="cek_login.php" method="post">
			<input type="text" name="username" class="form_login" placeholder="Username" required="required">
			<br>
			<input type="password" name="password" class="form_login" placeholder="Password" required="required">
			<br>
			<input type="submit" class="tombol_login" value="LOGIN">
			
		</form>
		
	</div>
 
 
</body>
</html>