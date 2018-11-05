$(document).ready(function(){
$(document).on('click', '#getItem', function(e){
e.preventDefault();
var empid = $(this).data('TransactionRef');
$('#employee-detail').hide();
$('#employee_data-loader').show();
$.ajax({
url: 'empData.php',
type: 'POST',
data: 'empItemPrice='+empItemPrice,
dataType: 'json',
cache: false
 })
.done(function(data){
console.log(data.ItemPrice);
$('#employee-detail').hide();
$('#employee-detail').show();
$('#empid').html(data.TransactionRef);
$('#empItemPrice').html(data.ItemPrice);
$('#employee_data-loader').hide();
})
.fail(function(){
$('#employee-detail').html('Error, Please try again...');
$('#employee_data-loader').hide();
});
});
});