$(document).ready(function() {
    $('#AdminForm').validate({
        rules: {
            email: {

                required: true
            },
            password: {
                minlength: 8,
                required: true
            }
        },
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
                url: 'http://localhost/coffebrands/admin_pages/Admin_login/validation_admin',
                data : $('#AdminForm').serialize(),
                type: "POST",
                success: function (data) {
                    if (data == 'HELLO') {

                        $('#ADMS').html('You are login');

                        $("#AdminForm").hide('121');

                        setTimeout(function () {

                            window.location.href ='http://localhost/coffebrands/admin_pages/Admin_login/Admin_area';
                        },1000);

                    }
                    else if (data == 'sorry') {

                        $('#ADMS').html('Incorrect Email/password');
                    }
                }
            })
            return false;
        }
    });

});
