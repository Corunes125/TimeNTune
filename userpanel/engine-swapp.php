<?php
include "links/header.php";
?>
<main id="main">

  <!-- Hero Section - Home Page -->
  <section id="hero" class="hero">

    <img src="assets/img/engine-swap-bg.jpg" alt="" data-aos="fade-in">

    <div class="container">
      <div class="row">
        <div class="col-lg-10">
          <h2 data-aos="fade-up" data-aos-delay="100">Engine Swap</h2>
          <p data-aos="fade-up" data-aos-delay="200">Upgrade Your Roar, Swap for More Power.</p>
        </div>
      </div>
    </div>

  </section><!-- End Hero Section -->


  <!-- Engine Swap Section - Home Page -->
  <section id="portfolio" class="portfolio">

    <!--  Section Title -->
    <div class="container section-title" data-aos="fade-up">
      <h2>Engine Swap</h2>
      <p>Upgrade Your Drive with Engine Swapping Excellence</p>
    </div><!-- End Section Title -->

    <div class="container">

      <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

        <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">

          <!-- php script start -->
          <?php
          include("../dashboard/auth/config.php");
          if (isset($_GET['engineswapp'])) {
            $category = $_GET['engineswapp'];

            //  Fetch data from the database
            $query = "SELECT * FROM services WHERE category = '$category'";
            $result = mysqli_query($con, $query);

            if (mysqli_num_rows($result) > 0) {
              while ($row = mysqli_fetch_assoc($result)) {
          ?>
                <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
                  <img src="../dashboard/<?php echo $row['img'] ?>" class="img-fluid" alt="image">
                  <div class="portfolio-info">
                    <h4><?php echo $row['service_name'] ?></h4>
                    <p><?php echo $row['description'] ?></p>
                    <!-- <a href="assets/img/masonry-portfolio/masonry-portfolio-1.jpg" title="App 1"
        data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a> -->
                    <?php echo '<a  href="services-detail/engine-swap-details.php?id=' . $row['id'] . '" title="More Details" class="details-link">
        <i class="bi bi-link-45deg"></i></a>'
                    ?>
                  </div>
                </div>
          <?php
              }
            }
          }
          ?>

          <!-- php script end -->

        </div><!-- End Container -->

      </div>

    </div>

  </section><!-- End Section -->


</main>

<!-- footer start-->

<?php
include "links/footer.php";
?>
<!-- footer end -->