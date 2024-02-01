<?php
include "links/header.php";
?>

<main id="main">

  <!-- Portfolio Details Page Title & Breadcrumbs -->
  <div data-aos="fade" class="page-title">
    <div class="heading">
      <div class="container">
        <div class="row d-flex justify-content-center text-center">
          <div class="col-lg-8">
            <h1>Engine Swapp</h1>
            <p class="mb-0">"Transform your ride into a symphony of power, precision, and perfection through the art of engine swaps, meticulous tuning, and the exquisite detailing that turns every drive into a masterpiece of automotive excellence."</p>
          </div>
        </div>
      </div>
    </div>
    <nav class="breadcrumbs">
      <div class="container">
        <ol>
          <li><a href="index.php">Home</a></li>
          <li><a href="index.php#services">Services</a></li>
          <li class="current">Engine Swapp</li>

        </ol>
      </div>
    </nav>
  </div><!-- End Page Title -->


  <!-- Portfolio-details Section - Portfolio Details Page -->
  <section id="portfolio-details" class="portfolio-details">

    <?php
    include("../../dashboard/auth/config.php");
    if (isset($_GET['id'])) {
      $id = $_GET['id'];

      //  Fetch data from the database
      $query = "SELECT * FROM services WHERE id = '$id'";
      $result = mysqli_query($con, $query);

      if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
    ?>

          <div class="container" data-aos="fade-up">
            <div class="portfolio-details-slider swiper">
              <div class="swiper-wrapper align-items-center">
                <div class="swiper-slide">
                  <img src="../../dashboard/<?php echo $row['img'] ?>" alt="img">
                </div>
              </div>
            </div>
            <div class="row justify-content-between gy-4 mt-4">

              <div class="col-lg-8" data-aos="fade-up">
                <div class="portfolio-description">
                  <h2><?php echo $row['service_name'] ?></h2>
                  <p>
                    <?php echo $row['description'] ?>
                  </p>
                </div>
              </div>

              <div class="col-lg-3" data-aos="fade-up" data-aos-delay="100">
                <div class="portfolio-info">
                  <h3>Project information</h3>
                  <ul>
                    <li><strong>Category</strong><?php echo $row['category'] ?></li>
                    <li><strong>Price</strong>RS:<?php echo $row['price'] ?></li>
                    <!-- <li><strong>Project date</strong> 01 March, 2020</li>
                <li><strong>Project URL</strong> <a href="#">www.example.com</a></li> -->
                    <li>
                      <?php
                      echo '<a href="../check-out/check-out.php?id=' . $row['id'] . '" class="btn-visit align-self-start">Take service</a>'
                      ?>
                    </li>
                  </ul>
                </div>
              </div>

            </div>

          </div>

    <?php
        }
      }
    }
    ?>

  </section><!-- End Portfolio-details Section -->

</main>


<?php
include "links/footer.php";
?>