<?php
echo "My first PHP script!";
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Training</title>
</head>
<body>

	<?php
		echo "Hello, ";
	?>

	<!-- ini tag HTML -->

	<h1>Hallo</h1>
	
	<p>Hallo</p>

	<!-- ini tag PHP -->
	
	<h1>
	<?php
		echo "Hello, ";
	?>
	</h1>

	<p>
	<?php
		echo "Hello, ";
	?>
	</p>

<?php
		echo "<br><br>";
		$nama = "Babi";
		echo "Hello, $nama ";
		echo "<br>";
		echo "Hello, $nama ";
		echo "<br>";
		$x = 5+7+3+5+10;
		echo "$x";
		echo "<br><br>";
?>


<?php
		$muka = "babi";
			function myKamar() //penggunaan fuction
			{
				global $muka;
				echo "Kamu adalah ". $muka ;

			}

			myKamar();
			echo "<br><br>";
?>

<?php
		$uang = 999.999; //data string
		var_dump($uang);
		echo "<br><br>";

		$isKawin = true;	//fungsi true & false
		$isTidakKawin = false;
		echo "isKawin".$isKawin."<br>";
		echo "isTidakKawin".$isTidakKawin."<br>";
		var_dump($isTidakKawin);
		echo "<br><br>";


		$anaks = array("sony","hevi","aleng","tata.j");	//fungsi array
		print_r($anaks[0]);
		print_r($anaks[1]);
		print_r($anaks[2]);
		print_r($anaks[3]);
		echo "<br><br>";

		$nol = null;
		var_dump($nol);
		echo "<br><br>";

		echo strlen("Sony S"); //buat ngitung huruf
		echo "<br><br>";
?>

</body>
</html>