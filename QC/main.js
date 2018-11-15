$(document).ready(function() {
    $('#sendform').validate({
        rules: {
            file: "required",            
            recipient: {
                required: true,
                email: true
            },
            subject: "required"
        },
        errorElement: "span" ,                            
        messages: {
            file: "Please put your results.",
            recipient: "Please enter your recipient.",
            subject: "Please enter your subject.",
            //category: "Please choose category"
        },
        submitHandler: function(form) {
            var dataparam = $('#sendform').serialize();

            $.ajax({
                type: 'POST',
                async: true,
                url: 'sendemail.php',
                data: dataparam,
                datatype: 'json',
                cache: true,
                global: false,
                beforeSend: function() { 
                    $('#loader').show();
                },
                success: function(data) {
                    if(data == 'success'){
                        console.log(data);
                    } else {
                        $('.no-config').show();
                        console.log(data);
                    }

                },
                complete: function() { 
                    $('#loader').hide();
                }
            });
        }                
    });
});