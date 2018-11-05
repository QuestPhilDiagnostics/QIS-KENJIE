<?php
$conn=mysqli_connect("localhost","root","","dbtest");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
date_default_timezone_set('Asia/Manila');
$id=$_POST['id'];
$result = $conn->query("SELECT * FROM qpd_xray WHERE id ='".$id."'");
if($result->num_rows == 0) 
{
$comnam=$_POST['comnam'];
$firnam=$_POST['firnam'];
$midnam=$_POST['midnam'];
$lasnam=$_POST['lasnam'];
$com=$_POST['com'];
$imp=$_POST['imp'];
$rad=$_POST['rad'];
$qa=$_POST['qa'];
$date=date("Y-m-d H:i:s");

$sqlinsert = "INSERT INTO qpd_xray(id, comnam, firnam, midnam, lasnam, com, imp, rad, qa, date) VALUES('$id', '$comnam', '$firnam', '$midnam','$lasnam', '$com','$imp', '$rad','$qa', '$date')";

  if ($conn->query($sqlinsert) === TRUE) 
  {
  echo "<script> alert('Record Added Successfully') </script>";
  echo "<script>window.open('XRay.php','_self')</script>";
  } 
  else
  {
    echo "Error updating record: " . $conn->error;
  }
} 
else 
{
  // do other stuff...
  echo "Patient's Record Exist. Please use update instead";
}


$conn->close();



?>
