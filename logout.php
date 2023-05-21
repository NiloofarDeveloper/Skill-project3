<?php session_start(); ?>
<?php include ('headerfooter.php'); ?>


<!DOCTYPE html>
<html>
<body>

<?php
// remove all session variables
session_unset();

// destroy the session
session_destroy();

echo "<p id='info'>Thank you, All Set!</p>"
?>

</body>
</html>