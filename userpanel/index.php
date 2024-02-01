<?php
include "links/header.php";

?>

<main id="main">

  <!-- Hero Section - Home Page -->
  <section id="hero" class="hero">

    <img src="assets/img/home-bg.jpg" alt="" data-aos="fade-in">

    <div class="container">
      <div class="row">
        <div class="col-lg-10">
          <h2 data-aos="fade-up" data-aos-delay="100">TimeNTune</h2>
          <p data-aos="fade-up" data-aos-delay="200">Crafting Your Desires, Not Imposing Our Ideas.</p>
        </div>
      </div>
    </div>

  </section><!-- End Hero Section -->


  <!-- About Section - Home Page -->

  <section id="about" class="about">

    <div class="container" data-aos="fade-up" data-aos-delay="100">
      <div class="row align-items-xl-center gy-5">

        <div class="col-xl-5 content">
          <h3>About Us</h3>
          <h2>Welcome to Time N Tune</h2>
          <p>Established in 2014, we have quickly grown to become one of the most trusted companies in the industry.
            Our growth has allowed us to stock an ever-increasing range of performance engines. Holding engines in
            stock allows us to offer an efficient off the shelf’ service, minimising
            your vehicle’s downtime.
          </p>
          <p>
            Here at Time N Tune, we have extensive experience in Engine Swapp, Dyno Tune, Detailing because We don't
            want to push our ideas on our customers, we simply want to make what our customer want. </p>
        </div>

        <div class="col-xl-7">
          <div class="row gy-4 icon-boxes">

            <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
              <div class="icon-box">
                <i class="bi bi-buildings"></i>
                <h3>Eius provident</h3>
                <p>Magni repellendus vel ullam hic officia accusantium ipsa dolor omnis dolor voluptatem</p>
              </div>
            </div> <!-- End Icon Box -->

            <div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
              <div class="icon-box">
                <i class="bi bi-clipboard-pulse"></i>
                <h3>Rerum aperiam</h3>
                <p>Autem saepe animi et aut aspernatur culpa facere. Rerum saepe rerum voluptates quia</p>
              </div>
            </div> <!-- End Icon Box -->

            <div class="col-md-6" data-aos="fade-up" data-aos-delay="400">
              <div class="icon-box">
                <i class="bi bi-command"></i>
                <h3>Veniam omnis</h3>
                <p>Omnis perferendis molestias culpa sed. Recusandae quas possimus. Quod consequatur corrupti</p>
              </div>
            </div> <!-- End Icon Box -->

            <div class="col-md-6" data-aos="fade-up" data-aos-delay="500">
              <div class="icon-box">
                <i class="bi bi-graph-up-arrow"></i>
                <h3>Our future </h3>
                <p>Sint et dolor voluptas minus possimus nostrum. Reiciendis commodi eligendi omnis quideme lorenda
                </p>
              </div>
            </div> <!-- End Icon Box -->

          </div>
        </div>

      </div>
    </div>

  </section><!-- End About Section -->


  <?php
  include "../dashboard/auth/config.php";

  // SQL query to get the total count of table rows where gender is 'Male'
  $sql = "SELECT COUNT(*) as total FROM checkout_details ";
  $result = $con->query($sql);
  ?>

  <!-- Stats Section - Home Page -->
  <section id="stats" class="stats">

    <img src="assets/img/baner-bg.jpg" alt="" data-aos="fade-in">

    <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">

      <div class="row gy-4">

        <div class="col-lg-3 col-md-6">
          <div class="stats-item text-center w-100 h-100">
            <?php
            if ($result->num_rows > 0) {
              // Output data of each row
              while ($row = $result->fetch_assoc()) {

                echo  '<span data-purecounter-start="0" data-purecounter-end="'
                  . $row["total"] .
                  '" data-purecounter-duration="1" class="purecounter"></span>';
              }
            } else {
              echo "0 results";
            }
            ?>
            <p>Clients</p>
          </div>
        </div><!-- End Stats Item -->
        <?php
        $sql = "SELECT COUNT(*) as total FROM custumer_sign_up ";
        $result = $con->query($sql);
        ?>
        <div class="col-lg-3 col-md-6">
          <div class="stats-item text-center w-100 h-100">
            <?php
            if ($result->num_rows > 0) {
              // Output data of each row
              while ($row = $result->fetch_assoc()) {
                echo '<span data-purecounter-start="0" data-purecounter-end="'
                  . $row["total"] .
                  '" data-purecounter-duration="1" class="purecounter"></span>';
              }
            } else {
              echo "0 results";
            }
            ?>
            <p>Users</p>
          </div>
        </div><!-- End Stats Item -->
        <?php
        $sql = "SELECT COUNT(*) as total FROM services ";
        $result = $con->query($sql);
        ?>
        <div class="col-lg-3 col-md-6">
          <div class="stats-item text-center w-100 h-100">

            <?php
            if ($result->num_rows > 0) {
              // Output data of each row
              while ($row = $result->fetch_assoc()) {
                echo '<span data-purecounter-start="0" data-purecounter-end="'
                  . $row["total"] .
                  '" data-purecounter-duration="1" class="purecounter"></span>';
              }
            } else {
              echo "0 results";
            }
            ?>
            <p>Services</p>
          </div>
        </div><!-- End Stats Item -->

        <?php
        $sql = "SELECT COUNT(*) as total FROM service_categories ";
        $result = $con->query($sql);
        ?>
        <div class="col-lg-3 col-md-6">
          <div class="stats-item text-center w-100 h-100">
            <?php
            if ($result->num_rows > 0) {
              // Output data of each row
              while ($row = $result->fetch_assoc()) {
                echo '<span data-purecounter-start="0" data-purecounter-end="'
                  . $row["total"] .
                  '" data-purecounter-duration="1" class="purecounter"></span>';
              }
            } else {
              echo "0 results";
            }
            ?>
            <p>Categories</p>
          </div>
        </div><!-- End Stats Item -->

      </div>

    </div>

  </section><!-- End Stats Section -->

  <!-- Services Section - Home Page -->
  <section id="services" class="services">

    <!--  Section Title -->
    <div class="container section-title" data-aos="fade-up">
      <h2>Services</h2>
      <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
    </div><!-- End Section Title -->

    <div class="container">

      <div class="row gy-4">

        <div class="col-lg-6 " data-aos="fade-up" data-aos-delay="100">
          <div class="service-item d-flex">
            <div class="icon flex-shrink-0"></div>
            <div>
              <!-- php script start -->
              <!-- engine-swap section start -->
              <?php
              // Include your database configuration file
              include "../dashboard/auth/config.php";

              // Assuming your table name is 'services'
              $query = "SELECT * FROM service_categories WHERE id = 1";
              $result = mysqli_query($con, $query);


              if (!$result) {
                die("Query failed: " . mysqli_error($con));
              }

              if ($result) {
                while ($row = mysqli_fetch_assoc($result)) {

                  echo  '<h4 class="title"><a href="engine-swapp.php?engineswapp=' . $row['service_name'] . '" class="stretched-link">Engine Swapping</a></h4>';
                }
              }
              ?>
              <!-- engine-swap section start -->
              <p class="description">Engine swaps can potentially improve: Older auto models performance, since engine
                replacements help them better adhere to modern performance standards.</p>
            </div>
          </div>
        </div>
        <!-- End Service Item -->

        <div class="col-lg-6 " data-aos="fade-up" data-aos-delay="200">
          <div class="service-item d-flex">
            <div class="icon flex-shrink-0"></i></div>
            <div>
              <!-- php script start -->
              <!-- engine-swap section start -->
              <?php
              // Include your database configuration file
              include("../dashboard/auth/config.php");

              // Assuming your table name is 'services'
              $query = "SELECT * FROM service_categories WHERE id = 1";
              $result = mysqli_query($con, $query);


              if (!$result) {
                die("Query failed: " . mysqli_error($con));
              }

              if ($result) {
                while ($row = mysqli_fetch_assoc($result)) {

                  echo  '<h4 class="title"><a href="tune.php?tune=' . $row['service_name'] . '" class="stretched-link">Tune</a></h4>';
                }
              }
              ?>
              <!-- engine-swap section start -->
              <p class="description">Car engine tuning can provide many benefits, including increased horsepower and
                torque, improved fuel efficiency, better throttle response and acceleration, enhanced engine sound,
                and increased engine lifespan.</p>
            </div>
          </div>
        </div><!-- End Service Item -->

        <div class="col-lg-6 " data-aos="fade-up" data-aos-delay="300">
          <div class="service-item d-flex">
            <div class="icon flex-shrink-0"></div>
            <div>
              <!-- php script start -->
              <!-- engine-swap section start -->
              <?php
              // Include your database configuration file
              include("../dashboard/auth/config.php");

              // Assuming your table name is 'services'
              $query = "SELECT * FROM service_categories WHERE id = 3";
              $result = mysqli_query($con, $query);


              if (!$result) {
                die("Query failed: " . mysqli_error($con));
              }

              if ($result) {
                while ($row = mysqli_fetch_assoc($result)) {

                  echo  '<h4 class="title"><a href="detailing.php?detailing=' . $row['service_name'] . '" class="stretched-link">Detailing</a></h4>';
                }
              }
              ?>
              <!-- engine-swap section start -->
              <p class="description">Deailing service able to prevent rusting and damage to the paint, stop plastics
                from fading, and minimize wear and tear on the interior.</p>
            </div>
          </div>
        </div>
        <!-- End Service Item -->

      </div>

    </div>

  </section><!-- End Services Section -->

  <!-- gallary Section - Home Page -->
  <section id="portfolio" class="portfolio">

    <!--  Section Title -->
    <div class="container section-title" data-aos="fade-up">
      <h2>Gallary</h2>
      <p>Where every detail tells a story. </p>
      <p>Welcome to our gallery, where automotive dreams come to life in pixels and paint.</p>
    </div><!-- End Section Title -->

    <div class="container">

      <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

        <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
          <li data-filter="*" class="filter-active">All</li>


          <!-- Engine swapp section -->
          <?php
          // Include your database configuration file
          include "../dashboard/auth/config.php";
          // Assuming your table name is 'services'
          $query = "SELECT * FROM service_categories WHERE id = 1";
          $result = mysqli_query($con, $query);


          if (!$result) {
            die("Query failed: " . mysqli_error($con));
          }

          if ($result) {
            while ($row = mysqli_fetch_assoc($result)) {
          ?>
              <li data-filter=".filter-app"><?php echo $row['service_name'] ?></li>

          <?php
            }
          }
          ?>
          <!-- Engine swapp section end -->

          <!-- tune section -->
          <?php
          // Assuming your table name is 'services'
          $query = "SELECT * FROM service_categories WHERE id = 2";
          $result = mysqli_query($con, $query);


          if (!$result) {
            die("Query failed: " . mysqli_error($con));
          }

          if ($result) {
            while ($row = mysqli_fetch_assoc($result)) {
          ?>
              <li data-filter=".filter-product"><?php echo $row['service_name'] ?></li>
          <?php
            }
          }
          ?>
          <!-- tune section end -->

          <!-- detailing section -->
          <?php
          // Assuming your table name is 'services'
          $query = "SELECT * FROM service_categories WHERE id = 3";
          $result = mysqli_query($con, $query);


          if (!$result) {
            die("Query failed: " . mysqli_error($con));
          }

          if ($result) {
            while ($row = mysqli_fetch_assoc($result)) {
          ?>

              <li data-filter=".filter-branding"><?php echo $row['service_name'] ?></li>
        </ul><!-- End gallary Filters -->

        <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">
      <?php
            }
          }
      ?>
      <!-- detaling section end -->

      <!--  --><!--  --><!--  --><!-- fetching data from database  in Gallary --><!--  --><!--  --><!--  -->


      <!--  Galley-engine-swapp end  -->
      <?php
      // include database
      include "../dashboard/auth/config.php";

      //  Fetch data from the database
      $query = "SELECT * FROM services WHERE category = 'Engine Swap'";

      $result = mysqli_query($con, $query);

      if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
      ?>
          <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
            <img src="../dashboard/<?php echo $row['img'] ?>" class="img-fluid" alt="image">
            <div class="portfolio-info">
              <h4><?php echo $row['service_name'] ?></h4>
              <a href="../dashboard/<?php echo $row['img'] ?>" title="<?php echo $row['service_name'] ?>" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>


            </div>
          </div>
      <?php
        }
      }
      ?>
      <!-- Galley-engine-swapp end -->

      <!-- Galley-tune start -->
      <?php
      //  Fetch data from the database
      $query = "SELECT * FROM services WHERE category = 'tune'";

      $result = mysqli_query($con, $query);

      if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
      ?>
          <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
            <img src="../dashboard/<?php echo $row['img'] ?>" class="img-fluid" alt="image">
            <div class="portfolio-info">
              <h4><?php echo $row['service_name'] ?></h4>
              <a href="../dashboard/<?php echo $row['img'] ?>" title="<?php echo $row['service_name'] ?>" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>


            </div>
          </div>
      <?php
        }
      }
      ?>
      <!-- Galley-tune end -->

      <!-- Galley-detaling start -->
      <?php
      //  Fetch data from the database
      $query = "SELECT * FROM services WHERE category = 'Detailing'";

      $result = mysqli_query($con, $query);

      if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
      ?>
          <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
            <img src="../dashboard/<?php echo $row['img'] ?>" class="img-fluid" alt="image">
            <div class="portfolio-info">
              <h4><?php echo $row['service_name'] ?></h4>
              <a href="../dashboard/<?php echo $row['img'] ?>" title="<?php echo $row['service_name'] ?>" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>


            </div>
          </div>
      <?php
        }
      }
      ?>
      <!-- php script end -->

        </div><!-- End Portfolio Container -->

      </div>

    </div>

  </section><!-- End Portfolio Section -->

  <!-- Team Section - Home Page -->
  <section id="team" class="team">

    <!--  Section Title -->
    <div class="container section-title" data-aos="fade-up">
      <h2>Team</h2>
      <p>“Alone We Can Do So Little; Together We Can Do So Much.”</p>
      <p>Helen Keller</p>
    </div><!-- End Section Title -->

    <div class="container">

      <div class="row gy-5">

        <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="100">
          <div class="member-img">
            <img src="assets/img/team/team-1.jpg" class="img-fluid" alt="">
            <div class="social">
              <a href="#"><i class="bi bi-twitter"></i></a>
              <a href="#"><i class="bi bi-facebook"></i></a>
              <a href="#"><i class="bi bi-instagram"></i></a>
              <a href="#"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>
          <div class="member-info text-center">
            <h4>Walter White</h4>
            <span>Chief Executive Officer</span>
            <p>Aliquam iure quaerat voluptatem praesentium possimus unde laudantium vel dolorum distinctio dire flow
            </p>
          </div>
        </div><!-- End Team Member -->

        <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="200">
          <div class="member-img">
            <img src="assets/img/team/team-2.jpg" class="img-fluid" alt="">
            <div class="social">
              <a href="#"><i class="bi bi-twitter"></i></a>
              <a href="#"><i class="bi bi-facebook"></i></a>
              <a href="#"><i class="bi bi-instagram"></i></a>
              <a href="#"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>
          <div class="member-info text-center">
            <h4>Sarah Jhonson</h4>
            <span>Product Manager</span>
            <p>Labore ipsam sit consequatur exercitationem rerum laboriosam laudantium aut quod dolores exercitationem
              ut</p>
          </div>
        </div><!-- End Team Member -->

        <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="300">
          <div class="member-img">
            <img src="assets/img/team/team-3.jpg" class="img-fluid" alt="">
            <div class="social">
              <a href="#"><i class="bi bi-twitter"></i></a>
              <a href="#"><i class="bi bi-facebook"></i></a>
              <a href="#"><i class="bi bi-instagram"></i></a>
              <a href="#"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>
          <div class="member-info text-center">
            <h4>William Anderson</h4>
            <span>CTO</span>
            <p>Illum minima ea autem doloremque ipsum quidem quas aspernatur modi ut praesentium vel tque sed facilis
              at qui</p>
          </div>
        </div><!-- End Team Member -->

        <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="400">
          <div class="member-img">
            <img src="assets/img/team/team-4.jpg" class="img-fluid" alt="">
            <div class="social">
              <a href="#"><i class="bi bi-twitter"></i></a>
              <a href="#"><i class="bi bi-facebook"></i></a>
              <a href="#"><i class="bi bi-instagram"></i></a>
              <a href="#"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>
          <div class="member-info text-center">
            <h4>Amanda Jepson</h4>
            <span>Accountant</span>
            <p>Magni voluptatem accusamus assumenda cum nisi aut qui dolorem voluptate sed et veniam quasi quam
              consectetur</p>
          </div>
        </div><!-- End Team Member -->

        <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="500">
          <div class="member-img">
            <img src="assets/img/team/team-5.jpg" class="img-fluid" alt="">
            <div class="social">
              <a href="#"><i class="bi bi-twitter"></i></a>
              <a href="#"><i class="bi bi-facebook"></i></a>
              <a href="#"><i class="bi bi-instagram"></i></a>
              <a href="#"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>
          <div class="member-info text-center">
            <h4>Brian Doe</h4>
            <span>Marketing</span>
            <p>Qui consequuntur quos accusamus magnam quo est molestiae eius laboriosam sunt doloribus quia impedit
              laborum velit</p>
          </div>
        </div><!-- End Team Member -->

        <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="600">
          <div class="member-img">
            <img src="assets/img/team/team-6.jpg" class="img-fluid" alt="">
            <div class="social">
              <a href="#"><i class="bi bi-twitter"></i></a>
              <a href="#"><i class="bi bi-facebook"></i></a>
              <a href="#"><i class="bi bi-instagram"></i></a>
              <a href="#"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>
          <div class="member-info text-center">
            <h4>Josepha Palas</h4>
            <span>Operation</span>
            <p>Sint sint eveniet explicabo amet consequatur nesciunt error enim rerum earum et omnis fugit eligendi
              cupiditate vel</p>
          </div>
        </div><!-- End Team Member -->

      </div>

    </div>

  </section><!-- End Team Section -->

  <!-- Call-to-action Section - Home Page -->
  <section id="call-to-action" class="call-to-action">

    <img src="assets/img/engine-swap-bg.jpg" alt="">

    <div class="container">
      <div class="row justify-content-center" data-aos="zoom-in" data-aos-delay="100">
        <div class="col-xl-10">
          <div class="text-center">
            <h3>Our Vision</h3>
            <p>We don't want to push our ideas on our customers, we simply want to make what our customer want</p>
          </div>
        </div>
      </div>
    </div>

  </section><!-- End Call-to-action Section -->


  <!-- Recent-posts Section - Home Page -->

  <!-- Contact Section - Home Page -->
  <section id="contact" class="contact">

    <!--  Section Title -->
    <div class="container section-title">
      <h2>Contact</h2>
      <p>We can't solve your problem if you don't tell us about it!</p>
    </div><!-- End Section Title -->

    <div class="container">

      <div class="row gy-4">

        <div class="col-lg-6">

          <div class="row gy-4">
            <div class="col-md-6">
              <div class="info-item">
                <i class="bi bi-geo-alt"></i>
                <h3>Address</h3>
                <p>A108 Adam Street</p>
                <p>New York, NY 535022</p>
              </div>
            </div><!-- End Info Item -->

            <div class="col-md-6">
              <div class="info-item">
                <i class="bi bi-telephone"></i>
                <h3>Call Us</h3>
                <p>+1 5589 55488 55</p>
                <p>+1 6678 254445 41</p>
              </div>
            </div><!-- End Info Item -->

            <div class="col-md-6">
              <div class="info-item">
                <i class="bi bi-envelope"></i>
                <h3>Email Us</h3>
                <p>info@example.com</p>
                <p>contact@example.com</p>
              </div>
            </div><!-- End Info Item -->

            <div class="col-md-6">
              <div class="info-item">
                <i class="bi bi-clock"></i>
                <h3>Open Hours</h3>
                <p>Monday - Friday</p>
                <p>9:00AM - 05:00PM</p>
              </div>
            </div><!-- End Info Item -->

          </div>

        </div>



        <div class="col-lg-6">
          <form id="myForm" action="" method="post" class="php-email-form">
            <div class="row gy-4">

              <div class="col-md-12">
                <input type="email" name="email" class="form-control" placeholder="Your Email" required>
              </div>

              <div class="col-md-12">
                <input type="text" name="subject" class="form-control" placeholder="Subject" required>
              </div>

              <div class="col-md-12">
                <textarea class="form-control" name="message" rows="6" placeholder="Message" required></textarea>
              </div>

              <style>
                .contact .php-email-form button[type=submit],
                .contact .php-email-form button[type=button] {
                  background: var(--primary-color);
                  color: var(--contrast-color);
                  border: 0;
                  padding: 10px 30px;
                  transition: 0.4s;
                  border-radius: 4px;
                }

                .contact .php-email-form button[type=submit],
                .contact .php-email-form button[type=button] :hover {
                  background: rgba(var(--primary-color-rgb), 0.8);
                }
              </style>


              <div class="col-md-12" text-center>

                <?php
                if (isset($_SESSION['email'])) {
                ?>
                  <button type="submit" name="submit">Send Message</button>
                <?php
                } else {
                ?>
                  <!-- User is not logged in, redirect to signup page -->
                  <a href="sigin-up.php"><button type="button">Signup</button></a>
                <?php
                }
                ?>

              </div>

            </div>
            <?php

            use PHPMailer\PHPMailer\PHPMailer;
            use PHPMailer\PHPMailer\SMTP;
            use PHPMailer\PHPMailer\Exception;
            //Load Composer's autoloader
            require 'PHPMailer/phpmailer/PHPMailer.php';
            require 'PHPMailer/phpmailer/SMTP.php';;
            require 'PHPMailer/phpmailer/Exception.php';;

            if (isset($_POST['submit'])) {

              $emailing = $_POST['email'];
              $message = $_POST['message'];
              $subject = $_POST['subject'];
              $mail = new PHPMailer(true);

              try {
                //Server settings
                // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
                $mail->isSMTP();                                            //Send using SMTP
                $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
                $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
                $mail->Username   = 'bhicorni@gmail.com';                     //SMTP username
                $mail->Password   = 'ljly wogo jabk xbfa';                               //SMTP password
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
                $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

                //Recipients
                $mail->setFrom($emailing, $emailing);
                $mail->addAddress('bhicorni@gmail.com');     //Add a recipient

                $mail->addRepLyTo($emailing, 'Mailtrap Website');
                //Attachments


                //Content
                $mail->isHTML(true);                                  //Set email format to HTML
                $mail->Subject = $subject;
                $mail->Body    = $message;
                $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
                $mail->send();
                echo " <script> alert('message has been sent');</script>";
              } catch (Exception $e) {

                echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
              }
            }
            ?>





          </form>

          <!-- $mail->Username   = 'bhicorni@gmail.com';                     // SMTP username
