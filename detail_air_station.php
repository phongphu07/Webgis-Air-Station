
<?php
$id = $_GET['id'];
include_once "retrieve_id_air_station.php";
$obj = json_decode($data);
$id = "";
$name= "";
$address = "";
$details = "";
$latitude = "";
$longitude = "";
$img = "";
foreach ($obj->results as $item) {
  $id .= $item->id;
  $name .= $item->name;
  $address .= $item->address;
  $details .= $item->details;
  $latitude .= $item->latitude;
  $longitude .= $item->longitude;
  $img .= $item->img;
}

$title = "Detail dan Lokasi : " . $name;

?>
<script src="https://maps.googleapis.com/maps/api/js?sensor=false&callback=initMap"></script>

<script>
  function initialize() {
    var myLatlng = new google.maps.LatLng(<?php echo $latitude ?>, <?php echo $longitude ?>);
    var mapOptions = {
      zoom: 13,
      center: myLatlng
    };

    var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

    var contentString = '<div id="content">' +
      '<div id="siteNotice">' +
      '</div>' +
      '<h4 id="firstHeading" class="firstHeading"><?php echo $name ?></h4>' +
      '<div id="bodyContent">' +
      '<p><?php echo $address ?></p>' +
      '</div>' +
      '<div>' +
      '<img style="width:350px; height="auto"" src="<?php echo $img ?> ">'
      '</div>'+
      '</div>';

    var infowindow = new google.maps.InfoWindow({
      content: contentString
    });

    var marker = new google.maps.Marker({
      position: myLatlng,
      map: map,
      title: 'Maps Info',
      icon: 'assets/img/markermap.png'
    });
    google.maps.event.addListener(marker, 'click', function() {
      infowindow.open(map, marker);
    });
  }

  google.maps.event.addDomListener(window, 'load', initialize);
</script>

<?php include "header.php" ?>
<!-- End banner Area -->
<!-- Start about-info Area -->
<section class="about-info-area section-gap">
  <div class="container" style="padding-top: 120px;">
    <div class="row">

      <div class="col-md-7" data-aos="fade-up" data-aos-delay="200">
        <div class="panel panel-info panel-dashboard">
          <div class="panel-heading centered">
            <h2 class="panel-title"><strong>Travel Information</strong></h4>
          </div>
          <div class="panel-body">
            <table class="table">
              <tr>
                <!-- <th>Item</th> -->
                <th>Detail</th>
              </tr>
              <tr>
                <td>Name</td>
                <td>
                  <h5><?php echo $name ?></h5>
                </td>
              </tr>
              <tr>
                <td>Address</td>
                <td>
                  <h5><?php echo $address ?></h5>
                </td>
              </tr>
              <tr>
                <td>Description</td>
                <td>
                  <h5><?php echo $details ?></h5>
                </td>
              </tr>
            </table>
          </div>
        </div>
      </div>

      <div class="col-md-5" data-aos="zoom-in">
        <div class="panel panel-info panel-dashboard">
          <div class="panel-heading centered">
            <h2 class="panel-title"><strong>Location</strong></h4>
          </div>
          <div class="panel-body">
            <div id="map-canvas" style="width:100%;height:380px;"></div>
          </div>
        </div>
      </div>
</section>
<!-- End about-info Area -->
<?php include "footer.php"; ?>