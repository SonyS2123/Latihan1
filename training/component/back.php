			<h1>ini outputnya</h1>
			
			<!-- Nama -->


			<p>

				<?php 

					echo "nama:".$_POST['txtNama']."<br>";

				 ?>
			</p>

			<p>
				<?php 
					echo "Tanggal Lahir:".$_POST['dtpTanggalLahir']."<br>";
				 ?>
			</p>

			<p>
				<?php 
					echo "Usia:".$_POST['txtUsia']."<br>";
				 ?>
			</p>

			<p>
				<?php 

					$Kelamin = ($_POST['opgKelamin'] == "Pria") ? "Pria" : "Wanita" ;

					// if ($_POST['opgKelamin'] == "Pria")
					// {
					// 	$Kelamin = "Pria";
					// }

					// else
					// {
					// 	$Kelamin = "Wanita";

					// }


					 echo "Gender:$Kelamin";

				 ?>

			</p>

			<p>
				<?php 

					$isMenikah = (isset($_POST['chkisMenikah'])) ? "Menikah" : "Lajang" ;

					// if(isset($_POST['chkisMenikah']))
					// {
					// 	$isMenikah = "Menikah";
					// }

					// else
					// {

					// 	$isMenikah = "Lajang";
					// }

					echo "Kawin: $isMenikah";

				 ?>

			</p>