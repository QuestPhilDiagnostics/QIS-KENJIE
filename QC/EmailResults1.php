<?php
include_once('../connection.php');
include_once('../classes/emailResult.php');
$sendEmail = new sendEmail;
$patients = $sendEmail->fetch_all();

?>
<html>
	<head>
		<title>Email Results</title>
		<script type="text/javascript" src="../source/CDN/jquery-1.12.4.js"></script>
		<script type="text/javascript" src="../source/CDN/jquery.dataTables.min.js"></script>
		<script type="text/javascript" src="../source/CDN/dataTables.bootstrap4.min.js"></script>
		<script type="text/javascript" src="../source/CDN/dataTables.buttons.min.js"></script>
		<script type="text/javascript" src="../source/CDN/buttons.bootstrap4.min.js"></script>
		<script type="text/javascript" src="../source/CDN/jszip.min.js"></script>
		<script type="text/javascript" src="../source/CDN/pdfmake.min.js"></script>
		<script type="text/javascript" src="../source/CDN/vfs_fonts.js"></script>
		<script type="text/javascript" src="../source/CDN/buttons.html5.min.js"></script>
		<script type="text/javascript" src="../source/CDN/buttons.print.min.js"></script>
		<script type="text/javascript" src="../source/CDN/buttons.colVis.min.js"></script>
		<link rel="stylesheet" type="text/css" href="../source/bootstrap4/css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="../source/CDN/dataTables.bootstrap4.min.css">
		<link rel="stylesheet" type="text/css" href="../source/CDN/buttons.bootstrap4.min.css	">
		<link rel="stylesheet" href="multiple-emails.css">
		<script src="multiple-emails.js"></script>

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
		font-weight: bolder;
	}
	.card-block input, 
	{
		font-family: "Century Gothic";
		font-size: 18px;
	}
</style>
<body>
<?php
include_once('qcsidebar.php');
?>
<div class="container-fluid" style="margin-top: 10px;">
	<div class="row">
	  <div class="col-8">
		<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
	        			<thead>
							<th wrap>Checklist</th>
							<th>Company Name</th>
							<th nowrap>Patient Name</th>
							<th>Medical Classification</th>
							<th>Remarks</th>
	                    	<th nowrap>Transaction No.</th>
	                    	<th>Patient ID</th>
	                    	<th nowrap>Transaction Date</th>
						</thead>
						<?php foreach  ($patients as $patient) {  ?>
						<tr>	
								<td>
								<div class="form-check" style="padding-left: 10px;">
									<input class="check" type="checkbox" value="1" id="defaultCheck1" style=" height: 30px; width: 30px;" onclick="window.open('../ResultPDF.php?id=<?php echo $patient['PatientID']?>&tid=<?php echo $patient['TransactionID']?>');">
								</div>
								</td>
								<td>
									<?php echo $patient['CompanyName']?>
								</td>	
								<td nowrap>
									<?php echo $patient['LastName']?>,<?php echo $patient['FirstName']?> <?php echo $patient['MiddleName']?> 
								</td>
								<td>
									<?php echo $patient['MedicalClass']?>
								</td>
								<td>
									<?php echo $patient['Notes']?>
								</td>
								<td>
									<?php echo $patient['TransactionID']?>
								</td>
								<td>
									<?php echo $patient['PatientID']?>
								</td>
								<td>
									<?php echo $patient['TransactionDate']?>
								</td>

						</tr>
						<?php  } 	?> 

	    </table>
	  </div>
	  <div class="col-4">
    	<div class="card" style="border-radius: 0px;">
            <div class="card-header card-inverse card-info"><center><b>PATIENT INFORMATION</b></center></div>
            <div class="card-block">
            	<div class="row">

					<div class="col">
						<div class="form-check" style="padding-left: 10px;">
						  <input class="form-check-input" type="checkbox" value="2"  id="checkAll" style=" height: 30px; width: 30px;" >
						  <label class="form-check-label" for="checkAll">
						    Select All / Deselect
						  </label>
						</div>
					</div>
				</div>
				<hr>
				<!-- <form action="SEmail.php" method="POST"> -->
				<div class="row">
					<div class="col">
						
						<form action="" method="post" name="formid" id="formid" class="pre-alert-email-form">
						  <div class="contents">
						    <h6 class="toggle-additional-emails">To:</h6>
						    <div class="additional-emails">
						      <div class="form-item">
						        <span class="form-body">
						          <input type="email" name="preAlertEmail" id="preAlertEmail" class="form-control" placeholder="Enter Valid Email..." style="padding-left: 0px;"/>
						        </span>
						      </div>
							  <div class="email-list">
							    <div class="email-list-item" id="inph">
							      <input type="hidden" name="email[]" value="" required/><b></b>
							    </div>
							  </div>
						        
						    </div>
						  </div>
						
					</div>
					<div class="col-sm-auto" style="padding-top: 25px; " >
						<input type="button" class="btn-primary left add add-email" id="addEmail" name="addEmail" value="Add email"  style="height: 35px" />
					</div>
					</form>
				</div>
				<form method="POST" enctype="multipart/form-data">
				<div class="row">
					<div class="col">
						<h6>Attach Result:</h6>
						<input type="file" name="file" multiple/>
						<br>
						<br>
					</div>
				</div>
				<div class="row">
					<div class="col">
						<h6>Recipient:</h6>
						<input type="email" class="form-control" name="recipient" placeholder="Enter Email Subject..." style="padding-left: 0px" Required/>
					</div>
				</div>
				<div class="row">
					<div class="col">
						<h6>Subject:</h6>
						<input type="text" class="form-control" name="subject" placeholder="Enter Email Subject..." style="padding-left: 0px" Required/>
					</div>
				</div>
				<hr>
				<div class="row">
					<div class="col">
						<input type="submit" name="btnsend" id="save" class="btn-primary" value="Send">
						<div id="loading"></div>
					</div>
				</div>

				</form>
            </div>
        </div>




	  </div>
	</div>
