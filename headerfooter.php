<!DOCTYPE html>
<html lang="en">
<head>
    
    <title><?php echo $HomePage; ?></title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
</head>
<body>
    <?php
        $servername = "localhost";
        $username = "id20598014_niloofar";
        $password = "EM7J|(pq*ZSigC|&";
        $dbname = "id20598014_adventure";
        $conn = mysqli_connect($servername, $username ,$password ,$dbname );
        if($conn === false){
            die("Error: Could not Connect!" . mysqli_connect_error());
        }


    ?>
<header id="mainheader">
    <nav>
        <ul>
            <li><img id ="hamburger" src="images/hamburger.png" alt="navigation" height="50px"></li><!-- I gave an id to hamburger for using it in jquery and by click on the image you can toggle the menu-->
            <?php echo "<li >Halifax Canoe and Kayak</li>";?>
            <li><img src="images/paddle-white.png" alt="logo" height="80px"></li>
        </ul>  
    </nav>  
</header>
   
    
        
    <script>
        $(document).ready(function(){
            $("#hamburger").click(function(){
                $("#pannel").toggle();
            })
        })
    </script>
    <!--the menu inside the pannel-->
    <div id="pannel">
        <ul>
            <li><a href="Homepage.html" style=" text-decoration: none;
                color: #fff;">HOME</a></li>
            <li><a href="admin-add.php" style=" text-decoration: none;
                color: #fff;">BOOK TRIP</a></li>    
            <li><a href="all-adventures.php" style=" text-decoration: none;
                color: #fff;">
                
                ADVENTURES</a></li>
            <li><a>ADMIN LOGIN</a></li>
            <li>IT SUPPORT</li>
        </ul>
    </div>
</body>
</html>