//       $mail->Password   = 'xrfsupzgiihsuvxy';         -->



        </div>

      </div>

  </section><!-- End Contact Section -->

  <!--  -->



  <!--  -->

  <!-- Faq Section - Home Page -->
  <section id="faq" class="faq">

    <div class="container">

      <div class="row gy-4">


        <div class="container section-title" data-aos="fade-up">
          <h2>FAQ</h2>
          <p>Have question? Here you'll find the answers</p>
        </div>
        <div class="col-lg-8" data-aos="fade-up" data-aos-delay="200">

          <div class="faq-container">
            <div class="faq-item faq-active">
              <h3><span class="num">1.</span> <span>How do I choose the right engine for my swap?</span></h3>
              <div class="faq-content">
                <p>Consider factors such as compatibility, power goals, budget,
                  and local regulations. Consult with experts for advice on the best engine for your specific needs.</p>
              </div>
              <i class="faq-toggle bi bi-chevron-right"></i>
            </div><!-- End Faq item-->

            <div class="faq-item">
              <h3><span class="num">2.</span> <span>How does tuning affect fuel efficiency?</span></h3>
              <div class="faq-content">
                <p>Proper tuning can enhance fuel efficiency by optimizing the air-fuel mixture and ignition timing.
                  However, aggressive tuning for performance may impact fuel economy.</p>
              </div>
              <i class="faq-toggle bi bi-chevron-right"></i>
            </div><!-- End Faq item-->

            <div class="faq-item">
              <h3><span class="num">3.</span> <span>How often should I detail my car?</span>
              </h3>
              <div class="faq-content">
                <p>The frequency depends on factors like usage, environment, and personal preference. Typically,
                  quarterly detailing is recommended, but high-use vehicles may require more frequent attention.</p>
              </div>
              <i class="faq-toggle bi bi-chevron-right"></i>
            </div><!-- End Faq item-->

            <div class="faq-item">
              <h3><span class="num">4.</span> <span>What's the difference between detailing and car washing?</span>
              </h3>
              <div class="faq-content">
                <p>Detailing is a more thorough process, addressing both the exterior and interior,
                  often involving paint correction, polishing, and protecting surfaces.
                  Car washing primarily focuses on removing surface dirt.</p>
              </div>
              <i class="faq-toggle bi bi-chevron-right"></i>
            </div><!-- End Faq item-->

            <div class="faq-item">
              <h3><span class="num">5.</span> <span>Can I perform an engine swap myself?</span></h3>
              <div class="faq-content">
                <p>It depends on your skill level and experience. While some enthusiasts successfully complete swaps,
                  it's recommended to consult with professionals for complex projects.</p>
              </div>
              <i class="faq-toggle bi bi-chevron-right"></i>
            </div><!-- End Faq item-->

          </div>

        </div>
      </div>

    </div>

  </section><!-- End Faq Section -->

</main>

<?php
include "links/footer.php";
?>