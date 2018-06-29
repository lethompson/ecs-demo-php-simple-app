<!DOCTYPE html>
<html>
<head>
    <h1>MY FIRST GOOGLE MAP PLOT</h1>
<?php
echo '<script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>'; 
echo '<script type="text/javascript">
  function initialize() {
    var position = new google.maps.LatLng(38.9696, -77.3861);
    var myOptions = {
      zoom: 10,
      center: position,
      mapTypeId: google.maps.MapTypeId.ROADMAP
    };
    var map = new google.maps.Map(
        document.getElementById("map_canvas"),
        myOptions);
 
    var marker = new google.maps.Marker({
        position: position,
        map: map,
        title:"This is the place."
    });  
 
    var contentString = "xyz content string";
    var infowindow = new google.maps.InfoWindow({
        content: contentString
    });
 
    google.maps.event.addListener(marker,"click", function() {
        infowindow.open(map,marker);
    });
 
  }
 google.maps.event.addDomListener(window, "load", initialize);
</script>';
?>
</head>
<body>
  <div id="map_canvas" style="width:500px; height:500px"></div>
</body>
</html>
