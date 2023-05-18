<?php
include_once 'db.inc.php';




$fn = $_POST['fname'];
$ln = $_POST['lname']; 
$email = $_POST['email'];
$num = $_POST['num'];

$ploc = $_POST['plocation'];
$dloc = $_POST['dlocation']; 
$pt = $_POST['ptime'];
$pdate = $_POST['pdate'];

$sql = "INSERT INTO c_details (fname, lname, email, num) VALUES (?, ?, ?, ?);";
$stmt = mysqli_stmt_init($conn);
mysqli_stmt_prepare($stmt,$sql);

mysqli_stmt_bind_param($stmt, "ssss", $fn,$ln,$email,$num);
mysqli_stmt_execute($stmt);



$sql = "INSERT INTO b_details (plocation, dlocation, ptime, pdate) VALUES (?, ?, ?, ?);";
$stmt = mysqli_stmt_init($conn);
mysqli_stmt_prepare($stmt,$sql);

mysqli_stmt_bind_param($stmt, "ssss", $ploc,$dloc,$pt,$pdate);
mysqli_stmt_execute($stmt);

header("Location: ../index.php?insert=success");


