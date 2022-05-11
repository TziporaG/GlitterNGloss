<?php include "header.php";
?>
<?php include_once "inc_database.php";

$sqlwhere=" WHERE (category='eye') ";

$sql1="select * from products".$sqlwhere;


// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}

$result=mysqli_query($mysqli,$sql1);
$rowCount=mysqli_num_rows($result);
$picsArray = array("eye0.png","eye1.png", "eye2.png", "eye3.png", "eye4.png","eye5.png","eye6.png","eye7.png", "eye8.png" );
$index = 0;
if($rowCount>0){
   echo " <?php include 'header.php'; ?>";
    echo "<h1><u>Eyes:</u></h1>";
    
    echo '<div class="grid-container">';
       while($row=mysqli_fetch_assoc($result)) {
                   echo "<div class='grid-item'>";
                   echo "<div>" . $row['description'] . "</div>";
                   echo "<img src= ../images/" . $picsArray[$index] . " style='width: 300px;' />";
                   echo "<div> Price: $".$row['price']." .00</div>";
                   echo "<div> Color: ".$row['color']."</div>";
                   echo "</div>";
                   $index++;
               }
    echo '</div> <?php include "footer.php"; ?>';

}
else{
	echo "no results found";
}

