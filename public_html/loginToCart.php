
<?php
include "header.php";
?>


 <form method="POST" action="validateLogin.php" class = "form">
     <h1>Enter a user name and password:</h1><br>
        <label for="userName">User name:</label>
        <input type="text" id="fname" name="userName" placeholder = "john_doe123"><br>
         <a style = "font-size:12px" href="UsernamesInUse.php">Forgot username? Click to see a list of valid usernames</a><br><br>
        <label for="password">Password:</label>
        <input type="password" id="lname" name="password"><br><br>
          
        <input type="submit" id="submit" name="submit" value = "submit"><br><br>
  </form>

<?php include "footer.php"; ?>

