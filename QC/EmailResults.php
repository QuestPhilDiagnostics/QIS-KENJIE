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
									  <input class="check" type="checkbox" value="1" id="defaultCheck1" style=" height: 30px; width: 30px;">
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
						  <input class="form-check-input" type="checkbox" value=""  id="checkAll" style=" height: 30px; width: 30px;">
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
						<script type="text/javascript">
						$(document).ready(function() {
						  $('#addEmail').click(function() {
						    var adem = $('#preAlertEmail').val();
						    var inph = '<input type="hidden" name="email[]" value="'+adem+'" /><b>'+adem+'</b><br />';
						    $('#inph').append(inph);
						  });
						});

						function _addEmail(){
	
							$('.add-email').unbind('click').click(function(e){
								e.preventDefault();
								var url = $(this).parents('form').attr('action');

								$.ajax({
							  		url: url,
							  		dataType: 'html',
							  		cache: false,
							  		success: function(data){
							  			$(this).parents('form').find('ul.email-list').append('<li>'+data+'</li>');
							  			alert($(this).parents('form').find('ul.email-list').text())
							  		},
							  		error: function(){
							  			alert('Sorry, there was an error with your request. Please try again.')
							  		}
								});
							});

						}
						</script>
						<form action="" method="post" name="formid" id="formid" class="pre-alert-email-form">
						  <div class="email-list">
						    <div class="email-list-item" id="inph">
						      <input type="hidden" name="email[]" value="" /><b></b>
						    </div>
						  </div>
						  <div class="contents">
						    <h4 class="toggle-additional-emails">Recipient's Email</h4>
						    <div class="additional-emails">
						      <div class="form-item">
						        <span class="form-body">
						          <input type="email" multiple pattern="^([\w+-.%]+@[\w-.]+\.[A-Za-z]{2,4},*[\W]*)+$" name="preAlertEmail" id="preAlertEmail" class="form-control" placeholder="Enter Valid Email..." style="padding-left: 0px;"/>
						        </span>
						      </div>
						        <input type="button" class="button left add add-email" id="addEmail" name="addEmail" value="Add email" />
						    </div>
						  </div>
						</form>

					</div>
				</div>
				<div class="row">
					<div class="col">
						<button class="btn-primary" type="submit">SEND</button>
					</div>
				</div>



				</form>
            </div>
        </div>




	  </div>
	</div>
</div>



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



</body>
</html> 