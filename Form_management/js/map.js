$(document).ready(function () {
    geocoder.geocode({'address': address}, function (results, status) {


                if (status == google.maps.GeocoderStatus.OK) {
                    var latitude = results[0].geometry.location.lat();
                    var longitude = results[0].geometry.location.lng();

                }



                var myCenter = new google.maps.LatLng(latitude, longitude);


function initialize()
{
var mapProp = {
  center: myCenter,
  zoom:8,
  mapTypeId: google.maps.MapTypeId.ROADMAP
  };

var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);

var marker = new google.maps.Marker({
  position: myCenter,
  title:'Click to zoom'
  });

marker.setMap(map);

// Zoom to 9 when clicking on marker
google.maps.event.addListener(marker,'click',function() {
  map.setZoom(9);
  map.setCenter(marker.getPosition());
  });
$("#MapModal").on("shown.bs.modal", function () {

                    google.maps.event.trigger(googleMap, "resize");
                    //map.setCenter(google.maps.marker.getPosition());
                    return map.setCenter(myCenter);
                    // Set here center map coordinates
                });

}
google.maps.event.addDomListener(window, 'load', initialize);
    });
    
});



