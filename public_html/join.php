<?php
include "header.php";
if(isset($_POST['submit'])){
	
	echo "test";
	$username=$_POST['username'];
	$password=$_POST['password'];
	$confirm=$_POST['confirmpassword'];
	$role=$_POST['role'];
	
	if(empty($username)||empty($password)||empty($confirm)){
		header("Location: register.php?error=emptyfields&username=".$username);
		exit();
	}
	elseif(!preg_match("/^[a-zA-Z0-9]*/",$username)){
		header("Location: register.php?error=invalidusername&username=".$username);
		exit();
	}
	elseif($password!==$confirm){
		header("Location: register.php?error=passwordsdonotmatch&username=".$username);
		exit();
	}
	else{
		$sql="SELECT userName from authorizedusers where userName=?";
		//$sql="insert into authorizedUsers(UserName,Password,RoleID) values($username,$password,null)"
		$stmt=mysqli_stmt_init($mysqli);
		if (!mysqli_stmt_prepare($stmt,$sql)){
			header("Location: register.php");
			exit();
		}
		else{
			mysqli_stmt_bind_param($stmt,"s",$username);
			mysqli_stmt_execute($stmt);
			mysqli_stmt_store_result($stmt);
			$rowCount=mysqli_stmt_num_rows($stmt);
			
			if($rowCount>0){
				header("Location: Register.php?error=usernametaken");
				exit();
			}
			else{
				$sql="INSERT INTO authorizedusers (userName,Password, RoleID) values (?,?,?)";
				$stmt=mysqli_stmt_init($mysqli);
				if (!mysqli_stmt_prepare($stmt,$sql)){
			header("Location: register.php?error=sqlerror");
			exit();
				}
				else{
					$hashedPass=password_hash($password,PASSWORD_DEFAULT);
				mysqli_stmt_bind_param($stmt,"ssi",$username,$hashedPass,$role);
				mysqli_stmt_execute($stmt);
			header("Location: register.php?success=registered");
			exit();
						}
	}
	mysqli_stmt_close($stmt);
	mysqli_close($mysqli);
}
}}
include "footer.php";
?>