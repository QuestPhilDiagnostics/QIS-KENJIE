<?php
include_once('../connection.php');
include_once('../classes/rad.php');
include_once('../classes/transVal.php');
$trans = new trans;
if (isset($_GET['id'])){
    $id = $_GET['id'];
    $trans = $trans->fetch_data($id);

$rad = new rad;
if (isset($_GET['id'])){
	$id = $_GET['id'];
	$data = $rad->fetch_data($id);

?>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Radiology Report</title>
	<link href="../source/bootstrap4/css/bootstrap.min.css" media="all" rel="stylesheet"/>
</head>
<style type="text/css" media="all">
	.form-control
	{
		margin-bottom: 10px;
		width:300px;
	}
	.card-header
	{
		font-family: "Calibri";
		font-size: 24px;
	}
	.card-block, .checkbox
	{
		background-color: #ecf0f1;
		font-family: "Century Gothic";
		font-size: 18px;
	}
	.card-block input
	{
		font-family: "Century Gothic";
		font-size: 18px;
	}
	.card-block select
	{
		font-family: "Century Gothic";
		font-size: 18px;
	}
	.col p
	{
		text-transform: uppercase;
	}
</style>
<body >
<?php
include_once('radsidebar.php');
?>
<div class="container-fluid">
<center><p style="font-size: 36px; font-family: 'Century Gothic';">Edit Radiology Results</p></center>
<div class="row">
    <div class="col-md-10 offset-sm-1">
        <div class="card" style="border-radius: 0px; margin-top: 10px;">
            <div class="card-header card-inverse card-info"><center><b>PATIENT INFORMATION</b></center></div>
            <div class="card-block">
            <form action="LabResultsINSERT.php" method="post" autocomplete="off" enctype="multipart/form-data">
            	<div class="row">
					<div class="col col-md-auto">
						<label>SR No.: </label><br>
						<input type="hidden" name="id" value="<?php echo $data['id'] ?>">
						<b><?php echo $trans['id'] ?></b>
					</div>
					<div class="col">
						<label>Name:</label><br>
						<p><b><?php echo $data['lasnam'] ?>,<?php echo $data['firnam'] ?> <?php echo $data['midnam'] ?></b></p>
					</div>
					<div class="col">
						<label>Company Name: </label><br>
						<p><b><?php echo $data['comnam'] ?></b></p>
					</div>
				</div>
            </div>
        </div>
    </div>	
</div>
<div class="row">
	<div class="col-10 offset-sm-1">
        <div class="card" style="border-radius: 0px; margin-top: 10px;">
            <div class="card-header card-inverse card-info"><center><b>Radiology Report</b></center></div>
            <div class="card-block">
            <div class="row">
            	<div class="col">
            		<b>X-RAY Findings:</b>
            	</div>
            </div>
            <div class="row">
            	<div class="col">
            		<?php echo $data['com'] ?>
            	</div>
            </div>
            <div class="row">
            	<div class="col">
            		<b>X-RAY Impression:</b>
            	</div>
            </div>
            <div class="row">
            	<div class="col">
            		<?php echo $data['imp'] ?>
            	</div>
            </div>
            <hr>
            <div class="row">
            	<div class="col">
            		<b>Quality Assurance:</b>
            	</div>
            	<div class="col">
            		<b>Radiologist:</b>
            	</div>
            </div>
            <div class="row">
            	<div class="col">
            		<?php echo $data['qa'] ?>
            	</div>
            	<div class="col">
            		<?php echo $data['rad'] ?>
            	</div>
            </div>
            <hr>
            <center><button type="button" class="btn btn-primary" onclick="document.location = 'XRayEDIT.php?id=<?php echo $data['id']?>';">UPDATE RECORD</button></center>
            </div>
        </div>
	</div>
</div>



</div>
<?php }} ?>
</body>
</html>