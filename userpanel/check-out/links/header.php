<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Home - TimeNTune</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../assets/img/tntfavicon.png" rel="icon">
  <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="../assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../assets/css/main.css" rel="stylesheet">
  <!--  -->

</head>

<body class="portfolio-details-page" data-bs-spy="scroll" data-bs-target="#navmenu">

  <!-- ======= Header ======= -->
  <header id="header" class="header sticky-top d-flex align-items-center">
    <div class="container-fluid d-flex align-items-center justify-content-between">

      <a href="index.php" class="logo d-flex align-items-center me-auto me-xl-0">
        <h1>TimeNTune</h1>
        <span>.</span>
      </a>

      <!-- Nav Menu -->
      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="../index.php#hero" class="active">Home</a></li>
          <li><a href="../index.php#about">About</a></li>
          <li class="dropdown has-dropdown"><a href="../index.php#services"><span>Services</span> <i class="bi bi-chevron-down"></i></a>
            <ul class="dd-box-shadow">

              <!-- php script start -->
              <!-- engine-swap section start -->
              <?php
              // Include your database configuration file
              include("../../dashboard/auth/config.php");

              // Assuming your table name is 'services'
              $query = "SELECT * FROM service_categories WHERE id = 1";
              $result = mysqli_query($con, $query);


              if (!$result) {
                die("Query failed: " . mysqli_error($con));
              }

              if ($result) {
                while ($row = mysqli_fetch_assoc($result)) {

                  echo   '<li><a href="../engine-swapp.php?engineswapp=' . $row['service_name'] . '">Engine Swap</a></li>';
                }
              }
              ?>
              <!-- engine-swap section start -->

              <!-- tune section start -->
              <?php
              $query = "SELECT * FROM service_categories WHERE id = 2";
              $result = mysqli_query($con, $query);

              if (!$result) {
                die("Query failed: " . mysqli_error($con));
              }

              if ($result) {
                while ($row = mysqli_fetch_assoc($result)) {

                  echo   '<li><a href="../tune.php?tune=' . $row['service_name'] . '">Tune</a></li>';
                }
              }
              ?>
              <!-- tune section end -->

              <!-- detailing section start -->
              <?php
              $query = "SELECT * FROM service_categories WHERE id = 3";
              $result = mysqli_query($con, $query);

              if (!$result) {
                die("Query failed: " . mysqli_error($con));
              }

              if ($result) {
                while ($row = mysqli_fetch_assoc($result)) {

                  echo   '<li><a href="../detailing.php?detailing=' . $row['service_name'] . '">Detailing</a></li>';
                }
              }
              ?>
              <!-- detailing section end -->

              <!-- php script End -->

            </ul>
          </li>
          <li><a href="../index.php#team">Team</a></li>
          <li><a href="../index.php#contact">Contact</a></li>
          <li><a href="../index.php#faq">FAQ</a></li>
        </ul>


        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav><!-- End Nav Menu -->

      <?php
      session_start();
      if (isset($_SESSION['email'])) {
        echo '<a class="btn-getstarted" href="../logout.php">Logout</a>';
      } else {
        echo '<a class="btn-getstarted" href="../sigin-up.php">Sign Up/Login</a>';
        // echo '<a class="btn-getstarted" href="sigin-up.php">Login</a>';
      }
      ?>
    </div>
  </header><!-- End Header -->