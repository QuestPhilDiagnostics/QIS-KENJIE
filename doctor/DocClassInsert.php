<?php
$conn=mysqli_connect("localhost","root","","dbtest");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$id=$_POST['id'];
$result = $conn->query("SELECT * FROM qpd_class WHERE id ='".$id."'");
if($result->num_rows == 0) 
{
$Code=$_POST['Code'];
$comnam=$_POST['comnam'];
$firnam=$_POST['firnam'];
$midnam=$_POST['midnam'];
$lasnam=$_POST['lasnam'];
$Patclass=$_POST['Patclass'];
$ot=$_POST['ot'];
$date=date("Y-m-d");


$sqlinsert = "INSERT INTO qpd_class(id, Code, comnam, firnam, midnam, lasnam, Patclass, ot, date) VALUES('$id', '$Code', '$comnam', '$firnam', '$midnam', '$lasnam', '$Patclass', '$ot', '$date')";

    if ($conn->query($sqlinsert) === TRUE) 
    {
	  echo "<script> alert('Recorded Successfully') </script>";
    echo "<script>window.open('ClassificationList.php','_self')</script>";
    }
  	else
  	{
      echo "Error updating record: " . $conn->error;
  	}
}
else 
{

$Patclass=$_POST['Patclass'];
$ot=$_POST['ot'];
$date=date("Y-m-d");

  $sqlupdate="UPDATE qpd_class SET Patclass='$Patclass', ot='$ot', date='$date'  WHERE id ='$id' ";

  if ($conn->query($sqlupdate) === TRUE) 
    {
    echo "<script> alert('Updated Successfully') </script>";
    echo "<script>window.open('ClassificationList.php','_self')</script>";
    }
    else
    {
      echo "Error updating record: " . $conn->error;
    }

}


$conn->close();

?>



















