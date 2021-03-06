<!DOCTYPE html>
<html>
<head>
	<title>PHP Training Course</title>
</head>
<body>

	<h1>PHP with MySQL Training Course</h1>
	<h2>Functions - Variable Scope</h2>
	<?php
		// different values for same name variable
		$testvariable = "new value";
		function varScope() {
			$testvariable = "local value <br>";
			echo "testvariable inside the function: ".$testvariable;
		}
		varScope();
		echo " testvariable outside the function: ". $testvariable."<br>";

		// same reference for same name variable declared as global
		$var = 100;
		echo $var."<br>";
		function globalVariable(){
			global $var;
			$var = 10;
			echo $var."<br>";
			$var = 50;
		}
		globalVariable();
		echo $var."<br>";
	?>

</body>
</html>