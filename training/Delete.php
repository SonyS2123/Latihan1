<?php
include_once 'confirm.php';
$id = $_GET['id'];
$strQuery = "DELETE FROM peserta WHERE id = '$id'";
$query = mysqli_query($conTraining, $strQuery) or die(mysqli_error($conTraining));
				if($query)
				{
					echo
						"

						Peserta Sudah di Delete
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