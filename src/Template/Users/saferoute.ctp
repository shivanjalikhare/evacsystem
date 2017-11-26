
<?php echo $this->element('sidemenus\volunteernavbar'); ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDFJUZ4vcXLIbHNR1exzevOweYJaoR3JB8&callback=initMap">
    </script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script>
      function calculateRoute(from, to) {
        // Center initialized to Naples, Italy
        var myOptions = {
          zoom: 10,
          center: new google.maps.LatLng(40.84, 14.25),
          mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        // Draw the map
        var mapObject = new google.maps.Map(document.getElementById("map"), myOptions);

        var directionsService = new google.maps.DirectionsService();
        var directionsRequest = {
          origin: from,
          destination: to,
          travelMode: google.maps.DirectionsTravelMode.DRIVING,
          unitSystem: google.maps.UnitSystem.METRIC
        };
        directionsService.route(
          directionsRequest,
          function(response, status)
          {
            if (status == google.maps.DirectionsStatus.OK)
            {
              new google.maps.DirectionsRenderer({
                map: mapObject,
                directions: response
              });
            }
            else
              $("#error").append("Unable to retrieve your route<br />");
          }
        );
      }

      $(document).ready(function() {
        // If the browser supports the Geolocation API
        if (typeof navigator.geolocation == "undefined") {
          $("#error").text("Your browser doesn't support the Geolocation API");
          return;
        }

        $("#from-link, #to-link").click(function(event) {
          event.preventDefault();
          var addressId = this.id.substring(0, this.id.indexOf("-"));

          navigator.geolocation.getCurrentPosition(function(position) {
            var geocoder = new google.maps.Geocoder();
            geocoder.geocode({
              "location": new google.maps.LatLng(position.coords.latitude, position.coords.longitude)
            },
            function(results, status) {
              if (status == google.maps.GeocoderStatus.OK)
                $("#" + addressId).val(results[0].formatted_address);
              else
                $("#error").append("Unable to retrieve your address<br />");
            });
          },
          function(positionError){
            $("#error").append("Error: " + positionError.message + "<br />");
          },
          {
            enableHighAccuracy: true,
            timeout: 10 * 1000 // 10 seconds
          });
        });

        $("#calculate-route").submit(function(event) {
          event.preventDefault();
          calculateRoute($("#from").val(), $("#to").val());
        });
      });
    </script>
    <style type="text/css">
      #map {
        width: 500px;
        height: 400px;
        margin-top: 10px;
      }
    </style>
  </head>
  <body>
    <div class="container marginbot-50">
      <div class="home-section color-dark">
        <h3 class="h-bold">Safe Route Details</h3>
              <form id="calculate-route" name="calculate-route" action="#" method="get" >
                <div class="form-group">
                  <label for="from">From</label>
                </div>
                <div class="form-group">
                  <input type="text" id="from" name="from" required="required" placeholder="From address" size="30" /> 
                  <a id="from-link" href="#" class="fa fa-map-marker">Get my position</a>
                </div>
                <div class="form-group">
                  <label for="to">To</label>
                </div>
                <div class="form-group">
                  <input type="text" id="to" name="to" required="required" placeholder="Another address" size="30" />
                </div>              
                <input type="submit" class="btn btn-lg btn-primary" />
                <input type="reset" class="btn btn-lg btn-danger" />
              </form>
              <div id="map"></div>
              <p id="error"></p>
      </div>
    </div>
  </body>
</html>