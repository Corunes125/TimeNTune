
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashbord - TimeNTune</title>

  <!-- Favicons -->
  <link href="../userpanel/assets/img/tntfavicon.png" rel="icon">
  <link href="../userpanel/assets/img/apple-touch-icon.png" rel="apple-touch-icon">


  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Sharp:opsz,wght,FILL,GRAD@48,400,0,0" />
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.1.0/uicons-regular-rounded/css/uicons-regular-rounded.css'>
</head>

<body>
  <div class="container">
    <aside>

      <div class="top">
        <div class="logo">
          <a href="dashboard.php">
            <h2 style="color: #444444;">TimeNTune <span class="danger">.</span> </h2>
          </a>
        </div>
        <div class="close" id="close_btn">
          <span class="material-symbols-sharp">
            close
          </span>
        </div>
      </div>
      <!-- end top -->
      <div class="sidebar">

        <a href="dashboard.php" class="active">
          <span class="material-symbols-sharp">grid_view </span>
          <h3>Dashbord</h3>
        </a>
        <a href="pages/custumer.php">
          <span class="material-symbols-sharp">person_outline </span>
          <h3>custumers</h3>
        </a>
        <a href="pages/analytics.php">
          <span class="material-symbols-sharp">insights </span>
          <h3>Analytics</h3>
        </a>

        <a href="pages/services.php">
          <span class="material-symbols-outlined">linked_services</span>
          <h3>Services</h3>
        </a>

        <a href="pages/add-services.php">
          <span class="material-symbols-sharp">add </span>
          <h3>Add Services</h3>
        </a>

        <a href="pages/profile.php">
          <span class="material-symbols-outlined">account_circle</span>
          <h3>Profile</h3>
        </a>

        <a href="pages/logout.php">
          <span class="material-symbols-sharp">logout </span>
          <h3>logout</h3>
        </a>



      </div>

    </aside>
    <!-- --------------
        end asid
      -------------------- -->

    <!-- --------------
        start main part
      --------------- -->

    <main>
      <h1>Dashbord</h1>

      <div class="insights">

        <!-- start seling -->
        <div class="sales">
          <span class="material-symbols-sharp">trending_up</span>
          <div class="middle">

            <div class="left">
              <h3>Total Users</h3>

              <?php
              //  including database
              include "auth/config.php";
              // SQL query to get the total count of table rows where gender is 'Male'
              $sql = "SELECT COUNT(*) as total FROM custumer_sign_up ";
              $result = $con->query($sql);

              if ($result->num_rows > 0) {
                // Output data of each row
                while ($row = $result->fetch_assoc()) {
                  echo '<h1>'  . $row["total"] . '</h1>';
                }
              } else {
                echo "0 results";
              }
              ?>
            </div>
          </div>
          <small></small>
        </div>
        <!-- end seling -->

        <!-- start expenses -->
        <div class="expenses">
          <span class="material-symbols-sharp">local_mall</span>
          <div class="middle">

            <div class="left">
              <h3>Total Sales</h3>
              <?php
              $sql = "SELECT price FROM checkout_details";
              $result = $con->query($sql);

              if ($result) {
                $totalPrice = 0;
                $total = $result->num_rows > 0;
                while ($row = mysqli_fetch_assoc($result)) {
                  $servicePrice = $row['price'];
                  $quantity = $total;

                  // Calculate subtotal for the current row
                  $subtotal = $servicePrice * $quantity;

                  // Add subtotal to the total
                  $totalPrice += $subtotal;
                }

                // Output or use the total price for all rows
                echo '<h1>$' . $totalPrice . '</h1>';
              } else {
                // Handle query execution error
                echo 'Error: ' . $con->error;
              }
              ?>
            </div>
          </div>
          <small></small>
        </div>

        <!-- total services start -->
        <div class="income">
          <span class="material-symbols-sharp">stacked_line_chart</span>
          <div class="middle">
            <div class="left">
              <h3>Total Services</h3>
              <?php
              // SQL query to get the total count of table rows 
              $sql = "SELECT COUNT(*) as total FROM services ";
              $result = $con->query($sql);

              if ($result->num_rows > 0) {
                // Output data of each row
                while ($row = $result->fetch_assoc()) {
                  echo '<h1>'  . $row["total"] . '</h1>';
                }
              } else {
                echo "0 results";
              }
              ?>
            </div>
          </div>
          <small></small>
        </div>
        <!-- total services end  -->

      </div>
      <!-- end insights -->
      <div class="recent_order">
        <h2>Recent Orders</h2>
        <table>
          <thead>
            <tr>
              <th>Order Id</th>
              <th>Email</th>
              <th>Phone</th>
              <th>Car Make</th>
              <th>Model</th>
              <th>Variant</th>
              <th>Number</th>
              <th>Category</th>
              <th>Service</th>
              <th>Price</th>
            </tr>
          </thead>
          <?php
          // Include your database configuration file

          // Assuming your table name is 'services'
          $query = "SELECT * FROM checkout_details";
          $result = mysqli_query($con, $query);

          echo '<tbody>';

          if ($result) {
            while ($row = mysqli_fetch_assoc($result)) {
              echo  '<tr>';
              echo  '<td>' . $row['id'] . '</td>';
              echo  '<td>' . $row['email'] . '</td>';
              echo  '<td>' . $row['phone'] . '</td>';
              echo  '<td>' . $row['make_c'] . '</td>';
              echo  '<td>' . $row['model_c'] . '</td>';
              echo  '<td>' . $row['variant_c'] . '</td>';
              echo  '<td>' . $row['number_car'] . '</td>';
              echo  '<td class="warning">' . $row['category'] . '</td>';
              echo  '<td class="primary">' . $row['service'] . '</td>';
              echo  '<td>' . $row['price'] . '</td>';
              echo  '</tr>';
            }

            // Free result set
            mysqli_free_result($result);
          } else {
            echo 'Error executing query: ' . mysqli_error($con);
          }

          echo '</tbody>';

          // Close the database connection
          mysqli_close($con);
          ?>
        </table>
      </div>

    </main>
    <!------------------
         end main
        ------------------->

    <!----------------
        start right main 
      ---------------------->
    <div class="right">

      <div class="top">
        <button id="menu_bar">
          <span class="material-symbols-sharp">menu</span>
        </button>

        <div class="theme-toggler">

        </div>
        <div class="profile">
          <div class="info">
            <p><b>Babar</b></p>
            <p>Admin</p>
            <small class="text-muted"></small>
          </div>
          <div class="profile-photo">
            <img src="./images/profile-1.jpg" alt="" />
          </div>
        </div>
      </div>
    </div>
  </div>



  <script src="assets/js/script.js"></script>
</body>

</html>