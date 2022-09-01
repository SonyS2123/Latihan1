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

				//Prepare Query

				$nama = $_POST['txtNama'];
				$tanggallahir =$_POST['dtpTanggalLahir'];
				$usia = $_POST['txtUsia'];
				$kelamin = ($_POST['opgKelamin']=="Pria") ? "Pria" : "Wanita" ;
				$isMenikah = (isset($_POST['chkisMenikah'])) ? TRUE : FALSE;

				//String Query
				$strQuery = 
				"

					INSERT INTO peserta
					(
						nama,
						tanggallahir,
						usia,
						kelamin,
						isMenikah
					)
					VALUE
					(
						'$nama',
						'$tanggallahir',
						'$usia',
						'$kelamin',
						'$isMenikah'

					);

				";

				//proses Query
				$query = mysqli_query($conTraining,$strQuery) or die(mysqli_error());
				if($query)
				{
					echo
						"

						Berhasil diSimpan
						<meta
							http-equiv='refresh'
							content='1, url=ListPeserta.php'
						>
						";	
				}
				
					else
					{
						echo
						"
							Gagal menyimpan
							<meta
							http-equiv='refresh'
							content='1, url=ListPeserta.php''
						>

						";
					}
				

 		?>