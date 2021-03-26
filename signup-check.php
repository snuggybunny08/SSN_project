<?php 
session_start(); 
include "db_conn.php";

if (isset($_POST['uname']) && isset($_POST['password'])
    && isset($_POST['firstname']) && isset($_POST['re_password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$firstname = validate($_POST['firstname']);
	$midname = validate($_POST['midname']);
	$lname = validate($_POST['lname']);
	$password = validate($_POST['password']);
	$re_password = validate($_POST['re_password']);
	$uname = validate($_POST['uname']);
	$dob = validate($_POST['dob']);
	$sex = validate($_POST['sex']);
	$class = validate($_POST['class']);
	$email = validate($_POST['email']);
	$phone = validate($_POST['phone']);


	$user_data = 'uname='. $uname. '&name='. $firstname;


	if (empty($uname)) {
		header("Location: signup.php?error=User Name is required&$user_data");
	    exit();
	}else if(empty($password)){
        header("Location: signup.php?error=Password is required&$user_data");
	    exit();
	}
	else if(empty($re_password)){
        header("Location: signup.php?error=Re Password is required&$user_data");
	    exit();
	}

	else if(empty($firstname)){
        header("Location: signup.php?error=Name is required&$user_data");
	    exit();
	}

	else if($password !== $re_password){
        header("Location: signup.php?error=The confirmation password  does not match&$user_data");
	    exit();
	}

	else{

		// hashing the password
        $pass = md5($password);

	    $sql = "SELECT * FROM user WHERE user_name='$uname' ";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
			header("Location: signup.php?error=The username is taken try another&$user_data");
	        exit();
		}else {
           $sql2 = "INSERT INTO user(user_name, password, firstname, midname,lastname,age,email,phone) VALUES('$uname', '$pass', '$firstname', '$midname', '$lname', '$age', '$email', '$phone')";
           $result2 = mysqli_query($conn, $sql2);
           if ($result2) {
           	 header("Location: home.php?success=Your account has been created successfully");
	         exit();
           }else { 
			   if (mysqli_connect_errno($result2)) {
					$msg =  "Failed to connect to MySQL: " . mysqli_connect_error();
					header("Location: signup.php?error='$msg'");
				}
				else{
           			
					header("Location: signup.php?error='$sql2'");
				}
	
		        exit();
           }
		}
	}
	
}else{
	header("Location: signup.php");
	exit();
}