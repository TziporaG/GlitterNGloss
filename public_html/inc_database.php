<?php
    $db_name="project";
	$db_server_name="localhost";
	$db_user_name="root";
	$db_password="";
	
	$conn=mysqli_connect($db_server_name,$db_user_name,$db_password,$db_name);
	$mysqli = new mysqli("$db_server_name","$db_user_name","$db_password","$db_name");
	
?>