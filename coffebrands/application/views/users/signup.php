

       <!--css links --->

    <link rel="stylesheet" href="http://localhost/coffebrands/assest/css/signup_and_signin.css">




<body class="login">




<!-- Modal -->
<div id="signup_modal" class="modal fade" role="dialog">

    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">

            <div class="modal-header">
                <!--close button -->
                <button type="button" class="close" data-dismiss="modal">&times;</button>

                <h4 class="modal-title">

                    <img src="http://localhost/coffebrands/assest/image/add-people-interface-symbol-of-black-person-close-up-with-plus-sign-in-small-circle.png">Create account
                </h4>

            </div>

            <div class="modal-body">

                <div class="row" id="message">

              <!--- Print error here  --->


                </div>


                <!--=========================================================== FORM =========================================================================----->


                <form  id="signup_form" method="post" action="http://localhost/coffebrands/users_pages/Register_system/create_account.html">


                        <!----========================================================= FIRST NAME  ============================================================================--->

                        <div class="row">

                            <div class="col-sm-6">



                                <div class="input-group">

                                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>

                                    <!-- first name field-->

                                    <input  type="text" class="form-control" name="fname" placeholder="First name">

                                </div>


                            </div>

                        </div>

                        <br/>




                        <!--==================================================== last name =============================================----------->
                        <div class="row">

                            <div class="col-sm-6">

                                <div class="input-group">

                                    <span class="input-group-addon"><i><img src="http://localhost/coffebrands/assest/image/family-group-of-three (1).png"/></i></span>

                                    <!-- last name field-->
                                    <input  type="text" class="form-control" name="lname" placeholder="Last name">

                                </div>

                            </div>

                        </div>
                        <br/>


                        <!--==================================================- Email =====================================================--->

                        <div class="row">

                            <div class="col-sm-6">

                                <div class="input-group">


                                    <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>

                                    <!--email field --->

                                    <input   type="text" class="form-control" name="email" placeholder="Email">

                                </div>

                            </div>

                        </div>
                        <!---------===================================== password ==============================================================-->
                        <br/>

                        <div class="row">

                            <div class="col-sm-6">

                                <div class="input-group">

                                    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>

                                    <!--- input password field----->

                                    <input  id="password" type="password" class="form-control" name="password" placeholder="Password" >

                                </div>

                            </div>

                        </div>

                        <br/>

                        <!---------------=============== confirm pasword  -===================================================================----->
                        <div class="row">

                            <div class="col-sm-6">

                                <div class="input-group">

                                    <span class="input-group-addon"><i class="glyphicon glyphicon-ok"></i></span>

                                    <!-- input confirm password field -->

                                    <input  type="password" class="form-control" name="Cpassword" placeholder="Confirm password">


                                </div>


                            </div>

                        </div>


                        <br/>

                        <!-------======================================- date  -================================================----->
                        <div class="row">

                            <div class="col-sm-6">

                                <div class="input-group">

                                    <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>


                                    <!--input date field ---->

                                    <input type="date" name="date" class="form-control" >

                                </div>

                            </div>

                        </div>

                        <br/>

                        <!---------================================= phone number ==================================================================-->

                        <div class="row">

                            <div class="col-sm-6">

                                <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-phone"></i></span>

                                    <!-- input mobile field---->

                                    <input type="tel"   name="phonenum" placeholder="Mobile Number" class="form-control">

                                </div>

                            </div>

                        </div>


                        <br/>


                        <!------------- ======================= country   ===============================================================------>

                        <div class="row">

                            <div class="col-sm-6">

                                <div class="input-group">

                                    <span class="input-group-addon"><img src="<?php echo base_url('assest/image/placeholder (3).png')?>"></span>

                                     <!---Select country field ----->

                                    <select  name="country" class="form-control">

                                                  <option>Amman</option>

                                        <option>Irbid</option>

                                        <option>Al Salt</option>

                                        <option>Al Ramtha</option>

                                        <option>Madaba</option>

                                        <option>Mafraq</option>

                                        <option>Jerash</option>

                                        <option>Ma'an</option>

                                        <option>Tafilah</option>

                                        <option>Karak</option>

                                        <option>Ajloun</option>

                                        <option>Aqaba</option>

                                    </select>


                                </div>

                            </div>

                        </div>

                        <br/>
                        <!-----------======================================= submit button =============================================---->
            </div>

            <div class="modal-footer">

                <!--------- Submit button  ------------->

                <button type="submit" class="btn btn-default" name="regisSubmit">Submit</button>

                 <!---------   Close button          ----------------->

                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

                </form>

            </div>


        </div>

        </div>

    </div>





