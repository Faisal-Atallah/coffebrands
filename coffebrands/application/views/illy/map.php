<!------------------- ========================================== ilyy map  ==================================================------------------->

<!--  css link -->


<!-- Modal -->

<div id="map_modal" class="modal fade" role="dialog">

    <div class="modal-dialog modal-lg">

        <!-- Modal content-->
        <div class="modal-content">

            <!--- modal header --->

            <div class="modal-header">

                <!-- close button --->

                <button type="button" class="close" data-dismiss="modal" style="color: white">&times;</button>

                <!-- modal title -->

                <h4 class="modal-title">

                    Our location

                    <br/>

                </h4>

            </div>

            <!-- modal body --->

            <div class="modal-body">


                <h4><img src="http://localhost/coffebrands/assest/image/placeholder (4).png">SWEIFIEH · AMMAN</h4>

                <div class="row">

                      <!--print map --->

                    <div id="map" class="col-sm-6"></div>


                </div>


            </div>

            <!--modal footer -->

            <div class="modal-footer">
                <!--close button -->
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

            </div>

        </div>

    </div>
</div>






<!--===MAP SCRIPT ==-->

<script>




    function initMap() {

                  // latitude and   longitude
        var uluru = {lat:31.958968, lng:35.86354};
        var map = new google.maps.Map(document.getElementById('map'), {
            zoom:14,
            center: uluru

        });
        var marker = new google.maps.Marker({
            position: uluru,
            map: map
        });
    }










</script>
<script async defer  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBmdpbAtpLJU6jBY-js38MUpTECqG5PBIQ&callback=initMap"></script>


<!--= END MAP SCRIPT=== -->