<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../assets/styles/main.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

	<!-- membuat menu navigasi -->
		<nav>
			<a href="../index.php">home</a>
			<a href="berita.php">berita</a>
			<a href="karyawan.php">List karyawan</a>
			<a href="kontak.php">Kontak</a>
			<a href="tentang.php">Tentang</a>
		</nav>
	<!-- ini judul -->
		<h1>
			Kontak
		</h1>
		<p>
			Kontak kami lebih lanjut
		</p>

		<!-- Form fungsi sebagail kolom pengisian -->
		<form class="Submit">
			<!-- div berfungsi untuk divider -->
			<div class="container">
				<label for="nama"> Masukan nama Anda</label>	
				<input type="text" name="nama" id="nama" value="">
				<label for="email"> Masukan email Anda</label>	
				<input type="text" name="email" id="email" value="">

			</div>
			<!-- button berfungsi untuk tombol -->
			<button>Submit</button>
		</form>

			<script type="text/javascript">
				let content = document.getElementByID("nama").value;

				function funKlik(content)
				{
					return alert ("Hello," + content)
				}


			</script>

		<form>
			<div class="container">

				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.7166621808415!2d106.90231141404345!3d-6.168682562168424!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f52f502b52af%3A0x6d72d9e6ca3c3478!2sWisma%20Gading%20Permai!5e0!3m2!1sid!2sid!4v1660027872354!5m2!1sid!2sid" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
		
			</div>
		</form>

		<br>

		<p>Contach Person</p>
		<ul>
			<li>&#127968; 	<a href="https://goo.gl/maps/3QkRsV7xLoiXaw4M8" target="blank">	Jl.Se'enaknya saya saja</a>	</li>
			<li>&#128241;	<a href="tell:+62858888888">0858888888</a>	</li>
			<li>&#9742;		<a href="tell:+62211212312">021-1212312</a>	</li>
			<li>&#128231; 	<a href="mailto:ukasukasaya@gmail.com">	sukasukasaya@gmail.com</a>	</li>

		</ul>

</body>
</html>