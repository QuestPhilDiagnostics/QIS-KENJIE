<?php
$conn=mysqli_connect("localhost","root","","dbtest");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$id=$_GET['id'];
$sql = "DELETE FROM qpd_package WHERE id = '$id' ";
if ($conn->query($sql) === TRUE) 
  {
     echo "<script>alert('Package Deleted Successfully')</script>";
     echo "<script>window.open('Package.php','_self')</script>";
  } 
  else
  {
    echo "Error updating record: " . $conn->error;
  }
?>