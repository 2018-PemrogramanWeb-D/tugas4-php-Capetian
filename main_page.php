<?php
	include("./login_fun.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <meta charset="utf-8" />
    <title>AXIS SERVICES</title>
    <style>
        body {
            margin-left: 50px;
            margin-right: 50px;
            font-family: Calibri;
            background-color: azure;
        }

    </style>
</head>
<body>

<?php
// passwordnya 123456
    echo '    
		<h1> AXIS SERVICES </h1>
		<hr>
		<h1> ADMIN LOGIN PAGE </h1>
		<img src="https://images.littleakiba.com/product17224-large-3.jpg" width="200" height="200"  alt="Axis Logo" style="margin-left:200px">
		<form method="POST" action="">
				<label for="username">Username</label>
				<input type="text" name="username" ><br>
				<label for="password">Password</label>
				<input type="password" name="password" ><br>
				<button type="submit" name="submit">Login</button>
		</form>
	';
?>
</body>
</html>