<?php

session_start();
include "header.php";
/*
$serverName = "localhost";
$dbUserName = "root";
$dbPassword = "";
$dbName = "GLITTER_N_GLOSS";

$conn = mysqli_connect($serverName, $dbUserName, $dbPassword, $dbName);
*/
if (!$conn){
    die("Connection failed: ".mysqli_connect_error());
}

    if(!isset($_POST['userName']) || !isset($_POST['password'])) {

        header("Location: loginToCart.php");
    } 

$userName = $_POST['userName'];
$password = $_POST['password'];

$login = false;

$result = mysqli_query($conn, "SELECT UserName FROM validUsers WHERE UserName='".$userName.
        "' && Password='".$password."'");
if($result == False) {
    $login = false;
    echo '<a href="loginTOCart.php">Error, please try again</a>';
}
else if (mysqli_num_rows($result) == 1){
    $login = true;
}

if($login) {
    setcookie('userName', $userName);
    echo '<a href="cart.php">Go to cart</a>';
    $_SESSION['LogIn'] = True;
}
else {
    $_SESSION['LogIn'] = False;
}



include "footer.php";
?> 