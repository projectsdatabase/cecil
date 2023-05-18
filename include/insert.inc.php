<?php
include_once 'db.inc.php';



$id = $_POST['car_name'];
$address = $_POST['num_plate']; 
$city = $_POST['car_own'];
$type = $_POST['car_type'];

$id = $_POST['fname'];
$address = $_POST['lname']; 
$city = $_POST['email'];
$type = $_POST['num'];

$id = $_POST['plocation'];
$address = $_POST['dloation']; 
$city = $_POST['ptime'];
$type = $_POST['pdate'];

$sql = "INSERT INTO car (car_name, num_plate, car_own, car_type) VALUES (?, ?, ?, ?);";
$stmt = mysqli_stmt_init($conn);
mysqli_stmt_prepare($stmt,$sql);

mysqli_stmt_bind_param($stmt, "ssss", $id,$address,$city,$type);
mysqli_stmt_execute($stmt);

header("Location: ../rent.php?insert=success");



$sql = "INSERT INTO car (car_name, num_plate, car_own, car_type) VALUES (?, ?, ?, ?);";
$stmt = mysqli_stmt_init($conn);
mysqli_stmt_prepare($stmt,$sql);

mysqli_stmt_bind_param($stmt, "ssss", $id,$address,$city,$type);
mysqli_stmt_execute($stmt);

header("Location: ../rent.php?insert=success");