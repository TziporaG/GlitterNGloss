<?php include "header.php"?>
<p>Register</p>

<form action="join.php" method="post">
	<input type="text" name="username" placeholder="username">
	<input type="password" name="password" placeholder="password">
	<input type="confirmpassword" name="confirmpassword" placeholder="confirmpassword">
	<select name='role'>
		<?php include "roles.php"; ?>
	</select>
	
	
	<input type="submit" name="submit" value="Register">
</form>
<?php include "footer.php"?>

