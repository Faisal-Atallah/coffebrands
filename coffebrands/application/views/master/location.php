


<!-- map css link   --->
<link rel="stylesheet" href="http://localhost/coffebrands/assest/css/map.css">



<div class="container-fluid">

<h3>Our locatio:</h3>

    <h4><img src="http://localhost/coffebrands/assest/image/placeholder (4).png"> AL-Bunayyat-Amman 00962</h4>


    <!-- print map here-->
    <div id="map" class="col-sm-12"></div>





</div>


<script>

    function initMap() {
        //           latitude and longitude
        var uluru = {lat: 31.8935, lng: 35.873129};

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














</body>
</html>