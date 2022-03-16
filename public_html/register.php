<?php include "header.php"?>


<form action="join.php" method="post">
        <h1>Register</h1>
	<input type="text" name="username" placeholder="username"><br>
        <a style = "font-size:12px" href="UsernamesInUse.php">Click to see usernames already in use</a><br><br>
	<input type="password" name="password" placeholder="password"><br><br>
	<input type="confirmpassword" name="confirmpassword" placeholder="confirmpassword"><br><br>
	<select name='role'>
		<?php include "roles.php"; ?>
	</select><br><br>
	
	
	<input type="submit" name="submit" value="Register">
</form>
<?php include "footer.php"?>

