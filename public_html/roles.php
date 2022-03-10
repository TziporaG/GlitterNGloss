<?php
include_once "inc_database.php";


$sql1="select * from roles";


// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}
//echo $sql1;
$result=mysqli_query($mysqli,$sql1);
$rowCount=mysqli_num_rows($result);
if($rowCount>0){
	while($row=mysqli_fetch_assoc($result)){
		echo "<option value='".$row['RoleID']."'>".$row['RoleDescription'];//echo more then description
	}	
}
else{
	echo "no results found";
}

?>


