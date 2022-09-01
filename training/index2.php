<!DOCTYPE html>
<html>
	<!-- ini adalah head -->
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Training</title>
		<link rel="stylesheet" type="text/css" href="assets/styles/main.css">
	</head>


	<!-- ini adalah body -->
	<body>

		<!-- membuat menu navigasi -->
		<!-- comment li itu seperti enter setiap content -->
		<nav class="nav">
			<a class="nav-link" href="index.php">home</a>
			<a class="nav-link" href="component/berita.php">berita</a>
			<a class="nav-link" href="component/karyawan.php">List karyawan</a>
			<a class="nav-link" href="component/kontak.php">Kontak</a>
			<a class="nav-link" href="component/tentang.php">Tentang</a>

		<!-- 	<a href="component/berita.php">berita</a>
			<a href="component/karyawan.php">List karyawan</a>
			<a href="component/kontak.php">Kontak</a>
			<a href="component/tentang.php">Tentang</a> -->
		</nav>
		<?php 
				include 'header.php'
		 ?>


		<!-- ini judul -->
		<h1> 
			Jam 16.30 masih lama?
		</h1>

		<!-- ini paragraft -->
		<p>
		Pesatnya perkembangan teknologi informasi, menjadikan masyarakat sadar bahwa teknologi sangat dibutuhkan. Sehingga bermunculan banyak orang ingin mempelajarinya. Khususnya yang populer saat ini salah satunya adalah web development. Mahalnya untuk membeli website yang sudah jadi, membuat sebagian orang lebih memilih untuk membuatnya sendiri. Biasanya orang yang memilih jalan tersebut, mereka awali dengan kursus , kuliah dibidang IT atau mungkin modal nekat belajar sendiri alias otodidak.
		Oleh karena itu dibuka lah Lembaga kursus WebHozz Training. Tempat belajar untuk peminat salah satunya web development. Selain diusahakan setiap peserta training bisa membuat website sendiri, WebHozz juga memberikan modul pada setiap materinya, diharapkan modul tersebut dapat menjadi pedoman sebagai langkah awal menjadi programmer. Nah modul kali ini tentang web programming atau web dinamis, dimana terdapat sitem administratornya. Biasanya dibuat menggunakan PHP, Mysqli, ASP.net dan lain sebagainya. WebHozz lebih memilih memperkenalkan kepada peserta untuk mempelajari progamming web dengan PHP dan Mysqli, karena selain open source, mudah dipelajari dan multi platform artinya bisa digunakan disemua editor, seperti Adobe Dreamweaver, Notepad, Notepad++ dan lain – lain.	
		</p>

		<!-- ini daftar -->
		<p> Client-Side Proggraming</p>
		<ul>
			<li>HTML</li>	
			<li>CSS</li>
			<li>JavaScript</li>
		</ul>

		<!-- ini insert gambar -->
		<img 
		src="assets/images/Mumet.png"
		width="100%"
		alt="mumet">

		<!-- break line -->
		<br>
		<h1>
			Bio Data Mazseh
		</h1>

		<!-- tag table -->
		<!-- comment tr itu untuk table row dan td untuk table detail -->  

		<table border="1" cellpadding="">
			<tr>
				<!-- th itu tulisan bold dan rata tengah -->
				<!-- <th colspan="2"></th> <- ini bisa seperti merge di ecxel 2 itu berapa collom yang akan di merge-->
				<th>Nama</th>
				<th>Tempat lahir </th>
				<th>Tanggal lahir</th>
			</tr>

			<tr>
				<!-- td itu tulisan biasa rata kiri -->
				<td>Sumitro</td>
				<td>Bogor</td>
				<td>18 agustus 2022</td>
			</tr>

			<tr>
				<!-- td itu tulisan biasa rata kiri -->
				<td>Sumarti</td>
				<td>Cikole</td>
				<td>17 agustus 2022</td>
			</tr>



		</table>


<!-- 		<script type="text/javascript">
			
			// Variable
			// let nama = "Sony";
			// alert("Hello,"+nama);

			let namaDepan = "Sony";
			let namaBelakang = "Susanto";

			let namaLengkap = namaDepan + namaBelakang;
			alert (namaLengkap);

		</script> -->

	</body>

</html>