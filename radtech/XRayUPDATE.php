<?php
$conn=mysqli_connect("localhost","root","","dbtest");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$id=$_POST['id'];
$imp=$_POST['imp'];
$com=$_POST['com'];
$rad=$_POST['rad'];
$qa=$_POST['qa'];
$date=date("Y-m-d H:i:s");


$sqlupdate="UPDATE qpd_xray SET imp='$imp', com='$com', rad='$rad', qa='$qa', date='$date'  WHERE id ='$id' ";

    if ($conn->query($sqlupdate) === TRUE) 
    {
	  echo "<script> alert('Record Updated Successfully') </script>";
    echo "<script>window.open('XRayView.php?id=$id','_self')</script>";
    }
  	else
  	{
      echo "Error updating record: " . $conn->error;
  	}

$conn->close();



















