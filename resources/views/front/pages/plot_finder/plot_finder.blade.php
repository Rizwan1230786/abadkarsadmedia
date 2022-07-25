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
            src="https://maps.google.com/maps/api/js?key={{ env('GOOGLE_MAP_KEY') }}&callback=initMap"></script>
        <div id="video-popup-container">
            <div id="video-popup-close" class="btn1">X</div>
            <div id="video-popup-iframe-container">
                <iframe id="video-popup-iframe" allow="autoplay" frameborder="0" width="420" height="315"
                    src="https://www.youtube.com/embed/wIEXAcKBG34">
                </iframe>
            </div>
        </div>
        <p id="demo"></p>
    @endsection
    <style>
        #video-popup-container {
            position: fixed;
            z-index: 996;
            width: 25%;
            right: 2%;
            top: 15%;
            background-color: #fff;
        }

        #video-popup-close {
            cursor: pointer;
            position: absolute;
            right: -10px;
            top: -10px;
            z-index: 998;
            width: 25px;
            height: 25px;
            border-radius: 25px;
            text-align: center;
            font-size: 12px;
            background-color: #000;
            line-height: 25px;
            color: #fff;
        }

        #video-popup-close:hover {
            color: #de0023;
        }

        #video-popup-iframe-container {
            position: absolute;
            z-index: 997;
            width: 100%;
            padding-bottom: 56.25%;
            border: 2px solid #000;
            border-radius: 2px;
            background-color: #000;
        }

        #video-popup-iframe {
            z-index: 999;
            position: absolute;
            width: 100%;
            height: 100%;
            left: 0;
            top: 0;
            background-color: #000;
        }
    </style>
    <script>
        $(document).ready(function() {
            $("#video-popup-container").hide();
        });
        $(document).ready(function() {
            setTimeout(function() {
                $("#video-popup-container").show();
            }, 5000);
        });
    </script>
    <script>
        $(document).ready(function() {
            $(".btn1").click(function() {
                $("#video-popup-container").hide();
                $("#video-popup-close").hide();
                $("#video-popup-iframe-container").hide();
            });
        });
    </script>
</body>
@endsection

</html>
