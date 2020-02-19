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
          <h1><i>List data Anggota</i></h1>
        </header>

        <div class="flex ">
          <?php
include_once("config.php");
?>

<html>
<head>    
    <title>List data Anggota</title>
</head>
<body>

<table>
	<form method="post">
		<td><label color="white">Pencarian data anggota : </label>
    <td><input type="text" name="cari" placeholder="Ketik disini untuk mencari data">
    <td><input type="submit" name="pencarian" value="Cari">
	</form>
</table>

	<table width='80%' border=1>
		    <tr>
        		<th color="white"><center>Nomor Anggota</center></th>
            <th color="white"><center>Nama</center></th>
            <th color="white"><center>Jurusan</center></th>
            <th color="white"><center>Kelas</center></th>
            <th color="white"><center>Operasi</center></th>
    		</tr>
		<?php  
			{
	
			//jika tombol pencarian ditekan
			if (isset($_POST['pencarian'])) {
				$cari = $_POST['cari']; //maka value cari akan disimpan kedalam variabel cari

				//data pencarian dalam database akan disimpan kedalam variabel query
				$query = mysqli_query($mysqli, "select *from anggota where nama like '%$cari%' or nim like '%$cari%'");

					//jika jumlah baris > 0
					if(mysqli_num_rows($query) > 0){

						//maka pecah variabel query kedalam bentuk array dan simpan kedalam variabel hasil
						while($hasil = mysqli_fetch_array($query)){


						echo "<tr>";
						echo "<td>".$hasil['nim']."</td>";
						echo "<td>".$hasil['nama']."</td>";
						echo "<td>".$hasil['jurusan']."</td>";
						echo "<td>".$hasil['kelas']."</td>";    
						echo "<td><a href='tambahanggota.php'>Tambah</a> | <a href='ubahanggota.php?nim=$hasil[nim]'>Ubah</a> | <a href='hapusanggota.php?nim=$hasil[nim]'>Hapus</a></td></tr>"; 

						}

					}else{
						echo "<td colspan=6><center>Data Tidak ditemukan</center></td>";
					}
			
			}else{

		?>

    <?php  
    	//semua data dalam tabel karyawan akan di order secara descending dan disimpan kedalam variabel result
    	$result = mysqli_query($mysqli, "SELECT * FROM anggota ORDER BY nim DESC");

    	//memecah variabel result kedalam bentuk array dan simpan kedalam variabel user_data
		while($user_data = mysqli_fetch_array($result)) {         
			echo "<tr>";
			echo "<td>".$user_data['nim']."</td>";
			echo "<td>".$user_data['nama']."</td>";
			echo "<td>".$user_data['jurusan']."</td>";
			echo "<td>".$user_data['kelas']."</td>";    
			echo "<td><a href='tambahanggota.php'>Tambah</a> | <a href='ubahanggota.php?nim=$user_data[nim]'>Ubah</a> | <a href='hapusanggota.php?nim=$user_data[nim]'>Hapus</a></td></tr>";        
		}

	}
}
    	?>
    </table>
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
