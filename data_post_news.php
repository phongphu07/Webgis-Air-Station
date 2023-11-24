<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>GPS TRAVEL</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/logo1.png" rel="icon">
  <link href="assets/img/logo.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">


</head>

<body>
<section id="hero" class="d-flex align-items-center">
    <div class="container text-center position-relative" data-aos="fade-in" data-aos-delay="200">
      <h1>NEWS - AIR POLLUTION INFORMATION GLOBALLY</h1>
    </div>
  </section><!-- End Hero -->
  <?php include "header.php" ?>

  <!-- Start about-info Area -->
  <section class="about-info-area section-gap">
  <div class="container" data-aos="fade-up" data-aos-delay="100">
    <div class="row">
      <div class="col-lg-8">
        <?php
        $data = file_get_contents('http://localhost:8080/webgis-air-station/retrieve_data.php');
        if (json_decode($data, true)) {
          $obj = json_decode($data);
          foreach ($obj->results as $item) {
        ?>
            <a href="detail_post_news.php?id=<?php echo $item->id ?>" class="card card-body shadow-sm mb-4" style="text-decoration: none; border: 1px solid #ccc; border-radius: 8px; padding: 20px; transition: all 0.3s ease; color: #333; display: block; margin-bottom: 20px;">
              <h5 class="card-title" style="font-size: 1.25rem; margin-bottom: 10px;"><b><?php echo $item->name ?></b></h5>
              <div class="card-footer" style="margin-top: 15px; font-size: 0.875rem; color: #888;">
              <span><i>Đã đăng ngày: <?php echo date('d-M-Y', strtotime($item->created_at)); ?> </i> lúc: <?php echo date('H:i:s', strtotime($item->created_at)); ?> </span>
              </div>
            </a>
        <?php
          }
        } else {
          echo "data is missing.";
        } ?>
      </div>
      <div class="col-lg-4">
      <?php
        $data = file_get_contents('http://localhost:8080/webgis-air-station/retrieve_data.php');
        if (json_decode($data, true)) {
          $obj = json_decode($data);
          foreach ($obj->results as $item) {
        ?>
            <a href="detail_post_news.php?id=<?php echo $item->id ?>" class="card card-body shadow-sm mb-4" style="text-decoration: none; border: 1px solid #ccc; border-radius: 8px; padding: 20px; transition: all 0.3s ease; color: #333; display: block; margin-bottom: 20px;">
              <h5 class="card-title" style="font-size: 1.25rem; margin-bottom: 10px;"><b><?php echo $item->name ?></b></h5>
              <div class="card-footer" style="margin-top: 15px; font-size: 0.875rem; color: #888;">
              <span><i>Đã đăng ngày: <?php echo date('d-M-Y', strtotime($item->created_at)); ?> </i> lúc: <?php echo date('H:i:s', strtotime($item->created_at)); ?> </span>
              </div>
            </a>
        <?php
          }
        } else {
          echo "data is missing.";
        } ?>
      </div>
    </div>
  </div>
</section>
  <!-- End about-info Area -->
  <?php include "footer.php"; ?>

</body>

</html>