
<!--  css links ---->

<link rel="stylesheet" href="http://localhost/coffebrands/assest/css/signup_and_signin.css">

<!-- Modal -->
<div id="login_modal" class="modal fade" role="dialog">

    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">

            <!-- modal header -->

            <div class="modal-header">

                <!-- close button -->

                <button type="button" class="close" data-dismiss="modal">&times;</button>

                <!---Modal title --->

                <h4 class="modal-title">Login</h4>

            </div>


            <!-- modal body -->

            <div class="modal-body">


                <h1 class="text-center"  id="messageLogin">

                    <!--print error here -->

                </h1>

                <!--=================================      Login form    ==============================================-->

                <form id="login_form" action="http://localhost/coffebrands/users_pages/Register_system/login.html">


                    <!-========================================= Email input ========================================-->

                    <div class="row">

                        <div class="col-sm-6">

                            <div class="input-group">

                                <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>

                                <!-- input email field---->

                                <input  type="email" class="form-control" name="email" placeholder="Email">


                            </div>
                        </div>
                    </div>


                    <br/>


                    <!--====================================== password  ============================================-->

                    <div class="row">


                        <div class="col-sm-6">

                            <div class="input-group">

                                <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>

                                 <!--Input passwor field --->

                                <input  type="password" class="form-control" name="password" placeholder="Password">

                            </div>

                        </div>

                    </div>


                    <br/>

                    <!--====================================== Remeber me button ===================================-->
                    <div class="row">

                        <div class="col-sm-6">

                            <div class="input-group">



                                <div class="checkbox">
                                     <!-- remeber me-->
                                    <label style="color: whitesmoke"><input type="checkbox"> Remember me</label>

                                </div>

                            </div>

                        </div>
                    </div>

                    <!---==================================== submit Button ================================================-->



            </div>

            <div class="modal-footer">

                <!--Submit button -->

                <button type="submit" class="btn btn-default">Submit</button>

                <!-------- Close button ---------->

                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

                </form>

            </div>

        </div>

    </div>

</div>
