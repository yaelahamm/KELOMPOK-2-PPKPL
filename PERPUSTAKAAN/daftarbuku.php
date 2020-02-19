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
        
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="index.php">Home</a>
      </li>
      <li class="nav-item">
        <a href="login.php">Login</a>
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
          <h1><i>List data Buku</i></h1>
        </header>

        <div class="flex ">
          <div>
<?php
include_once("config.php");
?>

<html>
<head>    
    <title>List data Buku</title>
</head>
<body>

<table>
	<form method="post">
		<td><label color="white">Pencarian data buku : </label>
    <td><input type="text" name="cari" placeholder="Ketik disini untuk mencari data">
    <td><input type="submit" name="pencarian" value="Cari">
	</form>
</table>

	<table>
		    <tr>
        		<th color="white"><center>Kode Buku</center></th>
            <th color="white"><center>judul buku</center></th>
            <th color="white"><center>Jumlah buku</center></th>
            <th color="white"><center>Sinopsis</center></th>
            <th color="white"><center>Penerbit</center></th>
            <th color="white"><center>Pengarang</center></th>
            <th color="white"><center>Tahun Buku</center></th>
    		</tr>
		<?php  
			{
	
			//jika tombol pencarian ditekan
			if (isset($_POST['pencarian'])) {
				$cari = $_POST['cari']; //maka value cari akan disimpan kedalam variabel cari

				//data pencarian dalam database akan disimpan kedalam variabel query
				$query = mysqli_query($mysqli, "select * from buku where nama like '%$cari%' or id like '%$cari%'");

					//jika jumlah baris > 0
					if(mysqli_num_rows($query) > 0){

						//maka pecah variabel query kedalam bentuk array dan simpan kedalam variabel hasil
						while($hasil = mysqli_fetch_array($query)){


						echo "<tr>";
						echo "<td>".$hasil['id_buku']."</td>";
						echo "<td>".$hasil['judul_buku']."</td>";
						echo "<td>".$hasil['jumlah_buku']."</td>";
            echo "<td>".$hasil['sinopsis']."</td>";   
            echo "<td>".$hasil['penerbit']."</td>";   
            echo "<td>".$hasil['pengarang']."</td>";   
            echo "<td>".$hasil['tahun_buku']."</td>";    
						echo "</tr>"; 

						}

					}else{
						echo "<td colspan=6><center>Data Tidak ditemukan</center></td>";
					}
			
			}else{

		?>

    <?php  
    	//semua data dalam tabel karyawan akan di order secara descending dan disimpan kedalam variabel result
      $result = mysqli_query($mysqli, "SELECT * FROM buku ORDER BY id DESC");
      $query = mysqli_query($mysqli, "select * from buku");

    	//memecah variabel result kedalam bentuk array dan simpan kedalam variabel user_data
		while($user_data = mysqli_fetch_array($query)) {         
			echo "<tr>";
			echo "<td>".$user_data['id_buku']."</td>";
			echo "<td>".$user_data['judul_buku']."</td>";
			echo "<td>".$user_data['jumlah_buku']."</td>";
			echo "<td>".$user_data['sinopsis']."</td>";
      echo "<td>".$user_data['penerbit']."</td>";
      echo "<td>".$user_data['pengarang']."</td>";
      echo "<td>".$user_data['tahun_buku']."</td>";    
			echo "</tr>";        
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