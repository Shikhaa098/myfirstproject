<?php
include ("connection.php");

if(isset($_POST["Submit"]));
{
  $firstname     = $_GET['firstname'];
  $lastname      = $_GET['lastname'];
  $email         = $_GET['email'];
  $phonenumber   = $_GET['phonenumber'];

  $query = "UPDATE USER SET firstname='$firstname', lastname='$lastname', email='$email', phonenumber='$phonenumber' WHERE firstname= '$firstname'";
  
  $result = mysqli_query($conn,$query);

  if($result)
{
    echo "<script>alert('Record Updated')</script>";
    ?>
<META HTTP-EQUIV="Refresh" CONTENT = "0; URL=http://localhost/assignment/fetch.php">
<?php
}
else
{
   echo "Failed to Update Record";
}
}
?>
