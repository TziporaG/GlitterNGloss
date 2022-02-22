<?php

session_start();
include "header.php";

    if(!isset($_POST['userName']) || !isset($_POST['password'])) {

        header("Location: loginToCart.php");
    } 

$userName = $_POST['userName'];
$password = $_POST['password'];

$login = false;

$valid_logins = array(
      "jackZhe90"=>"Jan212022!",
      "DavidLovesPurple"=>"htmlIsAwesome",
      "CodeMaster"=>"greenbeans",
      "SusanThomas"=>"su789thom",
      "username"=>"pasword",
      "lightbulb"=>"56RiverRoad",
      "website"=>"php",
);

// Go through every $key => $value pair
foreach ($valid_logins as $validUserName => $validPassword) {

    $login = ($validUserName === $userName && $validPassword === $password) ? true : false;
    if($login) break;
}

if($login) {
    setcookie('userName', $userName);
    $_SESSION['LogIn'] = True;
}
else {
    $_SESSION['LogIn'] = False;
}

echo '<a href="cart.php">Go to cart</a>';

include "footer.php";
?> 