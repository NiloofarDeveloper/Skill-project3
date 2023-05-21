<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./style.css">
    
    <title>index</title>
    
</head>
<body>
<?php include ('headerfooter.php'); ?>
    <div >
        <a id="logout_link" href="logout.php">Log Out</a>
        
    </div>    
    <div class="flex-container">
        <p id="it">
            Welcome To Your IT Support System
        </p>
        <form action="problem.php" method="POST">
            
               
            <select id="title" name="Title" >
                <option placeholder="Mr">Mr</option>
                <option placeholder="Mrs">Mrs</option>
                <option placeholder="Ms">Ms</option>
                <option placeholder="Other">Other</option>
            </select>
            <input type="text" name="fname" id="fname" placeholder="FirstName">
            <input type="text" name="lName" id="lName" placeholder="LastName">
            <select id="role" name="role">
                <option placeholder="Admin">Admin</option>
                <option placeholder="Manager">Manager</option>
                <option placeholder="CEO">CEO</option>
            </select>    
            <input type="submit" placeholder="Submit">
            
        </form>
    <div>    
   



</body>
</html>