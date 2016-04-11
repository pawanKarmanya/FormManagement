$(document).ready(function () {
var geocoder = new google.maps.Geocoder();


    
geocoder.geocode( { 'address': address}, function(results, status) {


  if (status == google.maps.GeocoderStatus.OK) {
    var latitude = results[0].geometry.location.lat();
    var longitude = results[0].geometry.location.lng();
    
  }
  
  
 
var myCenter=new google.maps.LatLng(latitude,longitude);

function initialize()
{
var mapProp = {
  center:myCenter,
  zoom:8,
  mapTypeId:google.maps.MapTypeId.ROADMAP
  };

var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);

var marker=new google.maps.Marker({
  position:myCenter,
  });

marker.setMap(map);
}

google.maps.event.addDomListener(window, 'load', initialize);

  
});





});