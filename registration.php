<?php
include ("Connection.php");
?>
<!DOCTYPE html>
<html>
<head>
      <title>User Registration</title>
</head>
<body>

<div>
<div class="container">
     <form action="" method="post">
        
            <center>
            <h1>Registration</h1>
            <p>Fill Up The Form With Correct Values.</p>
            <label for="firstname"><b>First Name</b></label><br>
            <input type="text" name="firstname" required><br>
             <br>
            <label for="lastname"><b>Last Name</b></label><br>
            <input type="text" name="lastname" required><br>
            <br>
            <label for="email"><b>Email Address</b></label><br>
            <input type="text" name="email" required><br>
             <br>
            <label for="phonenumber"><b>Phone Number</b></label><br>
            <input type="text" name="phonenumber" required><br>
             <br>
            <label for="password"><b>Password</b></label><br>
            <input type="password" name="password" required><br>
            <br>
            <button type="submit" name="Submit" class="btn btn-default">Submit</button>

    </center>
        </div>
    </form>
</div>
</body>
<?php
if(isset($_POST['Submit']))
{
    $firstname   = $_POST['firstname'];
    $lastname    = $_POST['lastname'];
    $email       = $_POST['email'];
    $phonenumber = $_POST['phonenumber'];
    $password    = $_POST['password'];

    $query = "INSERT INTO USER VALUES ('$firstname', '$lastname', '$email', '$phonenumber', '$password')";
     $result=mysqli_query($conn,$query);

     if($result)
     {
         echo "Data Submitted";
         ?>
         <META HTTP-EQUIV="Refresh" CONTENT = "0; URL=http://localhost/assignment/fetch.php">
         <?php

     }
      else
      {
          echo "Failed";
      }
}
?>
</html>
