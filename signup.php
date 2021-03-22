<!DOCTYPE html>
<html>
<head>
	<title>SIGN UP</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
     <form action="signup-check.php" method="post">
     	<h2>SIGN UP</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

          <?php if (isset($_GET['success'])) { ?>
               <p class="success"><?php echo $_GET['success']; ?></p>
          <?php } ?>

          <label>First Name</label>
          <?php if (isset($_GET['firstname'])) { ?>
               <input type="text" 
                      name="firstname" 
                      placeholder="First Name"
                      value="<?php echo $_GET['firstname']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="firstname" 
                      placeholder="Name"><br>
          <?php }?>

           <label>Middle Name</label>
          <?php if (isset($_GET['midname'])) { ?>
               <input type="text" 
                      name="midname" 
                      placeholder="Name"
                      value="<?php echo $_GET['midname']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="midname" 
                      placeholder="Name"><br>
          <?php }?>

          <label>LastName</label>
          <?php if (isset($_GET['lname'])) { ?>
               <input type="text" 
                      name="lname" 
                      placeholder="Name"
                      value="<?php echo $_GET['lname']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="lname" 
                      placeholder="Name"><br>
          <?php }?>

          <label>User Name</label>
          <?php if (isset($_GET['uname'])) { ?>
               <input type="text" 
                      name="uname" 
                      placeholder="User Name"
                      value="<?php echo $_GET['uname']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="uname" 
                      placeholder="User Name"><br>
          <?php }?>


     	<label>Password</label>
     	<input type="password" 
                 name="password" 
                 placeholder="Password"><br>

          <label>Re Password</label>
          <input type="password" 
                 name="re_password" 
                 placeholder="Re_Password"><br>

                 <label>Date of Birth</label>
          <?php if (isset($_GET['DOB'])) { ?>
               <input type="date" 
                      name="dob" 
                      placeholder="Date of Birth"
                      value="<?php echo $_GET['dob']; ?>"><br>
          <?php }else{ ?>
               <input type="date" 
                      name="dob" 
                      placeholder="Date of Birth"><br>
          <?php }?>

          <label>Gender</label>
          <select>
          <option selected="selected">Choose one</option>
           <?php 
           // A sample sex array
           $sex = array("Male", "Female",  "Others");
        
          // Iterating through the sex array
          foreach($sex as $item){
            echo "<option value='strtolower($item)'>$item</option>";
          }
          ?>
          </select>
          <br><br>


          <label>Classification</label>
          <select>
          <option selected="selected">Choose one</option>
           <?php
           // A sample class array
           $class = array("British", "Immigrant",  "Others");
        
          // Iterating through the class array
          foreach($class as $item){
            echo "<option value='strtolower($item)'>$item</option>";
          }
          ?>
          </select>
          <br><br>


          <label>Email</label>
          <?php if (isset($_GET['email'])) { ?>
               <input type="email" 
                      name="email" 
                      placeholder="Email"
                      value="<?php echo $_GET['email']; ?>"><br>
          <?php }else{ ?>
               <input type="email" 
                      name="email" 
                      placeholder=email><br>
          <?php }?>
          

          <label>Phone Number</label>
          <?php if (isset($_GET['phone'])) { ?>
               <input type="number" 
                      name="phone" 
                      placeholder="Phone Number"
                      value="<?php echo $_GET['phone']; ?>"><br>
          <?php }else{ ?>
               <input type="number" 
                      name="phone" 
                      placeholder="Phone"><br>
          <?php }?>
               <label>Upload Vignette/Birth certificate</label>
               <method="POST" action="upload.php" method="post" enctype="multipart/form-data">
                <input type="file" id="myFile" value= "Upload Image" name="filename">
                
                

     	     <button type="submit">Sign Up</button>
               <a href="index.php" class="ca">Already have an account?</a>
     </form>
               <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
               <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
               <script type="text/javascript">
               $(function(){
               Swal.fire({
                'ttile': 'Hello World',
                'text' : 'This is from sweetalert2',
                'type' :  'success'
                });
</body>
</html>