

<style>
body {
  background-image: url('assets/images/Mumet.png');
  background-repeat: no-repeat;
  background-attachment: fixed; 
  background-size: 100% 100%;
}
</style>




<?php

error_reporting(E_ALL);
include_once 'confirm.php';
if (isset($_POST['submit']))
{
	        $id = $_POST["id"];
            $nama = $_POST["nama"];
            $usia = $_POST["usia"];
            $kelamin = ($_POST['kelamin']=="Pria") ? "Pria" : "Wanita" ;
            $isMenikah = (isset($_POST['isMenikah'])) ? TRUE : FALSE;
            $tanggalLahir = $_POST["tanggalLahir"];

    		$strQuery = "UPDATE peserta SET
                        id = '{$id}',
                        nama = '{$nama}',
                        usia = '{$usia}',
                        kelamin = '{$kelamin}',
                        isMenikah = '{$isMenikah}',
                        tanggalLahir = '{$tanggalLahir}'
    	                WHERE id = '{$id}'";
    		$query = mysqli_query($conTraining, $strQuery);
    		header('location: ListPeserta.php');
    	}
    	$id = $_GET['id'];

            $strQuery = " 
            SELECT * FROM peserta WHERE id = '{$id}'";
            $query = mysqli_query($conTraining, $strQuery);
            if (!$query) die('Error: Data tidak tersedia');
			$data = mysqli_fetch_array($query); 

			function is_select($var, $val) {
			if ($var == $val) return 'selected="selected"';
			return false;
}
?>


<style type="text/css">
            form input[type="submit"] {
            border: 1px solid #197a43;
            background-color: #197a43;
            color: #ffffff;
            font-weight: bold;
            padding: 5px 15px;
        }
    </style>

<h2>Edit Peserta</h2>

<form method="post" action="ubah.php" enctype="multipart/form-data">

    <table border="1">
            <tr>
                <td><label>nama</label></td>
                <td><input type="text" name="nama" value="<?php echo $data['nama'];?>"></td>
            </tr>

            <tr>
                <td><label>Tanggal Lahir</label></td>
                <td><input type="date" name="tanggalLahir" value="<?php echo $data['tanggalLahir'];?>"></td>
            </tr>

            <tr>
                <td><label>Usia</label></td>
                <td><input type="number" name="usia" value="<?php echo $data['usia'];?>"></td>
            </tr>

            <tr>
                <td><label>Kelamin</label></td>
                <td>
                    <input type="radio" . name="kelamin" value="Pria">Pria
                    <input type="radio" . name="kelamin" value="Wanita">Wanita
                </td>
            </tr>

            <tr>
                <td><label>Menikah</label></td>
                <td><input type="checkbox" name="isMenikah" value="<?php echo $data['isMenikah'];?>"></td>
            </tr>


    </table>
    <br>
    <div class="submit">
    	<input type="hidden" name="id" value="<?php echo $data['id'];?>" />
		<input type="submit" name="submit" value="Submit" />
    </div>
</form>
