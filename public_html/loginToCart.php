
<?php
include "header.php";
echo '<h5>Enter a user name and password:</h5>';
   
?>


 <form method="POST" action="validateLogin.php" class = "form">
        <label for="userName">User name:</label>
        <input type="text" id="fname" name="userName" placeholder = "john_doe123"><br><br>
        <label for="password">Password:</label>
        <input type="password" id="lname" name="password"><br><br>
          
        <input type="submit" id="submit" name="submit" value = "submit"><br><br>
  </form>

<?php include "footer.php"; ?>

