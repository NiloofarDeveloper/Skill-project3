
<?php include ('headerfooter.php'); ?>
<?php
        $title = $_POST["Title"];        
        $fname = $_POST['fname'];
        $lName = $_POST['lName'];
        $role = $_POST['role'];
        
        $_SESSION['titlesess'] = $title;
        $_SESSION['fnamesess'] = $fname;
        $_SESSION['lNamesess'] = $lName;
        $_SESSION['rolesess'] = $role;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>      


<?php  if ($_SESSION["rolesess"]=='Admin'){ ?>

<p id="roleselection">Hello Admin</p> <hr>
<p style="font-size: 30px; margin: 20px;">Here are you options:</p>
<div class="request1">
    <a  href="new-account.php">Create New Account</a> <br><br>
    <a  href="isnt-working.php">My computer isn't working</a>   
</div>
<?php }; ?>


<?php  if ($_SESSION["rolesess"]=='Manager'){ ?>

<p id="roleselection">Hello Manager</p> <hr>
<p style="font-size: 30px; margin: 20px;">Here are you options:</p>
<div class="request2">
    <a class="request" href="lost-password.php">I Lost My Password</a> <br><br>
    <a class="request" href="isnt-working.php">My computer isn't working</a>
</div>    
<?php }; ?> 

<?php  if ($_SESSION["rolesess"]=='CEO'){ ?>
<p id="roleselection">Hello CEO</p> <hr>
<p style="font-size: 30px; margin: 20px;">Here are you options:</p>
<div class="request3">
    <a class="request" href="need-help.php">Need Help</a> <br><br>
    <a class="request" href="isnt-working.php">My computer isn't working</a>
</div>    
 
<?php }; ?>   
</body>
</html>



