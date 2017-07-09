


<!---     Maintenance page ----->

<div id="mainte" class="modal fade" role="dialog">



    <div class="modal-dialog">

         <!-- modal content-->

        <div class="modal-content">


            <!--modal header -->

            <div class="modal-header">


                 <!--- close button --->

                <button type="button" class="close" data-dismiss="modal">&times;</button>

                 <!-- maintenace center header   -->

                <h4 class="modal-title">Maintenance center</h4>
                 <!--Print validation error -->
                <h1 class="text-center"  style="color: whitesmoke" id="message">

                    <?php echo validation_errors(); ?>

                </h1>

            </div>

            <!-- modal body -->

            <div class="modal-body">

                <!-- --------/////// form   /////----------------->

                <form method="post" action="<?php echo base_url().'illy/Maintenance/save.html'?>" id="upload_file" enctype="multipart/form-data" data-toggle="validator">

           <!----------//// name input  ///////------------->

                <div class="form-group">

                    <label for="name">Name :</label>

      <input type="text" name="fname" class="form-control"  id="name" value="<?php echo $this->session->userdata('name');?>">


                </div>

    <!--------/////////// email input ////////-------->

                <div class="form-group">

                    <label>Email :</label>

                    <!---email input field --->

                    <input type="email" name="email" class="form-control"   id="email" value="<?php echo $this->session->userdata('email');?>">


                </div>


  <!------------////////  phone  //////----------------------------------->

                <div class="form-group">

                    <label for="phone">phone :</label>

                    <!-- phone input feild --->

                    <input type="text" name="phone" class="form-control"   id="phone" value="<?php echo $this->session->userdata('phone');?>">


                </div>

                    <!---------- /////// image  ////--------------->

                    <div class="form-group">

                        <label for="image">Image :</label>

                         <!-- image input feild --->

                        <input type="file" name="image" class="form-control" id="image">


                    </div>


         <!-------//////   Description    /////---------->

                    <div class="form-group">

                       <label for="desc">Description :</label>

                           <!--- description input feild--->

                        <textarea class="form-control" name="description" id="desc"></textarea>


                    </div>


            </div>

<!----///////// Submit ///////------>

            <!-- modal footer -->

            <div class="modal-footer">

                <!--== SUBMIT BUTTON ==-->
                <button type="submit" class="btn btn-default">Submit</button>

                <!--== CLOSE BUTTON ===--->
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

                </form>

            </div>

        </div>

    </div>


</div>
