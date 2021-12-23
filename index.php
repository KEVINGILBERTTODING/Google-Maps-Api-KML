<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Gmap using KML</title>

  <script type="text/javascript">
    function initMap() {
      const map = new google.maps.Map(document.getElementById("map"), {
        zoom: 11,
        center: {
          lat: -7.7768,
          lng: 112.1313
        },
      });

      const kecamatanLayer = new google.maps.KmlLayer({
        url: "https://raw.githubusercontent.com/KEVINGILBERTTODING/KML-FILE/master/kecamatan_kediri.kml",
        map: map,
      });

    }
  </script>
  <style type="text/css">
    #map {
      height: 60%;
      width: 60%;
    }

    /* Optional: Makes the sample page fill the window. */
    html,
    body {
      height: 100%;
      margin: 0;
      padding: 0;
    }
  </style>
</head>

<body>
  <h2>Akses KML Dengan Google Map API</h2>
  <hr>
  <div id="map"></div>

  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCns0o8yq9Q6Z3sskLNzV6hfaPilFI5twU&callback=initMap" async></script>

</body>

</html>