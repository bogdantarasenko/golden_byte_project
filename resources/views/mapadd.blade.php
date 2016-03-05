
@extends('app')

@section('content')

<?
$userid = Session::get('userid');

?>

<!DOCTYPE html>
<html>
  <head>
    <title>Simple Map</title>
    <meta name="viewport" content="initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <meta charset="utf-8">
    <style>
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
      #map {
        height: 350px;
        width:500px;
        margin:auto;
        margin-bottom: 10px;
      }
      h1{
        margin:auto;
      }
    </style>
  </head>
  <body>
    <div class="container">
      <div class="col-md-10 col-md-offset-1">
      <h1>Ваше месторасположение</h1>
        <div id="map"></div>
        <form class="form-horizontal" role="form" method="POST" action="/addmap">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">

            <div class="form-group">
              <label class="col-md-4 control-label">Город</label>
              <div class="col-md-6">
                <input type="text" class="form-control input-sm" name="city" id="city">
              </div>
            </div>
            
    

            <div class="form-group">
              <label class="col-md-4 control-label">Адресс</label>
              <div class="col-md-6">
                <input type="text" class="form-control" id="adress" name="adress" >
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-4 control-label">Lat</label>
              <div class="col-md-6">
                <input type="text" class="form-control input-sm" name="lat" id="lat" >
              </div>
            </div>
             
             <div class="form-group">
              <label class="col-md-4 control-label">Lng</label>
              <div class="col-md-6">
                <input type="text" class="form-control input-sm" name="lng" id="lng" >
              </div>
            </div>           
                      

            <div class="form-group">
              <div class="col-md-6 col-md-offset-4">
                <button type="submit" class="btn btn-primary">
                  Добавить
                </button>
              </div>
            </div>
          </form>
      </div>
  
    </div>
    <script>

var map;
function initMap() {
 /* map = new google.maps.Map(document.getElementById('map'), {
    center: {lat: -34.397, lng: 150.644},
    zoom: 8
  });
*/

  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(success);
  } else {
    alert("Geo Location is not supported on your current browser!");
  }
 
  function success(position) {
    var lat = position.coords.latitude;
    var long = position.coords.longitude;
 
    var myLatlng = new google.maps.LatLng(lat, long);
 
    var myOptions = {
      center: myLatlng,
      zoom: 12,
      mapTypeId: google.maps.MapTypeId.ROADMAP
    };
    var map = new google.maps.Map(document.getElementById("map"), myOptions);
 
    var marker = new google.maps.Marker({
      position: myLatlng,
      title:"lat: " + lat + " long: " + long
    });
 
    marker.setMap(map);

    var pos_lat = marker.getPosition().lat();
    var pos_lng = marker.getPosition().lng();

    $('#lat').val(pos_lat);
    $('#lng').val(pos_lng);

    var latlng = new google.maps.LatLng(pos_lat,pos_lng);

    var geocoder = new google.maps.Geocoder();
    geocoder.geocode({ 'latLng': latlng }, function (results, status) {
                if (status == google.maps.GeocoderStatus.OK) {
                    if (results[1]) {
                        $('#city').val(results[5].formatted_address);
                        $('#adress').val(results[0].formatted_address);
                    }
                }
           
        });
    //var geodata = https://maps.googleapis.com/maps/api/geocode/json?latlng=40.714224,-73.961452&key=YOUR_API_KEY


    console.log(marker);

  }

}

    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDhqtLUOjG_wpnFe1B47xJ6eTzIDk-W1VA&callback=initMap"
        async defer></script>
  </body>
</html>

@endsection

