<?php include ('headerfooter.php'); ?>
<h2 style="margin:60px 0px 20px 80px">
        Admin - Confirm
</h2><hr>
<?php

$heading= $_POST['heading'];
$tripDate=$_POST['tripDate'];
$duration=$_POST['duration'];
$summary=$_POST['summary'];



$sql= "INSERT INTO adventureevent (heading, tripDate, duration, summary)
VALUES ('$heading', '$tripDate', '$duration', '$summary')";

if (mysqli_query($conn, $sql)){
    echo "<p style='margin:40px 0px 20px 60px; font-size:20px' >The Adventure is Created Successfully</p>";
}else{
    echo "Error: ". $sql . "
    ".mysqli_error($conn);
}

?>
<div style=" margin: 50px 0px 0px 100px; font-size: 30px">
    
    <a href="all-adventures.php">View All Adventures</a>
</div>
<!--
    <php
    $sql= "SELECT * FROM adventureevent WHERE heading= 'Sydney' ";
    $result= mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)){
            echo "id: " . $row["id"]. " - Name: " . $row["heading"];
        }
    } else {
        echo "0 results";
    }       > 
-->