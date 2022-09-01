<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- boostrap -->

<!-- 	<link rel="stylesheet" type="text/css" href="assets/styles/bootstrap-5.2.0-dist/css/bootstrap.min.css"> -->
	<title>WebSiteTraining</title>

</head>
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
      <a href="./component/peserta_add.php">Register</a>
      <a href="./ListPeserta.php">List Participant</a>
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
<style type="text/css">
            form input[type="submit"] {
            border: 1px solid #197a43;
            background-color: #197a43;
            color: #ffffff;
            font-weight: bold;
            padding: 5px 15px;
        }
 </style>
<!-- ------------------------------------------------------------------------------------------------ -->
<!-- ------------------------------------------------------------------------------------------------ -->

<!-- ------------------------------------------------------------------------------------------------ -->
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
	<table border="1">
		<tr>
			<td><label>Id</label></td>
			<td><label>Nama</label></td>
			<td><label>Usia</label></td>
			<td><label>Kelamin</label></td>
			<td><label>Status</label></td>
			<td><label>TanggalLahir</label></td>
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
			<td>
				<a href="Delete.php?id=<?php echo $data['id'];?>"> Delete </a>
			</td>
			<td>
	 			<a href="ubah.php?id=<?php echo $data['id'];?>"> Edit </a>
			</td>
		</tr>


		<?php } ?>

	</table>
<!-- ------------------------------------------------------------------------------------------------ -->

	<!-- Popper -->
	<script src="https://unpkg.com/@popperjs/core@2/dist/umd/popper.js"></script>

	<!-- JQuery -->
	<script type="text/javascript" src="assets/script/jquery-3.6.0.js"></script>

	<!-- bootstrap -->
	<script type="text/javascript" src="assets/styles/bootstrap-5.2.0-dist/js/bootstrap.min.js"></script>

<!-- ------------------------------------------------------------------------------------------------ -->

</body>


</html>