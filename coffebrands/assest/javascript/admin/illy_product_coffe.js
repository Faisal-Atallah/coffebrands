
<!--==========================================   Illy coffe product script ============================================-------------------------------------------------------------->

$(document).ready(function() {

    var save_method; //for save method string
    var table;
    $(document).ready(function () {
        //datatables
        table = $('#illy_coffy_table').DataTable({

            "processing": true, //Feature control the processing indicator.
            "serverSide": true, //Feature control DataTables' server-side processing mode.
            "order": [], //Initial no order.

            // Load data for the table's content from an Ajax source
            "ajax": {
                "url": "<?php echo site_url('illy/Illy_product/product_list')?>",
                "type": "POST"
            },

            //Set column definition initialisation properties.
            "columnDefs": [
                {
                    "targets": [-1], //last column
                    "orderable": false, //set not orderable
                },
            ],

        });
    });
    function add_product() {
        save_method = 'add';
        $('#Illy_coffe_product_form')[0].reset(); // reset form on modals
        $('.form-group').removeClass('has-error'); // clear error class
        $('.help-block').empty(); // clear error string
        $('#illy_coffe_Modal').modal('show'); // show bootstrap modal
        $('.modal-title').text('Add Products');
    }

    function edit_product(product_id) {
        save_method = 'update';
        $('#Illy_coffe_product_form')[0].reset(); // reset form on modals

        $('.form-group').removeClass('has-error'); // clear error class

        $('.help-block').empty(); // clear error string

        //Ajax Load data from ajax
        $.ajax({
            url: 'http://localhost/coffebrands/illy/Illy_product/product_edit/' + product_id,
            type: "GET",
            dataType: "JSON",
            success: function (data) {

                $('[name="product_id"]').val(data.product_id);
                $('[name="product_image"]').val(data.product_image);
                $('[name="product_name"]').val(data.product_name);
                $('[name="product_code"]').val(data.product_code);
                $('[name="product_description"]').val(data.product_description);

                $('[name="product_price"]').val(data.product_price);
                $('#illy_coffe_Modal').modal('show'); // show bootstrap modal when complete loaded
                $('.modal-title').text('Edit Product'); // Set title to Bootstrap modal title

            },
            error: function (jqXHR, textStatus, errorThrown) {
                alert('Error get data from ajax');
            }
        });
    }

    function reload_table() {
        table.ajax.reload(null, false); //reload datatable ajax
    }

    function save() {
        $('#btnSavePro').text('saving...'); //change button text
        $('#btnSavePro').attr('disabled', true); //set button disable
        var url;

        if (save_method == 'add') {
            url = "<?php echo site_url('illy/Illy_product/product_add')?>";
        } else {
            url = "<?php echo site_url('illy/Illy_product/product_update')?>";
        }
        // ajax adding data to database
        $.ajax({
            url: url,
            type: "POST",
            data: $('#Illy_coffe_product_form').serialize(),
            dataType: "JSON",
            success: function (data) {
                if (data.status) //if success close modal and reload ajax table
                {
                    $('#illy_coffe_Modal').modal('hide');
                    reload_table();
                }
                $('#btnSavePro').text('save'); //change button text
                $('#btnSavePro').attr('disabled', false); //set button enable

            },
            error: function (jqXHR, textStatus, errorThrown) {
                alert('Error adding / update data');
                $('#btnSavePro').text('save'); //change button text
                $('#btnSavePro').attr('disabled', false); //set button enable
            }
        });
    }

    function delete_product(product_id) {
        if (confirm('Are you sure delete this data?')) {
            // ajax delete data to database
            $.ajax({
                url: 'http://localhost/coffebrands/illy/Illy_product/product_delete/' + product_id,
                type: "POST",
                success: function (data) {
                    //if success reload ajax table
                    $('#illy_coffe_Modal').modal('hide');
                    reload_table();
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    alert('Error deleting data');
                }
            });
        }
    }

});