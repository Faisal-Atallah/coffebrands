

<div class="container">



    <h3 class="text-center">User Data</h3>
    <br />

    <button style="background-color:#444444;border-color: transparent" class="btn btn-success" onclick="add_person()"><i class="glyphicon glyphicon-plus"></i> Add User</button>
    <button class="btn btn-default" onclick="reload_table()"><i class="glyphicon glyphicon-refresh"></i> Reload</button>

         <span class="col-sm-7 pull-right">
        <img src="http://localhost/coffebrands/assest/image/team.png">
         <label>Total Users :<?php $query=$this->db->count_all('users');

               echo $query;
             ?></label>
        </span>

    <br />
    <br />


    <table id="table" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
        <tr>
            <th>Id</th>

            <th>First Name</th>

            <th>Last Name</th>

            <th>Email</th>

            <th>Date of Birth</th>

            <th>Country</th>

            <th>Phone</th>
            <th>Password</th>
            <th>Home number</th>

            <th>Street</th>

            <th>Note</th>

            <th style="width:155px;">Action</th>

        </tr>
        </thead>
        <tbody>
        </tbody>

        <tfoot>
        <tr>

            <th>Id</th>

            <th>First Name</th>

            <th>Last Name</th>

            <th>Email</th>

            <th>Date of Birth</th>

            <th>Country</th>

            <th>Phone</th>
            <th>Password</th>
            <th>Home number</th>

            <th>Street</th>

            <th>Note</th>
            <th>Action</th>

        </tr>
        </tfoot>
    </table>
</div>



<!-- Bootstrap modal -->
<!-- Modal -->


<?php  $this->load->view('admin/footer');?>
<script type="text/javascript">

    var save_method; //for save method string
    var table;
    $(document).ready(function() {
        //datatables
        table = $('#table').DataTable({

            "processing": true, //Feature control the processing indicator.
            "serverSide": true, //Feature control DataTables' server-side processing mode.
            "order": [], //Initial no order.

            // Load data for the table's content from an Ajax source
            "ajax": {
                "url": "<?php echo site_url('admin_pages/Users_table/ajax_list')?>",
                "type": "POST"
            },

            //Set column definition initialisation properties.
            "columnDefs": [
                {
                    "targets": [ -1 ], //last column
                    "orderable": false, //set not orderable
                },
            ],

        });

        //datepicker
        $('.datepicker').datepicker({
            autoclose: true,
            format: "yyyy-mm-dd",
            todayHighlight: true,
            orientation: "top auto",
            todayBtn: true,
            todayHighlight: true,
        });

    });
    function add_person()
    {
        save_method = 'add';
        $('#form')[0].reset(); // reset form on modals
        $('.form-group').removeClass('has-error'); // clear error class
        $('.help-block').empty(); // clear error string
        $('#Add_user').modal('show'); // show bootstrap modal
        $('.modal-title').text('Add User');
    }



    function reload_table()
    {
        table.ajax.reload(null,false); //reload datatable ajax
    }

    function edit_person(id)
    {
        save_method = 'update';
        $('#form')[0].reset(); // reset form on modals
        $('.form-group').removeClass('has-error'); // clear error class
        $('.help-block').empty(); // clear error string

        //Ajax Load data from ajax
        $.ajax({
            url:'http://localhost/coffebrands/admin_pages/Users_table/ajax_edit/' +id,

            type: "GET",

            dataType: "JSON",

            success: function(data)

            {
                $('[name="id"]').val(data.id);
                $('[name="fname"]').val(data.fname);
                $('[name="lname"]').val(data.lname);
                $('[name="email"]').val(data.email);
                $('[name="date"]').datepicker('update',data.date);
                $('[name="phone"]').val(data.phone);
                $('[name="password"]').val(data.password);
                $('[name="country"]').val(data.country);

                $('[name="homenumber"]').val(data.homenumber);
                $('[name="street"]').val(data.street);
                $('[name="note"]').val(data.note)
                $('#Add_user').modal('show'); // show bootstrap modal when complete loaded
                $('.modal-title').text('Edit User'); // Set title to Bootstrap modal title

            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error get data from ajax');
            }
        });
    }

    function save()
    {
        $('#btnSave').text('saving...'); //change button text
        $('#btnSave').attr('disabled',true); //set button disable
        var url;

        if(save_method == 'add') {
            url = "<?php echo site_url('admin_pages/Users_table/ajax_add')?>";
        } else {
            url = "<?php echo site_url('admin_pages/Users_table/ajax_update')?>";
        }
        // ajax adding data to database
        $.ajax({
            url : url,
            type: "POST",
            data: $('#form').serialize(),
            dataType: "JSON",
            success: function(data)
            {
                if(data.status) //if success close modal and reload ajax table
                {
                    $('#Add_user').modal('hide');
                    reload_table();
                }
                $('#btnSave').text('save'); //change button text
                $('#btnSave').attr('disabled',false); //set button enable

            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error adding / update data');
                $('#btnSave').text('save'); //change button text
                $('#btnSave').attr('disabled',false); //set button enable
            }
        });
    }
    function delete_person(id)
    {
        if(confirm('Are you sure delete this data?'))
        {
            // ajax delete data to database
            $.ajax({
                url:'http://localhost/coffebrands/admin_pages/Users_table/ajax_delete/' +id ,

                type: "POST",
                success: function(data)
                {
                    //if success reload ajax table
                    $('#Add_user').modal('hide');
                    reload_table();
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error deleting data');
                }
            });
        }
    }
</script><!--/user script-->





