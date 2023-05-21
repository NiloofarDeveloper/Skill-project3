

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./style.css">
    
    <title>index</title>
    <style>
        label{
            
            font-size: 20px;
            padding: 10px;
        }
        
        input[type=text] {
            width: 50%;
            padding: 5px 15px;
            margin: 8px 0;
            box-sizing: border-box;
}
input[type=date]{
            width: 50%;
            padding: 12px 20px;
            box-sizing: border-box;
}
        
    </style>
</head>
<body>
<?php include ('headerfooter.php'); ?>
       
    <div class="flex-container">
        <h2 >
        &nbsp&nbspAdmin - Add Adventurebr <br>
            Input Details About the Trip
        </h2>
        <form action="admin-confirm.php" method="POST">
             
            <label for="heading">Heading</label>
            <input type="text" name="heading" id="heading" ><br>
            <label for="tripDate">Trip Date</label>
            <input type="date" name="tripDate" id="tripDate" placeholder ="mm/dd/yyyy"><br>
            <label for="duration">Duration</label>
            <input type="text" name="duration" id="duration"> <br>
            <label for="summary">Summary</label>
            <input type="text" name="summary" id="summary">  
            <br>
            <input type="submit" value="Submit">
            
        </form>
    <div>    
   



</body>
</html>