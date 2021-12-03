<!DOCTYPE html >
  <head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
    <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
    <title></title>
    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
       height: 360px;
       width: 300px;
       overflow: hidden;
       float: left;
       border: thin solid #333;
       }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
    </style>
  </head>

<html>
  <body>
    <div id="map"></div>

    <script>
      var customLabel = {
        restaurant: {
          label: 'R'
        },
        bar: {
          label: 'B'
        }
      };

        function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
          center: new google.maps.LatLng(-7.005145, 110.438126),
          zoom: 12
        });
        var infoWindow = new google.maps.InfoWindow;

          
          
        }


      function doNothing() {}
    </script>
  <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBdotTM7-M-e7C_tVEBNxkOqnsVEGyoa90&callback=initMap"></script>
  </body>
</html>