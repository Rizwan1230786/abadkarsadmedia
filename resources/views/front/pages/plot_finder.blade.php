<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<style type="text/css">
        #map {
          height: 400px;
        }
    </style>
</head>
@extends('front.layout')
@section('body')
<body>
@section('main')
    <div class="container mt-5">
        <h3>Plot Finder</h3>
        <div id="map"></div>
    </div>
  
    <script type="text/javascript">
        function initMap() {
          // const myLatLng = auto;
          const map = new google.maps.Map(document.getElementById("map"), {
            zoom: 5,
            center: auto,
          });
  
          new google.maps.Marker({
            position: myLatLng,
            map,
            title: "Plot finder",
          });
        }
  
        window.initMap = initMap;
    </script>
  
    <script type="text/javascript"
        src="https://maps.google.com/maps/api/js?key={{ env('GOOGLE_MAP_KEY') }}&callback=initMap" ></script>
  @endsection
</body>
@endsection
</html>