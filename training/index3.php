<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- boostrap -->
	<link rel="stylesheet" type="text/css" href="assets/styles/bootstrap-5.2.0-dist/css/bootstrap.min.css">
	<title>WebSiteTraining</title>

</head>

<!-- 	<h1>
		Selamat Datang di Website Traning
	</h1> -->
<body>



		<nav class="navbar navbar-expand-sm bg-light sticky-top">
				<ul class="navbar-nav me-auto">

					<li class="nav-brand">
						<a href="/Training">
							Beranda
						</a>
					</li> 

					<li class="nav-item dropdown">
						<a 
							class="nav-link dropdown-toggle" 
							href="#"
							role="button"
							data-bs-toggle="dropdown"
						>
							Master Data
						</a>
					

					<ul class="dropdown-menu">
						<li class="dropdown-item">
							<a href="component/peserta_add.php">
								Peserta
							</a>
						</li>
						<li class="dropdown-item">
							<a href="#">
								Instruktur
							</a>
						</li>
					</ul>
					</li>
						

					<li class="nav-item dropdown">
						<a 
							class="nav-link dropdown-toggle" 
							href="#"
							role="button"
							data-bs-toggle="dropdown"
						>
							Transaksi
						</a>
					

					<ul class="dropdown-menu">
						<li class="dropdown-item">
							<a href="#">
								Pelatihan
							</a>
						</li>

					</ul>
					</li>	


					<li class="nav-item">
						<a href="#">
							Laporan
						</a>
					</li>

				</ul>

		</nav>
	<h1>
		Selamat Datang di Website Traning
	</h1>
	<br>
	<h2>
		Summary Pelatihan
	</h2>

	<?php 
		// informasi server
		$server = "localhost";
		$userName = "root";
		$password = "";
		$database = "training";

		// String koneksi
			$conTraining = mysqli_connect(
			$server,
			$userName, 
			$password,
			$database 


		);

		//String Query
		$strQuery = " SELECT * FROM viewpelatihan1; "; 

		//proses Query
		$query = mysqli_query($conTraining,$strQuery) or die(mysqli_error());

		//fetching data
		
		


	 ?>
	<table class="table">
		<tr>
			<td>id</td>
			<td>Ruang</td>
			<td>Tanggal</td>
			<td>Materi</td>
			<td>Peserta</td>
			<td>Instruktur</td>
		</tr>
	<?php
			while ($data = mysqli_fetch_array($query)) 
		{
			// code...
			$id_nama = $data["id_nama"];
			$ruang = $data["ruang"];
			$tanggal = $data["tanggal"];
			$materi = $data["materi"];
			$murid = $data["murid"];
			$guru = $data["guru"];




	  ?>
		<tr rowspan="3">
			<td><?php echo $id_nama; ?></td>
			<td><?php echo $ruang; ?></td>
			<td><?php echo $tanggal; ?></td>
			<td><?php echo $materi; ?></td>
			<td><?php echo $murid; ?></td>
			<td><?php echo $guru; ?></td>
		</tr>
		<td>
			<!-- <a href="ubah.php?id=<?=$row['id_pelatihan'];?>">Ubah</a> -->
			<a href="Delete1.php?id=<?php echo $data['id_nama'];?>"> Delete </a>
		</td>

		<?php } ?>


	</table>
	<br>
	<h2>
		Summary Peserta
	</h2>
<?php 
		// informasi server
		$server = "localhost";
		$userName = "root";
		$password = "";
		$database = "training";

		// String koneksi
			$conTraining = mysqli_connect(
			$server,
			$userName, 
			$password,
			$database 


		);

		//String Query
		$strQuery = " SELECT * FROM peserta; ";

		//proses Query
		$query = mysqli_query($conTraining,$strQuery) or die(mysqli_error());

		//fetching data
		
		


	 ?>
	<table class="table">
		<tr>
			<td>id</td>
			<td>nama</td>
			<td>usia</td>
			<td>kelamin</td>
			<td>isMenikah</td>
			<td>tanggalLahir</td>
		</tr>
	<?php
			while ($data = mysqli_fetch_array($query)) 
		{
			// code...
			$id = $data["id"];
			$nama = $data["nama"];
			$usia = $data["usia"];
			$kelamin = $data["kelamin"];
			$isMenikah = $data["isMenikah"];
			$tanggalLahir = $data["tanggalLahir"];




	  ?>
		<tr rowspan="3">
			<td><?php echo $id; ?></td>
			<td><?php echo $nama; ?></td>
			<td><?php echo $usia; ?></td>
			<td><?php echo ($kelamin); ?></td>
			<td><?php echo ($isMenikah==1) ? "Menikah" : "Lajang"; ?></td>
			<td><?php echo $tanggalLahir; ?></td>
		</tr>
		<td>
			<!-- <a href="ubah.php?id=<?=$row['id_pelatihan'];?>">Ubah</a> -->
	 		<a href="Delete.php?id=<?php echo $data['id'];?>"> Delete </a>

		</td>

		<?php } ?>

	</table>


	<!-- Popper -->
	<script src="https://unpkg.com/@popperjs/core@2/dist/umd/popper.js"></script>

	<!-- JQuery -->
	<script type="text/javascript" src="assets/script/jquery-3.6.0.js"></script>

	<!-- bootstrap -->
	<script type="text/javascript" src="assets/styles/bootstrap-5.2.0-dist/js/bootstrap.min.js"></script>



</body>


</html>