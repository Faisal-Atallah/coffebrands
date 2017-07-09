

$(document).ready(function() {
    $('#contact').validate({

     /* input rule in contact form  */
        rules: {

            // the name is required and the min length of character is 2
            name: {
                minlength: 2,
                required: true
            },

            // the email is required and must be valid
            email: {
                required: true,
                email: true
            },

            // the subject is required and the min length of character is 3

            subject: {
                minlength: 3,
                required: true
            },

            // the message is required and the min length of character is 2
            message: {
                minlength: 2,
                required: true
            }
        },

        highlight: function(element) {
            $(element).closest('.form-group').removeClass('success').addClass('error');
        },
        success: function(element) {
            element.text('OK!').addClass('valid').closest('.form-group').removeClass('error').addClass('success');
        },

        submitHandler: function( form ) {


            $.ajax({
                url : 'http://localhost/coffebrands/master/Contact/send_email.html',
                data : $('#contact-form').serialize(),
                type: "POST",
                success : function(data){

                    $('#results').html(data);
                    setTimeout(function () { location.reload(1); }, 2500);
                }
            });
            return false;
        }
    });
});








