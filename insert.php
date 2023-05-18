<?php
include_once 'include/db.inc.php';
?>

<!DOCTYPE html>
<html lang="en">  
<head>
    <title>Document</title> 
</head>
<body>
    <form action="include/insert.inc.php" method="POST">

    <input type="text" name="car_name" placeholder="Car Name">
    <input type="text" name="num_plate" placeholder="Number Plate">
    <input type="text" name="car_own" placeholder="Car Owner">
    <input type="text" name="car_type" placeholder="Car Type">

    <button type="submit" name="submit">Submit</button>
    </form>
    

</body>
</html>
