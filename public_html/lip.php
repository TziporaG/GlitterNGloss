
<?php include "header.php"; ?>
<?php include_once "inc_database.php";

$sqlwhere=" WHERE (category='lip') ";
$sqll="select * from products".$sqlwhere;

if ($mysqli -> connect_errno) {
    echo "Failed to connect to MySQL: ". $mysqli -> connect_error;
    exit();
}

$result = mysqli_query($mysqli,$sqll);
$rowCount = mysqli_num_rows($result);
$picsArray = array("lip(1).jpg","lip(2).jpg","lip(3).jpg","lip(4).jpg","lip(5).jpg");
$index = 0;
if($rowCount > 0) {
    echo "<?php include 'header.php'; ?>";
    echo "<h1><u>Lip Products:</u></h1>";
    
    echo '<div class="grid-container">';
    while($row = mysqli_fetch_assoc($result)) {
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

else {
    echo "no results found";
}

