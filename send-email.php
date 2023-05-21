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
   
<?php   
if ($_SESSION["emailType"]== "newAccount"){
    if ($_POST['session1'] && $_POST['session2']){
        $username=$_POST['user'];
        $email=$_POST['eee'];
        echo " Your accound is created"."<br>";
        echo $username."<br>";
        echo $email;
    
    }};
if($_SESSION["emailType"]== "lostPassword"){    
    if ($_POST['session3'] && $_POST['session4'] && $_POST['session5']){
        $firstname=$_POST['fname'];
        $username=$_POST['user'];
        $email=$_POST['eee'];
        echo " your password is changed"."<br>";
        echo $firstname."<br>";
        echo $username."<br>";
        echo $email;

    }};
    ?>
</body>
</html>