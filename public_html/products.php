<?php
include_once "inc_database.php";

$sqlwhere=" WHERE (1=1) ";

if (isset($_GET['category']))
{
	$sqlwhere.=" AND category='".$_GET['category']."'";
	
}
if (isset($_GET['description']))
{
	$sqlwhere.=" AND description='".$_GET['description']."'";
	
}

$sql1="select * from products ".$sqlwhere;


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
		echo $row['description']."<br>";//echo more then description
		echo $row['color']."<br>";
	}	
}
else{
	echo "no results found";
}

?>


