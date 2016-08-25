<script src="https://maps.googleapis.com/maps/api/js"></script>
<script>
  function initialize() {
    var mapCanvas = document.getElementById('map-canvas');
    var mapOptions = {
      center: new google.maps.LatLng(33.385324, -117.236837),
      zoom: 13,
      mapTypeId: google.maps.MapTypeId.ROADMAP
    }
    var map = new google.maps.Map(mapCanvas,mapOptions);
    map.set('styles', [
        {
            "stylers": [
                { "hue": "#6796BF" },
                { "saturation": 44 }
            ]
        }
    ]);
    var marker = new google.maps.Marker({
        position: map.getCenter(),
        animation: google.maps.Animation.DROP,
        map: map,
        icon: 'http://aegisit.net/lemans/images/map-pointer-small-stroke.png'
    });
  }
  google.maps.event.addDomListener(window, 'load', initialize);
</script>
<div class="pagetitle"><h1>Our Contact Information</h1></div>
<div class="main">
    <h2>We'd love to talk classic cars with you...</h2>
    <div id="map-canvas"></div>
    <div class="clear"></div>
    <div class="row">
        <div class="col-md-6"><h3>Our offices are located at:</h3><p><img src="<?=$baseurl?>images/logo151.jpg" style="max-height:50px;" class="imageleft top">501 Industrial Way<br>Fallbrook, CA 92028<br></p></div>
        <div class="col-md-6"><h3>Contact us by phone:</h3><p>Sales Department: <strong>760.723.8900</strong><br>8am - 5pm PST</p></div>
    </div>
</div>
<div class="clear"></div>
<div class="pagefooter"><img class="strip" src="<?=$baseurl?>images/strip4.jpg"></div>