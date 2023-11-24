<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>GPS TRAVEL</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <link href="assets/img/logo1.png" rel="icon">
  <link href="assets/img/logo.png" rel="apple-touch-icon">

  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <link href="assets/css/style.css" rel="stylesheet">

  <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
</head>
<style>
#hero {
  width: 100%;
  height: 80vh;
  background: url("./assets/img/bg1.jpg") center center;
  background-size: cover;
  position: relative;
}
</style>
<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container">
      <div class="header-container d-flex align-items-center">
        <div class="logo mr-auto">
          <h1 class="text-light"><a href="index.php"><span>SIG</span></a></h1>
        </div>

        <nav class="nav-menu d-none d-lg-block">
          <ul>
            <li class="active"><a href="index.php">Home</a></li>
            <li><a href="#about">About Us</a></li>
            <li><a href="#portfolio">Air Station Data</a></li>
            <li><a href="./data_post_news.php">News</a></li>
            <li><a href="http://localhost:8080/webgis-air-station/webgis/2BanDo.php">Map</a></li>
            <?php
            if (isset($_SESSION['role_as'])) {
              if ($_SESSION['role_as'] == 0) {
              } else {
                echo '<li><a href="./admin/index.php">Admin Control</a></li>';
              }
            } else {
              echo '<li><a href="./admin/index.php">Admin Control</a></li>';
            }
            ?>

            <li class="get-started"><a href="logout.php">Logout</a></li>
          </ul>
        </nav><!-- .nav-menu -->
      </div><!-- End Header Container -->
    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container text-center position-relative" data-aos="fade-in" data-aos-delay="100">
      <?php
      if (isset($_SESSION['role_as'])) {
        if ($_SESSION['role_as'] == 1) {
          echo '<h1>WELCOME ADMIN TO</h1>';
        } else {
          echo '<h1>WELCOME USER TO</h1>';
        }
      }
      ?>
      <h1>SISTEM INFORMASI GEOGRAFIS</h1>
      <a href="#about" class="btn-get-started scrollto">Start</a>

    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients">
      <div class="container">

        <div class="row">

          <div class="col-md-12 col-lg-3 d-flex align-items-center" data-aos="zoom-in" data-aos-delay="100">
            <img src="assets/img/clients/client-1.png" class="img-fluid" alt="" style="opacity: 0;">
          </div>

        </div>

      </div>
    </section><!-- End Clients Section -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row content">
          <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
            <h2>BANYUMAS TOURISM OBJECT SIG</h2>
            <h3>This information system is a geographic mapping application for tourist attractions in the Banyumas area. This application contains information and locations of tourist attractions in Banyumas.</h3>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-left" data-aos-delay="200">
            <p>
              This high school geographic mapping application contains information and locations from high schools and vocational schools in Surabaya. The mapping is taken from Google Maps location data and data from each school's website. This application contains a number of information regarding :
            </p>
            <ul>
              <li><i class="ri-check-double-line"></i> State High School</li>
              <li><i class="ri-check-double-line"></i> Public vocational secondary schools</li>
            </ul>
            <p class="font-italic">
              Information may change at any time
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
      <div class="container">

        <div class="row counters">

          <div class="col-lg-3 col-6 text-center" style="opacity: 0;">
            <span data-toggle="counter-up">232</span>
            <p>Clients</p>
          </div>

          <?php
          include_once "countsma.php";
          $obj = json_decode($data);
          $sman = "";
          foreach ($obj->results as $item) {
            $sman .= $item->sma;
          }
          ?>
          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up"><?php echo $sman; ?></span>
            <p>Senior High School</p>
          </div>
          <?php
          include_once "countsmk.php";
          $obj2 = json_decode($data);
          $smkn = "";
          foreach ($obj2->results as $item2) {
            $smkn .= $item2->smk;
          }
          ?>
          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up"><?php echo $smkn; ?></span>
            <p>Vocational School</p>
          </div>

          <div class="col-lg-3 col-6 text-center" style="opacity: 0;">
            <span data-toggle="counter-up">15</span>
            <p>Hard Workers</p>
          </div>

        </div>

      </div>
    </section><!-- End Counts Section -->

    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container">

        <div class="text-center" data-aos="zoom-in">
          <h3>GEOGRAPHICAL INFORMATION SYSTEM OF BANYUMAS TOURISM OBJECTS</h3>
          <p> Details of tourist attractions in Banyumas</p>
          <a class="cta-btn" href="#portfolio">View Details</a>
        </div>

      </div>
    </section><!-- End Cta Section -->



    <!-- ======= Contact Section ======= -->
    <section id="portfolio" class="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-3" data-aos="fade-right">
            <div class="section-title">
              <h2>TOURISM data</h2>
              <p>This page contains information on Tourist Attractions in Banyumas Regency </p>
            </div>
          </div>

          <div class="col-lg-9" data-aos="fade-up" data-aos-delay="100">

            <div class="col-md-12">
              <div class="panel panel-info panel-dashboard">
                <div class="panel-heading centered">

                </div>
                <div class="panel-body">
                  <table class="table table-bordered table-striped table-admin">
                    <thead>
                      <tr>
                        <th width="5%">ID</th>
                        <th width="30%">Name</th>
                        <th width="35%">Address</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      include "connect.php";
                      $Q = mysqli_query($connect, "SELECT * FROM air_station");

                      if ($Q) {
                        $posts = array();
                        if (mysqli_num_rows($Q)) {
                          while ($post = mysqli_fetch_assoc($Q)) {
                            $posts[] = $post;
                          }
                          $no = 1; 
                          foreach ($posts as $item) { 
                      ?>
                            <tr>
                              <td><?php echo $no; ?></td>
                              <td><?php echo $item['name']; ?></td>
                              <td><?php echo $item['address']; ?></td>
                              <td class="ctr">
                                <div class="btn-group">
                                  <a href="detail_air_station.php?id=<?php echo $item['id']; ?>" rel="tooltip" data-original-title="Lihat File" data-placement="top" class="btn btn-primary">
                                    <i class="fa fa-map-marker"></i> Details and Location</a>&nbsp;
                                </div>
                              </td>
                            </tr>
                      <?php
                            $no++;
                          }
                        } else {
                          echo "Data is missing.";
                        }
                      }
                      ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      </div>

      </div>


  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>SAY</h3>
            <p>
              Jl. Nguyễn, Potatoes<br>
              Time House<br>
              USA <br><br>
              <strong>Phone:</strong> +84 337 384 584<br>
              <strong>Email:</strong> admin@gmail.com<br>
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Link bantuan</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Maps</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Data</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Public High School</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">State Vocational High School</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Follow the latest info</h4>
            <p>Subscribe email</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>

        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="mr-md-auto text-center text-md-left">
        <div class="copyright">
          &copy; Copyright <strong><span>SIG SMA & SMK</span></strong>.
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/bootstrap-hover-dropdown.js"></script>
  <script src="js/script.js"></script>
  <script src="js/jquery.dataTables.min.js"></script>
  <script src="js/datatable-bootstrap.js"></script>

</body>

</html>