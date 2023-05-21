<?php session_start(); ?>
<?php include ('headerfooter.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p id="info" >Please Enter Your Usernam and Email:</p>
    <form class="form" action="send-email.php" method="POST">
        
        <input type="hidden"  name="session1" value="username" />
        <input type="text" id="session" name="user" value="Username"><br>

        <input type="hidden" name="session2" value="email">
        <input type="text" id="session" name="eee" value="email"><br>
        <input type="submit" name="submit" value="send">
    </form>
    <?php 
        $_SESSION["emailType"]= "newAccount"; ?>
</body>
</html>