<?php
$conn=mysqli_connect("localhost","root","","dbtest");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
date_default_timezone_set("Asia/Kuala_Lumpur");
$id=$_POST['id'];
$result = $conn->query("SELECT * FROM qpd_labresult WHERE id ='".$id."'");
if($result->num_rows == 0) 
{
$firnam=$_POST['firnam'];
$midnam=$_POST['midnam'];
$lasnam=$_POST['lasnam'];
$comnam=$_POST['comnam'];
$WhiteBlood=$_POST['WhiteBlood'] ? $_POST['WhiteBlood'] : "N/A";
$Hemoglobin=$_POST['Hemoglobin'] ? $_POST['Hemoglobin'] : "N/A";
$HemoNR=$_POST['HemoNR'] ? $_POST['HemoNR'] : "N/A";
$Hematocrit=$_POST['Hematocrit'] ? $_POST['Hematocrit'] : "N/A";
$HemaNR=$_POST['HemaNR'] ? $_POST['HemaNR'] : "N/A";
$Neutrophils=$_POST['Neutrophils'] ? $_POST['Neutrophils'] : "N/A";
$Lymphocytes=$_POST['Lymphocytes'] ? $_POST['Lymphocytes'] : "N/A";
$Monocytes=$_POST['Monocytes'] ? $_POST['Monocytes'] : "N/A";
$CBCOt=$_POST['CBCOt'] ? $_POST['CBCOt'] : "N/A";
$Meth=$_POST['Meth'] ;
$Tetra=$_POST['Tetra'] ;
$DT=$_POST['DT'] ;
$HBsAg=$_POST['HBsAg'] ;
$PregTest=$_POST['PregTest'] ;
$SeroOt=$_POST['SeroOt'] ;
$FecColor=$_POST['FecColor'] ;
$FecCon=$_POST['FecCon'] ;
$FecMicro=$_POST['FecMicro'] ;
$FecOt=$_POST['FecOt'] ;
$UriColor=$_POST['UriColor'] ;
$UriTrans=$_POST['UriTrans'] ;
$UriPh=$_POST['UriPh'] ;
$UriSp=$_POST['UriSp'] ;
$UriPro=$_POST['UriPro'] ;
$UriGlu=$_POST['UriGlu'] ;
$RBC=$_POST['RBC'] ? $_POST['RBC'] : "N/A";
$WBC=$_POST['WBC'] ? $_POST['WBC'] : "N/A";
$ECells=$_POST['ECells'] ;
$MThreads=$_POST['MThreads'] ;
$Bac=$_POST['Bac'];
$Amorph=$_POST['Amorph'];
$CoAx=$_POST['CoAx'];
$UriOt=$_POST['UriOt'] ? $_POST['UriOt'] : "N/A";
$date=date("Y-m-d H:i:s");
$Received=$_POST['Received'];
$Printed=$_POST['Printed'];
$qc=$_POST['qc'];

$sqlinsert= "INSERT INTO qpd_labresult (id, firnam, midnam, lasnam, comnam, WhiteBlood, Hemoglobin, HemoNR, Hematocrit, HemaNR, Neutrophils, Lymphocytes, Monocytes, CBCOt, Meth, Tetra, DT, HBsAg, PregTest, SeroOt, FecColor, FecCon, FecMicro, FecOt, UriColor, UriTrans, UriPh, UriSp, UriPro, UriGlu, RBC, WBC, ECells, MThreads, Bac, Amorph, CoAx, UriOt, date, Received, Printed) values ('$id', '$firnam', '$midnam', '$lasnam', '$comnam' ,'$WhiteBlood', '$Hemoglobin', '$HemoNR','$Hematocrit', '$HemaNR', '$Neutrophils', '$Lymphocytes', '$Monocytes', '$CBCOt','$Meth', '$Tetra', '$DT', '$HBsAg', '$PregTest', '$SeroOt','$FecColor', '$FecCon', '$FecMicro' , '$FecOt','$UriColor', '$UriTrans', '$UriPh', '$UriSp', '$UriPro', '$UriGlu', '$RBC', '$WBC', '$ECells', '$MThreads', '$Bac', '$Amorph', '$CoAx', '$UriOt', '$date', '$Received', '$Printed')";
$sqlinsert1= "INSERT INTO qpd_class(id, firnam, midnam, lasnam, comnam,qc, date) VALUES ('$id', '$firnam', '$midnam', '$lasnam', '$comnam' ,'$qc', '$date')";

  if ($conn->query($sqlinsert) === TRUE && $conn->query($sqlinsert1) === TRUE) 
  {
	echo "<script> alert('Record Added Successfully') </script>";
	echo "<script>window.open('LabIndustrial.php','_self')</script>";
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



















