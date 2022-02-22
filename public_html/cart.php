<?php
    session_start();
    include "header.php";
    $canLogin = $_SESSION['LogIn'];
 ?>


        <?php
    if($canLogin == false) {
        echo '<h5>Invalid Login! Please try again</h5><br><a href = "loginToCart.php">Back to login</a>';
    }
    
    else {
         echo '<h1>Hello, ' . $_COOKIE["userName"]. '</h1>';
         echo '<div>Here is the cart</div>';
    }
    
       include "footer.php"; 
 ?>
        
   


