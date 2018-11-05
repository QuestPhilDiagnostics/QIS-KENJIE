<?php
$conn=mysqli_connect("localhost","root","","dbtest");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
date_default_timezone_set("Asia/Kuala_Lumpur");

$id=$_POST['id'];
$comnam=$_POST['comnam'];
$firnam=$_POST['fn'];
$midnam=$_POST['mn'];
$lasnam=$_POST['ln'];
$birdat=$_POST['bd'];
$age=$_POST['age'];
$gen=$_POST['gen'];
$reff=$_POST['reff'];
$connum=$_POST['cn'];
$billto=$_POST['billto'];
$LOE=$_POST['LOE'];
$AN=$_POST['AN'];
$AC=$_POST['AC'];
$comment=$_POST['comment'];
$date=$_POST['date'];
$PackName = $_POST['PackName'];
$PackList = $_POST['PackList'];
$PackPrice = $_POST['PackPrice'];

	$sql = "UPDATE qpd_trans SET 
		cust_comnam = '$comnam', 
		firnam = '$firnam', 
		midnam = '$midnam', 
		lasnam = '$lasnam', 
		cust_birdat = '$birdat', 
		cust_age = '$age', 
		cust_gen = '$gen',
		connum = '$connum',
		reff = '$reff', 
		PackName = '$PackName', 
		PackList = '$PackList', 
		PackPrice = '$PackPrice', 
		bill_to = '$billto', 
		LOE = '$LOE', 
		AN = '$AN', 
		AC = '$AC', 
		comment = '$comment',
		date = '$date',
		totalprice = '$PackPrice' WHERE id='$id'";
		
		if ($conn->query($sql) === TRUE) 
		{
		echo "<script> alert('Record updated successfully') </script>";
	    echo "<script>window.open('ForREPrint.php?id=$id' ,'_self')</script>";
		} 
		else 
		{
		    echo "Error updating record: " . $conn->error;
		}

$conn->close();
?>