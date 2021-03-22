<?php 
session_start();
include "db_conn.php";
if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {
     $uname = $_SESSION['user_name'];
     $sql = "SELECT ssn FROM user WHERE user_name='$uname'";
     $result = mysqli_query($conn, $sql);
     $row = mysqli_fetch_assoc($result);
     if ($row['ssn'] ) {
          $ssn = $row['ssn'];
     }
     else{
          $ssn = mt_rand(1000000000,9000000000);
          $sql = "UPDATE user set ssn = {$ssn} WHERE user_name='$uname'";
          $result = mysqli_query($conn, $sql);
     }

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
     <h1>Hello <?=$_SESSION['user_name']?>!</h1>
     <h2>Your Social Security Number is:</h2>
     <h2><?=$ssn?></h2>

     <a href="logout.php">Logout</a>
</body>
</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>