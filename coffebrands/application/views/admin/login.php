<!-- Modal -->
<div id="admin_modal" class="modal fade" role="dialog">

    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">

            <div class="modal-header" style="background-color: #2f2f2f ; color: whitesmoke">

                <button type="button" class="close" data-dismiss="modal" style="color:whitesmoke">&times;</button>

                <h4 class="modal-title" id="LoginHedar">Admin Login</h4>

                <div class="col-sm-12 text-center" id="ADMS" style="font-size: 2em">

                    <!--print error login here -->
                </div>

            </div>

            <div class="modal-body">


                <!--admin login form -->

                <form action="http://localhost/coffebrands/admin_pages/Admin_login/validation_admin.html" method="post" id="AdminForm" data-toggle="validator">




                    <div class="input-group">

                        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>


                        <!--input email  -->

                        <input type="email" name="email" class="form-control">



                    </div>

<br/>

                    <div class="input-group">


                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>


                        <!--inpu password -->

                        <input type="password" name="password" class="form-control">


                    </div>



            </div>

            <div class="modal-footer" style="background-color: #2f2f2f">

                <!--login button -->

                <button type="submit" class="btn btn-default">Login</button>


                <!--close button -->

                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>


            </div>

            </form>

        </div>


    </div>

</div>