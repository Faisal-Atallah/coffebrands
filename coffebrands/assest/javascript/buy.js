





//////     send payment form to save order conroller


$(document).ready(function() {
    $('#billing').validate({
  
        submitHandler: function( form ) {

            $.ajax({
                url: 'http://localhost/coffebrands/users_pages/Order/save_order',
                data : $('#billing').serialize(),
                type: "POST",
                success: function (data) {
                    if (data == 'suc') {


                        $("#billing").hide('12121');
                        $("#BillingSuc").modal();
                        $('.modal-body').text('Your order was sent successfully');


                    }
                    else if (data == 'sorry') {
                       
                    }
                }
            });
            return false;
        }
    });

});

