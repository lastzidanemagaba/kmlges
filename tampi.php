<!DOCTYPE html>
<html>
<?php $doi = $_GET['id']; ?>
  <head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <style>
      html, body {
        height: 370px;
        padding: 0;
        margin: 0;
        }
      #map {
       height: 360px;
       width: 300px;
       overflow: hidden;
       float: left;
       border: thin solid #333;
       }
      #capture {
       height: 360px;
       width: 480px;
       overflow: hidden;
       float: left;
       background-color: #ECECFB;
       border: thin solid #333;
       border-left: none;
       }
    </style>
  </head>
  <body>
    <div id="map"></div>
   
    <script>
      var map;
      var htmlString="<?php echo $doi; ?>";
      var src = 'https://zidanejmagaba.com/Whatsapp/' + htmlString + '.kml';
      if(htmlString == 1)
      {
        alert("Warna Biru");
      }
      else if(htmlString == 2)
      {
        alert("Warna Hitam");
      }
      else if(htmlString == 3)
      {
        alert("Warna Kuning");
      }
       
      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          center: new google.maps.LatLng(-7.00514, 110.43812),
          zoom: 2,
          mapTypeId: 'terrain'
        });

        var kmlLayer = new google.maps.KmlLayer(src, {
          suppressInfoWindows: true,
          preserveViewport: false,
          map: map
        });
        kmlLayer.addListener('click', function(event) {
          var content = event.featureData.infoWindowHtml;
          var testimonial = document.getElementById('capture');
          testimonial.innerHTML = content;
        });
      }
    </script>
    <script async
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBdotTM7-M-e7C_tVEBNxkOqnsVEGyoa90&callback=initMap">
    </script>
  </body>
</html>