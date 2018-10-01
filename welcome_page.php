<?php
	include("./login_fun.php");
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>AXIS SERVICES</title>
		<style>
			body {
				margin_top: 200px;
				margin-left: 200px;
				margin-right: 200px;
				font-family: Calibri;
				background-color: azure;
			}
			h1{
				font-size: 40px;
			}

		</style>
	</head>
	<body>
<?php
$your_name = $_SESSION['disp_user']; 
	echo '<img src="https://images.littleakiba.com/product17224-large-3.jpg" width="200" height="200"  alt="Axis Logo" style="margin-left:200px">';
	echo "<h1>Welcome, $your_name.</h1>";
	echo "<h2>Good,$time_tag.</h2>";
?>

	</body>

</html>