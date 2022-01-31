<html>
<head>
<title>Display Data</title>
</head>

<body>
<table border="2">

<tr>
<th>First Name</th>
<th>Last Name</th>
<th>Email</th>
<th>Phone Number</th>
<th>Password</th>
<th>Operation</th>

</tr>

<?php
//error_reporting(0);
include ("Connection.php");
$query = "SELECT * FROM USER";
$result = mysqli_query($conn,$query);

$total = mysqli_num_rows($result);

if ($total!=0)
{
   while(($data=mysqli_fetch_assoc($result)))
   {
     echo "
     <tr>
     <td>".$data['firstname']."</td>
     <td>".$data['lastname']."</td>
     <td>".$data['email']."</td>
     <td>".$data['phonenumber']."</td>
     <td>".$data['password']."</td>
     <td><a href = 'edit.php? firstname=$data[firstname]& lastname=$data[lastname]& email=$data[email]& phonenumber=$data[phonenumber] '>Edit</td>
     </tr>
      ";
   }
   //echo "Table has records";
}
else
{
  echo "No records found";
}

?>
</table>
</body>
</html>