
/* signup validation and rule */

$(document).ready(function() {
    $('#signup_form').validate({

        rules: {
            fname: {
                minlength: 3,
                required: true
            },
            lname:{
                minlength:3,
                required:true
            },
            email: {
                required: true,
                email: true
            },
            phonenum:{
                required:true,
                minlength:10
            },
            country:{
                required:true,
            },
            password:{
                required:true,
                minlength:8,

            },
            Cpassword:{
                required:true,
                equalTo: "#password"
            }
            ,
            date:{
                required:true
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

                url : 'http://localhost/coffebrands/users_pages/Register_system/create_account.html',

                data : $('#signup_form').serialize(),

                type: "POST",

                success: function (data) {

                    if (data == 'ACCEPT') {

                        $("#signup_modal").hide('4343433');
                        setTimeout(function () {
                            $("#login_modal").modal();
                            $('#messageLogin').html('Now You Can Login');
                        }, 1000);

                           // $('#messagess').html('Now You Can Login');

                    }

                    else if (data == 'EMAIL_EXIST') {


                        $('#message').html('The email is already exists in our database,please use a different one' )

                    }
                }

            });



            return false;
        }

    });

});


