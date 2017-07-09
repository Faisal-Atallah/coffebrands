

<link rel="stylesheet" href="http://localhost/coffebrands/assest/css/admin/tables.css">



<!--print maintenance table -->



<?php foreach ($problems as $problem ) :

    $id = $problem['user_id'];

    $name = $problem['name'];

    $phone = $problem['phone'];

    $description = $problem['description'];

     $image=$problem['image'];

    ?>


    <table class="table table-hover" id="mainenaceTable">

        <thead>

        <tr style="color: #2f2f2f">

            <th>User id</th>

            <th>User name</th>

            <th>Phone</th>

            <th>Description</th>

            <th>Image</th>
        </tr>

        </thead>

        <tbody>

        <tr>

            <td><?php echo $id?></td>

            <td><?php echo $name?></td>

            <td> <?php echo $phone?></td>

            <td> <?php echo $description?></td>

            <td>


                <!---======== Display image =====---->

               <img src="<?php echo base_url().'/'.$problem['image']?> "class="img-responsive" style="height:30%">



            </td>





        </tr>


        </tbody>

    </table>

<?php endforeach ; ?>





