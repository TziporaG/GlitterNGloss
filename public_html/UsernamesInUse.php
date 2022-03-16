<?php include "header.php"?>
<?php
include_once "inc_database.php";

$sqlwhere=" WHERE (1=1) ";

if (isset($_GET['UserName']))
{
	$sqlwhere.=" AND category='".$_GET['UserName']."'";
	
}

$sql1="select * from validusers ".$sqlwhere;


// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}
//echo $sql1;
$result=mysqli_query($mysqli,$sql1);
$rowCount=mysqli_num_rows($result);
if($rowCount>0){
        echo "<h1><u>Usernames:</u></h1>";
	while($row=mysqli_fetch_assoc($result)){
		echo $row['UserName']."<br>";//echo more then description
		
	}	
}
else{
	echo "no results found";
}

?>
<?php include "footer.php"?>


