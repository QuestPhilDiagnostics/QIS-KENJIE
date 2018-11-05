<?php
include_once('../connection.php');
include_once('../classes/medhis.php');
include_once('../classes/vital.php');
include_once('../classes/pe.php');
include_once('../classes/patient.php');
$patient = new Patient;
if (isset($_GET['id'])){
	$id = $_GET['id'];
	$data = $patient->fetch_data($id);
$pe = new pe;
if (isset($_GET['id'])){
    $id = $_GET['id'];
    $pe = $pe->fetch_data($id);
$vital = new vital;
if (isset($_GET['id'])){
	$id = $_GET['id'];
	$vit = $vital->fetch_data($id);
$His = new His;
if (isset($_GET['id'])){
	$id = $_GET['id'];
	$his = $His->fetch_data($id);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Medical History & Vital Signs</title>
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
	.card-block input, 
	{
		font-family: "Century Gothic";
		font-size: 18px;
	}
</style>

<body >
<?php
include_once('nursesidebar.php');
?>
<div class="container-fluid">
<div class="row">
    <div class="col-md-10 offset-sm-1">
        <div class="card" style="border-radius: 0px; margin-top: 10px;">
            <div class="card-header card-inverse card-info"><center><b>PATIENT INFORMATION</b></center></div>
            <div class="card-block">
            	<div class="row">
					<div class="col col-md-auto">
						<label>SR No.: </label><br>
						<b><?php echo $data['PatientID'] ?></b>
					</div>
					<div class="col">
						<label>Name:</label><br>
						<p><b><?php echo $data['LastName'] ?>,<?php echo $data['FirstName'] ?> <?php echo $data['MiddleName'] ?></b></p>
					</div>
					<div class="col">
						<label>Company Name: </label><br>
						<p><b><?php echo $data['CompanyName'] ?></b></p>
					</div>
				</div>
            </div>
        </div>
    </div>	
</div>
<div class="row">
    <div class="col-md-10 offset-sm-1">
        <div class="card" style="border-radius: 0px; margin-top: 10px;">
            <div class="card-header card-inverse card-info"><center><b>Medical History</b></center></div>
            <div class="card-block">
            	<div class="row">
					<div class="col">
						<label class="col-12 col-form-label text-right">Significant Past Illness</label>
					</div>
					<div class="col">
						<label class="col-12 col-form-label">YES / NO</label>
					</div>
				</div>
				<div class="row">
					<div class="col">
						<label class="col-12 text-right">Asthma:</label>
					</div>
					<div class="col">
						<p style="padding-left: 20px;"><b><?php echo $his['asth']?></b></p>
					</div>
				</div>
				<div class="row">
					<div class="col">
						<label class="col-12 text-right">Tuberculosis:</label>
					</div>
					<div class="col">
						<p style="padding-left: 20px;"><b><?php echo $his['tb']?></b></p>
					</div>
				</div>
				<div class="row">
					<div class="col">
						<label class="col-12 text-right">Diabetes:</label><br>
					</div>
					<div class="col">
						<p style="padding-left: 20px;"><b><?php echo $his['dia']?></b></p>
					</div>
				</div>
				<div class="row">
					<div class="col">
						<label class="col-12 text-right">High Blood Pressure:</label><br>
					</div>
					<div class="col">
						<p style="padding-left: 20px;"><b><?php echo $his['hb']?></b></p>
					</div>
				</div>
				<div class="row">
					<div class="col">
						<label class="col-12 text-right">Heart Problem:</label><br>
					</div>
					<div class="col">
						<p style="padding-left: 20px;"><b><?php echo $his['hp']?></b></p>
					</div>
				</div>
				<div class="row">
					<div class="col">
						<label class="col-12 text-right">Kidney Problem:</label><br>
					</div>
					<div class="col">
						<p style="padding-left: 20px;"><b><?php echo $his['kp']?></b></p>
					</div>
				</div>
				<div class="row">
					<div class="col">
						<label class="col-12 text-right">Abdominal/Hernia:</label><br>
					</div>
					<div class="col">
						<p style="padding-left: 20px;"><b><?php echo $his['ab']?></b></p>
					</div>
				</div>
				<div class="row">
					<div class="col">
						<label class="col-12 text-right">Joint/Back/Scoliosis:</label><br>
					</div>
					<div class="col">
						<p style="padding-left: 20px;"><b><?php echo $his['jbs']?></b></p>
					</div>
				</div>
				<div class="row">
					<div class="col">
						<label class="col-12 text-right">Psychiatric Problem:</label><br>
					</div>
					<div class="col">
						<p style="padding-left: 20px;"><b><?php echo $his['pp']?></b></p>
					</div>
				</div>
				<div class="row">
					<div class="col">
						<label class="col-12 text-right">Migraine/Headache:</label><br>
					</div>
					<div class="col">
						<p style="padding-left: 20px;"><b><?php echo $his['mh']?></b></p>
					</div>
				</div>
				<div class="row">
					<div class="col">
						<label class="col-12 text-right">Fainting/Seizure:</label><br>
					</div>
					<div class="col">
						<p style="padding-left: 20px;"><b><?php echo $his['fs']?></b></p>
					</div>
				</div>
				<div class="row">
					<div class="col">
						<label class="col-12 text-right">Allergies:</label><br>
					</div>
					<div class="col">
						<p style="padding-left: 20px;"><b><?php echo $his['alle']?></b></p>
					</div>
				</div>
				<div class="row">
					<div class="col">
						<label class="col-12 text-right">Cancer/Tumor:</label><br>
					</div>
					<div class="col">
						<p style="padding-left: 20px;"><b><?php echo $his['ct']?></b></p>
					</div>
				</div>
				<div class="row">
					<div class="col">
						<label class="col-12 text-right">Hepatitis:</label><br>
					</div>
					<div class="col">
						<p style="padding-left: 20px;"><b><?php echo $his['hep']?></b></p>
					</div>
				</div>
				<div class="row">
					<div class="col">
						<label class="col-12 text-right">STD:</label><br>
					</div>
					<div class="col">
						<p style="padding-left: 20px;"><b><?php echo $his['std']?></b></p>
					</div>
				</div>
				<div class="row">
					<div class="col">
						<center><button type="button" class="btn btn-primary" onclick="document.location = 'MedHisEDIT.php?id=<?php echo $his['PatientID']?>';">UPDATE RECORD</button></center>
					</div>
				</div>
            </div>
        </div>
    </div>
</div>
<div class="row">
<div class="col-md-10 offset-sm-1">
        <div class="card" style="border-radius: 0px; margin-top: 10px;">
            <div class="card-header card-inverse card-info"><center><b>Vital Signs</b></center></div>
            <div class="card-block">
            	<div class="row">
					<div class="col">
						<label>Height:</label>
						<b><?php echo $vit['height']?></b>
					</div>
					<div class="col">
						<label>Weight:</label>
						<b><?php echo $vit['weight']?></b>
					</div>
					<div class="col">
						<label>BMI:</label>
						<b><?php echo $vit['bmi']?></b>
					</div>
				</div>
				<div class="row">
					<div class="col">
						<label>BP:</label>
						<b><?php echo $vit['bp']?></b>
					</div>
					<div class="col">
						<label>PR:</label>
						<b><?php echo $vit['pr']?></b>
					</div>
					<div class="col">
						<label>RR:</label>
						<b><?php echo $vit['rr']?></b>
					</div>
				</div>
				<div class="row">
					<div class="col">
						<label class="col-12 col-form-label text-center" ><b>VISUAL ACUITY</b></label>
					</div>
				</div>
				<div class="row">
					<div class="col">
						<label><b>Uncorrected</b></label>
					</div>
					<div class="col">
						<label>OD:</label>
						<b><?php echo $vit['uod']?></b>
					</div>
					<div class="col">
						<label>OS:</label>
						<b><?php echo $vit['uos']?></b>
					</div>
				</div>
				<div class="row">
					<div class="col">
						<label><b>Corrected</b></label>
					</div>
					<div class="col">
						<label>OD:</label>
						<b><?php echo $vit['cod']?></b>
					</div>
					<div class="col">
						<label>OS:</label>
						<b><?php echo $vit['cos']?></b>
					</div>
				</div>
				<div class="row">
					<div class="col-4">
						<label>Ishihara Test:</label>
					</div>
					<div class="col-8">
						<b><?php echo $vit['cv']?></b>
					</div>
				</div>
				<div class="row">
					<div class="col-4">
						<label>Hearing:</label>
					</div>
					<div class="col-8">
						<b><?php echo $vit['hearing']?></b>
					</div>
				</div>
				<div class="row">
					<div class="col">
						<label>Hospitalization:</label>
					</div>
					<div class="col-8">
						<b><?php echo $vit['hosp']?></b>
					</div>
				</div>
				<div class="row">
					<div class="col">
						<label>Operations:</label>
					</div>
					<div class="col-8">
						<b><?php echo $vit['opr']?></b>
					</div>
				</div>
				<div class="row">
					<div class="col">
						<label>Present Medications:</label>
					</div>
					<div class="col-8">
						<b><?php echo $vit['pm']?></b>
					</div>
				</div>
				<div class="row">
					<div class="col">
						<label>Smoker(sticks/packs/years):</label>
					</div>
					<div class="col-8">
						<b><?php echo $vit['smoker']?></b>
					</div>
				</div>
				<div class="row">
					<div class="col">
						<label>Alcoholic Drinker:</label>
					</div>
					<div class="col-8">
						<b><?php echo $vit['ad']?></b>
					</div>
				</div>
				<div class="row">
					<div class="col">
						<label>Last Menstrual Period:</label>
					</div>
					<div class="col-8">
						<b><?php echo $vit['lmp']?></b>
					</div>
				</div>
				<div class="row">
					<div class="col">
						<label>Others/Notes:</label>
					</div>
					<div class="col-8">
						<b><?php echo $vit['Notes']?></b>
					</div>
				</div>
				<div class="row">
					<div class="col">
						<center><button type="button" class="btn btn-primary" onclick="document.location = 'VitalSignEDIT.php?id=<?php echo $vit['PatientID']?>';">UPDATE RECORD</button>
					</div>
				</div>
            </div>
        </div>
    </div>
</div>
 <div class="row">
	<div class="col-10 offset-sm-1">
        <div class="card" style="border-radius: 0px; margin-top: 10px;">
            <div class="card-header card-inverse card-info"><center><b>Physical Examinations</b></center></div>
            <div class="card-block">
            <div class="row">
                    <div class="col">
                    </div>
                    <div class="col">
                        <label>NORMAL</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                    </div>
                    <div class="col">
                        <label>YES/NO</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label class="col-12 text-right">Skin:</label><br>
                    </div>
                    <div class="col">
                        <p style="padding-left: 20px;"><b><?php echo $pe['skin']?><br></b></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label class="col-12 text-right">Head and Neck:</label><br>
                    </div>
                    <div class="col">
                        <p style="padding-left: 20px;"><b><?php echo $pe['hn']?><br></b></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label class="col-12 text-right">Chest/Breast/Lungs:</label><br>
                    </div>
                    <div class="col">
                        <p style="padding-left: 20px;"><b><?php echo $pe['cbl']?><br></b></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label class="col-12 text-right">Cardiac/Heart:</label><br>
                    </div>
                    <div class="col">
                        <p style="padding-left: 20px;"><b><?php echo $pe['ch']?><br></b></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label class="col-12 text-right">Abdomen:</label><br>
                    </div>
                    <div class="col">
                        <p style="padding-left: 20px;"><b><?php echo $pe['abdo']?><br></b></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label class="col-12 text-right">Extremities:</label><br>
                    </div>
                    <div class="col">
                        <p style="padding-left: 20px;"><b><?php echo $pe['extre']?><br></b></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label class="col-12 text-right">Others/Notes:</label><br>
                    </div>
                    <div class="col">
                        <p style="padding-left: 20px;"><b><?php echo $pe['ot']?><br></b></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label class="col-12 text-right">Findings:</label><br>
                    </div>
                    <div class="col">
                        <p style="padding-left: 20px;"><b><?php echo $pe['find']?><br></b></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label class="col-12 text-right">Physican:</label><br>
                    </div>
                    <div class="col">
                        <p style="padding-left: 20px;"><b><?php echo $pe['Doctor']?><br></b></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label class="col-12 text-right">License:</label><br>
                    </div>
                    <div class="col">
                        <p style="padding-left: 20px;"><b><?php echo $pe['License']?><br></b></p>
                    </div>
                </div>
            <hr>
            <center><button type="button" class="btn btn-primary" onclick="document.location = 'PExamEDIT.php?id=<?php echo $pe['PatientID']?>';">UPDATE RECORD</button></center>
            </div>
        </div>
	</div>
</div>
<center><button type="button" class="btn btn-primary" onclick="document.location = 'MHVS.php';">BACK</button></center>








</div>
</body>
</html>
<?php  }}}}	?>	