<?php
include '../Config/connection.php';
include '../Homedash/sidebarnav.php';

//$date= date("d/m/Y");
//echo 'sessions name'. $name;
//echo 'today date'. $date;
/* if (isset($_SESSION['name']))
      echo $_SESSION['name'];
      echo "<br>".$_SESSION['username'];
 echo "<br>".$_SESSION['firstname'];
 $name=$_SESSION['username'];

*/
 ?>




  <!-- sidebar-wrapper  -->
  <link rel="stylesheet" href="style_1.css">
  <main class="page-content" style="background-color: #F9F7F6;">
    <div class="container-fluid" style=" text-align: center;">
      <h2>Assistance</h2>
      <hr>
      <div class="row">
            <div class="col"></div>

        <div class="col-8" style="padding: auto; text-align: center">
            <h3>Nearby Centres Locations</h3>
            <div id="map"></div>
            
        </div>
              <div class="col"></div>

        <div class="col-8">
            <div id="map" ></div>
          
          
           </div>
      </div>
      
      <hr>
      
            
      </div>
    </div>

  </main>
   <script>
      // This example requires the Places library. Include the libraries=places
      // parameter when you first load the API. For example:
      // <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">

      var map;
var service;
var infowindow;
var pos;
var request;
var place;

function initMap() {
  map = new google.maps.Map(document.getElementById('map'), {
    center: {
      lat: -34.397,
      lng: 150.644
    },
    zoom: 6
  });
  infoWindow = new google.maps.InfoWindow;

  getLocation();
  // getNearByPlaces();
  // callback();
}

function getLocation() {
  // Try HTML5 geolocation.
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(function(position) {
      pos = {
        lat: position.coords.latitude,
        lng: position.coords.longitude
      };
      console.log("getLocation:" + pos.lat + "," + pos.lng);
      var marker = new google.maps.Marker({
        position: pos,
        map: map,
        icon: "http://maps.google.com/mapfiles/ms/micons/blue.png"
      })
      infoWindow.setPosition(pos);
      infoWindow.setContent('Your Location.');
      infoWindow.open(map);
      map.setCenter(pos);
      getNearByPlaces(pos);
    }, function() {
      console.log("calling handleLocationError(true)");
      handleLocationError(true, infoWindow, map.getCenter());
    });
  } else {
    // Browser doesn't support Geolocation
    console.log("calling handleLocationError(false)")
    handleLocationError(false, infoWindow, map.getCenter());
  }

  infowindow = new google.maps.InfoWindow();
}

function getNearByPlaces(pos) {
  console.log("getNearByPlaces:" + pos.lat + "," + pos.lng);
  request = {
    location: pos,
    radius: '500',
    query: 'mental health'
  };

  service = new google.maps.places.PlacesService(map);
  service.textSearch(request, callback);
}

function callback(results, status) {
  if (status == google.maps.places.PlacesServiceStatus.OK) {
    console.log("callback received " + results.length + " results");
    var bounds = new google.maps.LatLngBounds();
    for (var i = 0; i < results.length; i++) {
      console.log(JSON.stringify(results[i]));
      place = results[i];
      var mark = createMarker(results[i]);
      bounds.extend(mark.getPosition());
    }
    map.fitBounds(bounds);
  } else console.log("callback.status=" + status);
}

function handleLocationError(browserHasGeolocation, infoWindow, pos) {
  infoWindow.setPosition(pos);
  infoWindow.setContent(browserHasGeolocation ?
    'Error: The Geolocation service failed.' :
    'Error: Your browser doesn\'t support geolocation.');
  infoWindow.open(map);
}

function createMarker(place) {
  var marker = new google.maps.Marker({
    map: map,
    position: place.geometry.location,
    icon: "http://maps.google.com/mapfiles/ms/micons/red.png"
  });

  google.maps.event.addListener(marker, 'click', function() {
    infowindow.setContent(place.name);
    infowindow.open(map, this);
  });
  return marker;
}

    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDwJAMgpl9nRwC-b62014DPAyHXE1KxSrM&libraries=places&callback=initMap" async defer></script>

       
  <!-- page-content" -->

  <!-- page-content" -->
</div>
<!-- page-wrapper -->
<!-- partial -->


<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/esm/popper.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/js/bootstrap.js'></script><script  src="../JS/dashscript.js"></script>

</body>
</html>
