<!DOCTYPE html>
<html>
<head>

<title>WebSiteTraining</title>

<!-- ------------------------------------------------------------------------------------------------ -->
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
/* Style the body */
body {
  font-family: Arial;
  margin: 0;
}

/* Header/Logo Title */
.header {
  padding: 60px;
  text-align: center;
  background: #1abc9c;
  color: white;
  font-size: 30px;
}

/* Page Content */
.content {padding:20px;}
</style>
</head>
<body>

<div class="header">
  <h1></h1>
  <p>PT. Suka Mundur Suka Maju Indonesia</p>
</div>
<!-- ------------------------------------------------------------------------------------------------ -->

<!-- ------------------------------------------------------------------------------------------------ -->	
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
}

.navbar {
  overflow: hidden;
  background-color: #333;
}

.navbar a {
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

.dropdown {
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 16px;  
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: red;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: #ddd;
}

.dropdown:hover .dropdown-content {
  display: block;
}
</style>


<body>

<div class="navbar">
  <a href="/Training">Home</a>

  <div class="dropdown">
    <button class="dropbtn">Participant 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="component/peserta_add.php">Register</a>
      <a href="ListPeserta.php">List Participant</a>
    </div>
  </div> 

  <div class="dropdown">
    <button class="dropbtn">Transaction
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="./Edit.php">Training</a>
    </div>
  </div> 

 <a href="./MoreInformation.php">Suggestion</a>
</div>
<!-- ------------------------------------------------------------------------------------------------ -->
	<h1>
		Kontak kami lebih lanjut
	</h1>
<!-- ------------------------------------------------------------------------------------------------ -->
		<!-- Form fungsi sebagail kolom pengisian -->
		<form class="Submit">
		
				<table border="1">
					<tr>
						
						<td><label for="nama"> Masukan nama Anda</label></td>
							
						<td><input type="text" name="nama" id="nama" value=""></td>
						
					</tr>
						<br>
					<tr>
						<td><label for="email"> Masukan email Anda</label></td>	
						
						<td><input type="text" name="email" id="email" value=""></td>
					</tr>
				</table>

					<br>
					<br>

			<button>Submit</button>
					<br>
					<br>
		</form>
<!-- ------------------------------------------------------------------------------------------------ -->
	

			<script type="text/javascript">
				let content = document.getElementByID("nama").value;

				function funKlik(content)
				{
					return alert ("Hello," + content)
				}


			</script>

		<form>
			<div class="container">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.6301293929864!2d107.0950875167663!3d-6.312224216879522!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e699074932861ab%3A0x9c015c51c485192a!2sJalan%20Irian%203%2C%20Jatiwangi%2C%20Kec.%20Cikarang%20Bar.%2C%20Kabupaten%20Bekasi%2C%20Jawa%20Barat%2017530!5e0!3m2!1sid!2sid!4v1662014722335!5m2!1sid!2sid" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></iframe>
		
			</div>
		</form>

		<br>
<!-- ------------------------------------------------------------------------------------------------ -->
		<p>Contach Person</p>
		<ul>
			<li>&#127968; 	<a href="https://goo.gl/maps/Ue1My6iZifvdJWd96" target="blank">	Kawasan Industri MM2100 Blok KK2, 3 & 4 Cikarang Barat Bekasi 17520, Indonesia</a>	</li>
			<li>&#128241;	<a href="tell:+62858888888">0858888888</a>	</li>
			<li>&#9742;		<a href="tell:021- 123456">021- 123456</a>	</li>
			<li>&#128231; 	<a href="mailto: sorayajaya@gmail.com">	sorayajaya@gmail.com</a>	</li>

		</ul>
<!-- ------------------------------------------------------------------------------------------------ -->

</body>
</html>