</div>

<script type="text/javascript">
	
	$('#save').click(function () {
    // add loading image to div
    $('#loading').html('<img src="http://preloaders.net/preloaders/287/Filling%20broken%20ring.gif"> loading...');
    
    // run ajax request
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "https://api.github.com/users/jveldboom",
        success: function (d) {
            // replace div's content with returned data
            // $('#loading').html('<img src="'+d.avatar_url+'"><br>'+d.login);
            // setTimeout added to show loading
            setTimeout(function () {
                $('#loading');
            }, 2000);
        }
    });
});


</script>



<?php


	# code...

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';


if (isset($_POST['btnsend'])) {
$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
    $mail->SMTPDebug = 0;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'questphil.it@gmail.com';                 // SMTP username
    $mail->Password = 'questphil2012';                           // SMTP password
    $mail->SMTPSecure = 'tls';                       // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('from@example.com', 'Kenjie Tiglao');
    $mail->addAddress($_POST['recipient']);     // Add a recipient
    //$mail->addAddress('ellen@example.com');               // Name is optional
    //$mail->addReplyTo('info@example.com', 'Information');
    //$mail->addCC('cc@example.com');
    //$mail->addBCC('bcc@example.com');

    //Attachments
    $file_name = $_FILES["file"]["name"];
	move_uploaded_file($_FILES["file"]["tmp_name"], $file_name);
    $mail->addAttachment($file_name);         // Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = $_POST["subject"];
    $mail->Body    = "This is the result, see the attachments.";
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo '<script type="text/javascript"> alert("The message has been sent.") </script>';
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}
}else{

	//echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}

?>

<script>
	
	$("#checkAll").click(function () {
	    $(".check").prop('checked', $(this).prop('checked'));
	});

	$(document).ready(function() {
    var table = $('#example').DataTable( {
        lengthChange: false,
        scrollY:       500,
        scrollCollapse: true,
        "scrollX": true,
        paging:         false,
        buttons: ['excel', 'pdf', 'colvis' ]
    } );
 
    table.buttons().container()
        .appendTo( '#example_wrapper .col-md-6:eq(0)' );
} );	


</script>
<!-- <script type="text/javascript">
	
	function Generate()
	{
		var id = document.getElementById("id").value;
		var tid = document.getElementById("tid").value;

		window.open('../ResultPDF.php?id='+id+'&tid='_tid,'_blank');


	}
</script> -->



</body>
</html> 