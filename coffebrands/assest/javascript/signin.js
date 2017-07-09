
/*    Login validation and rules       */

$(document).ready(function() {
    $('#login_form').validate({


        rules: {

            // the email is required and must be valid
            email: {

                required: true,
                email: true
            },

            // the password is required and must be true

            password: {
                minlength: 8,
                required: true
            }
        },

        /// print ok if user print true rule else print validation error

        highlight: function(element) {
            $(element).closest('form-control').removeClass('success').addClass('error');
        },
        success: function(element) {
            element.text('OK!').addClass('valid').closest('.form-group').removeClass('error').addClass('success');
        },
        errorPlacement: function(error, element) {
            if(element.parent('.input-group').length) {
                error.insertAfter(element.parent());
            } else {
                error.insertAfter(element);
            }
        },




        submitHandler: function( form ) {

            $.ajax({
                url: 'http://localhost/coffebrands/users_pages/Register_system/login.html',

                data : $('#login_form').serialize(),

                type: "POST",

                success: function (data) {

                    if (data == 'HELLO') {

                        $('#messageLogin').html('You are login');

                        $("#login_modal").hide('12121');

                        setTimeout(function () {

                            window.location.href ='http://localhost/coffebrands/users_pages/Register_system/user_area';

                        },1000);

                    }

                    else if (data == 'sorry') {

                        $('#messageLogin').html('Incorrect Email/password');
                    }
                }
            });
            return false;
        }
    });

});
