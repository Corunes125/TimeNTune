    <?php
    include "links/header.php";
    ?>

    <style>
      #popup-window {
        position: fixed;
        width: 300px;
        height: 200px;
        background: white;
        border: 1px solid black;
        padding: 10px;
        margin: auto;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        z-index: 10;
        display: none;
      }
    </style>

    <!-- Contact Section - Home Page -->
    <section id="services" class="contact">

      <!--  Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Check Out</h2>
        <p>We can't solve your problem if you don't tell us about it!</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-6">

            <div class="row gy-4">
              <div class="col-md-6">
                <div class="info-item" data-aos="fade" data-aos-delay="200">
                  <i class="bi bi-geo-alt"></i>
                  <h3>Address</h3>
                  <p>A108 Adam Street</p>
                  <p>New York, NY 535022</p>
                </div>
              </div><!-- End Info Item -->

              <div class="col-md-6">
                <div class="info-item" data-aos="fade" data-aos-delay="300">
                  <i class="bi bi-telephone"></i>
                  <h3>Call Us</h3>
                  <p>+1 5589 55488 55</p>
                  <p>+1 6678 254445 41</p>
                </div>
              </div><!-- End Info Item -->

              <div class="col-md-6">
                <div class="info-item" data-aos="fade" data-aos-delay="400">
                  <i class="bi bi-envelope"></i>
                  <h3>Email Us</h3>
                  <p>info@example.com</p>
                  <p>contact@example.com</p>
                </div>
              </div><!-- End Info Item -->

              <div class="col-md-6">
                <div class="info-item" data-aos="fade" data-aos-delay="500">
                  <i class="bi bi-clock"></i>
                  <h3>Open Hours</h3>
                  <p>Monday - Friday</p>
                  <p>9:00AM - 05:00PM</p>
                </div>
              </div><!-- End Info Item -->

            </div>

          </div>

          <div class="col-lg-6">
            <!-- Checkout Form -->

            <!-- Checkout Form -->
            <form action="" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200" name="checkoutForm">
              <div class="row gy-4">
                <!-- Customer Info Start -->
                <?php
                include("../../dashboard/auth/config.php");
                if (isset($_SESSION['email'])) {
                  $stmt = $con->prepare("SELECT * FROM custumer_sign_up WHERE email=?");
                  $stmt->bind_param("s", $_SESSION['email']);
                  $stmt->execute();
                  $result = $stmt->get_result();
                  $row = $result->fetch_assoc();

                  $first_name = $row['user_first_name'];
                  $last_name = $row['user_last_name'];
                  $phone = $row['number'];
                }
                ?>
                <label for="Customer info" style="text-align: center;"><b>Customer Info:</b></label>
                <div class="col-md-6">
                  <input type="text" class="form-control" name="first_name" placeholder="First Name" value="<?php echo isset($first_name) ? htmlspecialchars($first_name) : ''; ?>" required>
                </div>
                <div class="col-md-6">
                  <input type="text" class="form-control" name="last_name" placeholder="Last Name" value="<?php echo isset($last_name) ? htmlspecialchars($last_name) : ''; ?>" required>
                </div>
                <div class="col-md-6">
                  <input type="email" class="form-control" name="email" placeholder="Your Email" value="<?php echo isset($_SESSION['email']) ? htmlspecialchars($_SESSION['email']) : ''; ?>" required>
                </div>
                <div class="col-md-6">
                  <input type="number" class="form-control" name="phone" placeholder="Your Phone.No" value="<?php echo isset($phone) ? htmlspecialchars($phone) : ''; ?>" required>
                </div>
                <!-- Customer Info End -->

                <!-- Car Info Start -->
                <label for="Car info" style="text-align: center;"><b>Car Info:</b></label>
                <div class="col-md-6">
                  <input type="text" class="form-control" name="make_c" placeholder="Make of your Car" required>
                </div>
                <div class="col-md-6">
                  <input type="text" class="form-control" name="model_c" placeholder="Model of your Car" required>
                </div>
                <div class="col-md-6">
                  <input type="text" class="form-control" name="variant_c" placeholder="Variant of your Car" required>
                </div>
                <div class="col-md-6">
                  <input type="number" class="form-control" name="number_c" placeholder="No. of your Car" required>
                </div>
                <!-- Car Info End -->

                <!-- Services Start -->
                <!-- PHP Script Start -->
                <?php
                if (isset($_GET['id'])) {
                  $id = $_GET['id'];

                  // Fetch data from the database
                  $query = "SELECT * FROM services WHERE id = '$id'";
                  $result = mysqli_query($con, $query);

                  if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                ?>
                      <label for="service-info" style="text-align: center;"><b>Service Info:</b></label>

                      <div class="col-md-6">
                        <input type="text" class="form-control" name="category" placeholder="Category" value="<?php echo $row['category'] ?>" required>
                      </div>
                      <div class="col-md-6">
                        <input type="text" class="form-control" name="service" placeholder="Service" value="<?php echo $row['service_name'] ?>" required>
                      </div>
                      <div class="col-md-6">
                        <input type="text" class="form-control" name="price" value="<?php echo $row['price'] ?>" required>
                      </div>

                <?php
                    }
                  }
                }
                ?>
                <!-- PHP Script End -->

                <!-- Checkout Button -->

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
                    <button type="submit" name="submit" value="submit">Checkout</button>
                  <?php
                  } else {
                  ?>
                    <!-- User is not logged in, redirect to signup page -->
                    <a href="../sigin-up.php"><button type="button" name="button">Signup</button></a>
                  <?php
                  }
                  ?>
                </div>
              </div>
            </form>

            <?php
            if (isset($_POST['submit'])) {
              // Your existing form submission code...
              include "../../dashboard/auth/config.php";
              // Check if the database connection is successful
              if (!$con) {
                die("Connection failed: " . mysqli_connect_error());
              }
              // user info
              $first_name = $_POST['first_name'];
              $last_name = $_POST['last_name'];
              $email = $_POST['email'];
              $phone = $_POST['phone'];
              // car info
              $make_c = $_POST['make_c'];
              $model_c = $_POST['model_c'];
              $variant_c = $_POST['variant_c'];
              $number_c = $_POST['number_c'];
              // service info
              $category = $_POST['category'];
              $service = $_POST['service'];
              $price = $_POST['price'];
              // Validate form input
              if (empty($first_name) || empty($last_name) || empty($email) || empty($phone) || empty($make_c) || empty($model_c) || empty($variant_c) || empty($number_c) || empty($category) || empty($service) || empty($price)) {
                echo '<script type="text/javascript">alert("Please fill in all fields.");</script>';
                exit();
              }
              // Use prepared statement to prevent SQL injection
              $insert = "INSERT INTO checkout_details(firstname, lastname, email, phone, make_c, model_c, variant_c, number_car, category, service, price)
  VALUES ('$first_name', '$last_name', '$email', '$phone', '$make_c', '$model_c', '$variant_c', '$number_c', '$category', '$service' , '$price')";



              $result = mysqli_query($con, $insert);
              if ($result) {
                echo '<script type="text/javascript"> 
                  alert("check Successfully");
              </script>';
              } else {
                echo '<script type="text/javascript">alert("Account Not Created");</script>';
              }

              // Close the statement
              mysqli_stmt_close($stmt);
            }
            ?>


          </div><!-- End check_out Form -->

        </div>

      </div>

    </section><!-- End check_out Section -->

    <script>
      // Get the elements by their ID
      var popupLink = document.getElementById("popup-link");
      var popupWindow = document.getElementById("popup-window");
      var closeButton = document.getElementById("close-button");

      // Show the pop-up window when the link is clicked
      popupLink.addEventListener("click", function(event) {
        event.preventDefault();
        popupWindow.style.display = "block";
      });

      // Hide the pop-up window when the close button is clicked
      closeButton.addEventListener("click", function() {
        popupWindow.style.display = "none";
      });

      // Hide the pop-up window when the user clicks outside of it
      window.addEventListener("click", function(event) {
        if (event.target == popupWindow) {
          popupWindow.style.display = "none";
        }
      });
    </script>

    <?php
    include "links/footer.php";
    ?>