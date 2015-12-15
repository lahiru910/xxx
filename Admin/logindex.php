<?php
session_start();
require_once('includes/connection.php');
//Array to store validation errors
	$errmsg_arr = array();
 
	//Validation error flag
	$errflag = false;
function clean($str) {
		$str = @trim($str);
		if(get_magic_quotes_gpc()) {
			$str = stripslashes($str);
		}
		return mysql_real_escape_string($str);
	}
 
	//Sanitize the POST values
	$username = $_POST['user'];
	$password = $_POST['pass'];
    $epass= md5($password);
	//Input Validations
	if($username == '') {
		$errmsg_arr[] = 'Username missing';
		$errflag = true;
	}
	if($password == '') {
		$errmsg_arr[] = 'Password missing';
		$errflag = true;
	}
if($errflag) {
		$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
		session_write_close();
		header("location: login.php");
		exit();
	}

	$qry="SELECT * from user where `user` ='$username' and `password`='$epass' limit 1";
	$result=mysqli_query($conn,$qry);
    
    if($result) {
		if(mysqli_num_rows($result) > 0) {
			//Login Successful
			session_regenerate_id();
			$member = mysqli_fetch_assoc($result);
			$_SESSION['SESS_FIRST_NAME'] = $member['user'];
			$_SESSION['SESS_LAST_NAME'] = $member['password'];
			session_write_close();
			header("location: index.php");
			exit();
            
            }else {
			//Login failed
			$errmsg_arr[] = 'user name and password not found';
			$errflag = true;
			if($errflag) {
				$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
				session_write_close();
				header("location: loginf.php");
				exit();
			}
		}
	}else {
		die("Query failed");
	}
?>