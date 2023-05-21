<?php include ('headerfooter.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">

    <!--copy and past the snipped 3 from hosted library for using jQuery in my codes-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <title>all adventures</title>
    <style>
        h2{
            display: flex; justify-content: center; margin:200px 150px 400px 150px; font-size: 30px
        }
        h3{
            display: flex; margin:50px 0px 10px 50px; font-size: 20px; color:green
        }
        hr{
            width: 20%; margin: 10px 0 10px 40px;
        }
        h4{
            display: flex; margin:2px 0px 2px 50px; 
        }
    </style>
</head>
<body class="body">
<h2  >Upcoming Adventures</h2>
<?php
    $sql= "SELECT * FROM adventureevent  ";
    $result= mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)){
            $location= $row["heading"];
            $time= $row["tripDate"];
            $period= $row["duration"];
            $explain= $row["Summary"];

            echo "<h3>  $location </h3>"."<hr>";
            echo "<h4> Date: $time </h4>";
            echo "<h4> Trip Date: $period </h4>";
            echo "<h4> Summary: $explain </h4>";
           
        }
    } else {
        echo "0 results";
    }            
?>


</body>        