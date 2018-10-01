<?php
session_start();
if (isset($_POST['submit'])) {
	if (  empty($_POST['password']) || empty($_POST['username'])) {
		echo "<script type='text/javascript'>alert(\"Please fill in the username and password.\");</script>";
	}
	else{

		$username=valid_input($_POST['username']);
		$password=valid_input($_POST['password']);
		if ($password=="123456"){
			$_SESSION['disp_user']=$username;
			header("Location: http://localhost/welcome_page.php");
		}else{
			echo "<script type='text/javascript'>alert(\"Invalid credentials. Please correctly input the username and password.\");</script>";
		}
	}
}


$time_tag = "";
$time = date('H');
if ($time >  0 && $time <=10) $time_tag = " morning";
if ($time >10 && $time <=12) $time_tag = " day";
if ($time >12 && $time <=17) $time_tag = " afternoon";
if ($time > 17 && $time <=20) $time_tag = " evening";
if ($time > 20) $time_tag = " night";


function valid_input($data) {  
	$data = htmlspecialchars($data);
	$data = trim($data);
	$data = stripslashes($data);
  return $data;
}
?>