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

      // Menampilkan KML Kecamatan
      const kecamatanLayer = new google.maps.KmlLayer({
        url: "https://raw.githubusercontent.com/KEVINGILBERTTODING/KML-FILE/master/kecamatan_kediri.kml",
        map: map,
      });

      // Menampilkan KML Peternakan
      const PeternakanLayer = new google.maps.KmlLayer({
        url: "https://raw.githubusercontent.com/KEVINGILBERTTODING/Latihan_Google-Maps-Api-KML/master/assets/peternakan.kml",
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

  <script src="" async></script>

</body>

</html>