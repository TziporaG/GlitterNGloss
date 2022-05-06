
<?php include "header.php"; ?>
<?php include_once "inc_database.php";

$sqlwhere=" WHERE (category='brush') ";

$sql1="select * from products".$sqlwhere;


// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}

$result=mysqli_query($mysqli,$sql1);
$rowCount=mysqli_num_rows($result);
$picsArray = array("brush(2).jpg","brush(1).jpg", "brush(3).jpg", "brush(4).jpg", "brush(5).jpg" );
$index = 0;
if($rowCount>0){
   echo " <?php include 'header.php'; ?>";
    echo "<h1><u>Brushes:</u></h1>";
    
    echo '<div class="grid-container">';
       while($row=mysqli_fetch_assoc($result)) {
                   echo "<div class='grid-item'>";
                   echo "<div>" . $row['description'] . "</div>";
                   echo "<img src= " . $picsArray[$index] . " style='width: 300px;' />";
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

