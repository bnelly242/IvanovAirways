<?php
?>
<html>
	<head>
	<title>FlightSearchForm</title>
	<link rel="stylesheet" type="text/css" href="StyleSheet.css">

	</head>
	<body>
		<?php
		include ("Connection.php");
		echo "<br>";
		$sql=("Select * from Flight");
		if (mysqli_query($con, $sql)){
		    echo "insert succesful";
		}
		
		
		?>

	</body>
</html>

<?php
?>