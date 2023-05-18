<?php 
session_start(); 
include "ldb.inc.php";

	$uname = $_POST['uname'];
	$pass = $_POST['password'];  

	if (empty($uname)) 
    {
		header("Location: ../index.php?error=User Name is required");
	    exit();
	}
    else if(empty($pass))
    {
        header("Location: ../index.php?error=Password is required");
	    exit();
	}
    else
    {
		$sql = "SELECT * FROM registered_users WHERE user_name=? AND password=?";

		$stmt = mysqli_stmt_init($conn);
		mysqli_stmt_prepare($stmt,$sql);
		mysqli_stmt_bind_param($stmt, "ss", $uname,$pass);
		mysqli_stmt_execute($stmt);
		$result = mysqli_stmt_get_result($stmt);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['user_name'] === $uname && $row['password'] === $pass) {
            	$_SESSION['user_name'] = $row['user_name'];
            	$_SESSION['password'] = $row['password'];
            	header("Location: ../cinfo.php?login=success");
		        exit();
            }
            else
            {
				header("Location: ../index.php?error=Incorect User name or password");
		        exit();
			}
		}
        else
        {
			header("Location: ../index.php?error=Incorect User name or password");
	        exit();
		}
	}
