<?php
include_once('../connection.php');
include_once('../classes/rad.php');
$rad = new rad;
$rad= $rad->fetch_all();
?>
<html>
	<head>
		<title>List Of Patients</title>
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
	</head>
	<style type="text/css">
		thead
		{
			white-space: nowrap;
		}
	</style>
<body>
<?php
include_once('radsidebar.php');
?>
<div class="container" style="margin-top: 10px;">
	<table id="example" class="table table-striped table-bordered table-hover" cellspacing="0" width="50%" style="overflow-x:scroll;">
		<thead>
                    	<th>ID</th>
                    	<th>Date</th>
						<th>Company Name</th>
						<th>Patient Name</th>
						<th>Comment</th>
						<th>Impression</th>
						<th>Radiologist</th>
						<th>Quality Assurance</th>
						<th>Action</th>
					</thead>
					<?php foreach  ($rad as $rad) {  ?>
					<tr>
							<td>
								<?php echo $rad['id']?>
							</td>
							<td>
								<?php echo $rad['date']?>
							</td>
							<td>
								<?php echo $rad['comnam']?>
							</td>	
							<td>
								<?php echo $rad['lasnam']?>,<?php echo $rad['firnam']?> <?php echo $rad['midnam']?> 
							</td>
							<td>
								<?php echo $rad['com']?>
							</td>
							<td>
								<?php echo $rad['imp']?>
							</td>
							<td>
								<?php echo $rad['rad']?>
							</td>
							<td>
								<?php echo $rad['qa']?>
							</td>
							<td>
								<button type="button" class="btn btn-primary" onclick="document.location = 'XRayEDIT.php?id=<?php echo $rad['id']?>';">UPDATE RECORD</button>
							</td>

					</tr>
					<?php  } 	?> 
				</table>
</div>


<script>
	$(document).ready(function() {
    var table = $('#example').DataTable( {
        lengthChange: false,
        scrollY:       400,
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