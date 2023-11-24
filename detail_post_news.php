<?php
$id = $_GET['id'];
include_once "retrieve_data_id.php";
$obj = json_decode($data);
$name = "";
$description = "";
$create_at = "";

foreach ($obj->results as $item) {
  $name .= $item->name;
  $description .= $item->description;
  $create_at .= $item->created_at;
}

$title = $name;
?>

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
<!-- start banner Area -->
<?php include "header.php" ?>
<!-- End banner Area -->
<!-- Start about-info Area -->
<section class="about-info-area section-gap">
  <div class="container" style="padding-top: 120px;">
    <h1><b><?php echo $item->name ?></b></h1>
    <span><i>Đã đăng: <?php echo date('d-M-Y', strtotime($item->created_at)) ?> </i></span>
    <br><br>
    <br>
    <?php echo $item->description ?>
  </div>
</section>
<!-- End about-info Area -->
<?php include "footer.php"; ?>