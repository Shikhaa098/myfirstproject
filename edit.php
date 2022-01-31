<?php
include ("connection.php");
error_reporting(0);
$firstname    = $_GET['firstname'];
$lastname     = $_GET['lastname'];
$email        = $_GET['email'];
$phonenumber  = $_GET['phonenumber'];
?> 
<!DOCTYPE html>
<html>
<head>
      <title>User Registration</title>
</head>
<body>

<div>
<div class="container">
     <form action="Update.php" method="GET">
        
            <center>
            <h1>Edit Details</h1>
            <label for="firstname"><b>First Name</b></label><br>
            <input type="text" value="<?php echo "$firstname" ?>" name="firstname" required><br>
             <br>
            <label for="lastname"><b>Last Name</b></label><br>
            <input type="text" value="<?php echo "$lastname" ?>" name="lastname" required><br>
            <br>
            <label for="email"><b>Email Address</b></label><br>
            <input type="text" value="<?php echo "$email" ?>" name="email" required><br>
             <br>
             <label for="phonenumber"><b>Phone Number</b></label><br>
            <input type="text" value="<?php echo "$phonenumber" ?>" name="phonenumber" required><br>
             <br>
            <button type="Submit" name="Submit" class="btn btn-default">Submit</button>
    </center>
        </div>
    </form>
</div>
</body>
</html>
