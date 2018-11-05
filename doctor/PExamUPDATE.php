<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbtest";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$id=$_POST['id'];
$skin=$_POST['skin'];
$hn=$_POST['hn'];
$cbl=$_POST['cbl'];
$ch=$_POST['ch'];
$abdo=$_POST['abdo'];
$extre=$_POST['extre'];
$ot=$_POST['ot'];
$find=$_POST['find'];
$doc=$_POST['doc'];
$lic=$_POST['lic'];
$date=date("Y-m-d H:i:s");

$sql = "UPDATE qpd_pe SET skin='$skin', hn='$hn', cbl='$cbl', ch='$ch', abdo='$abdo', extre='$extre', ot='$ot', find='$find', doc='$doc', lic='$lic' , date='$date' WHERE id='$id'";

    if ($conn->query($sql) === TRUE) 
    {
	  echo "<script> alert('Record Updated Successfully') </script>";
    echo "<script>window.open('PExamView.php?id=$id','_self')</script>";
    }
  	else
  	{
      echo "Error updating record: " . $conn->error;
  	}

$conn->close();
?>
