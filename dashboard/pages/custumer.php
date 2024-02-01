<?php
include "links/header.php";
?>

<body>
  <div class="container">

    <!-- side-bar -->
    <?php
    include "links/side-bar.php";
    ?>
    <!--  -->

    <!-- --------------
        start main part
      --------------- -->

    <main>
      <h1>Dashbord</h1>
      <div class="insights">

        <!-- start male-users -->
        <div class="sales">
          <span class="material-symbols-sharp">trending_up</span>
          <div class="middle">

            <div class="left">
              <h3>Male Users</h3>
              <?php
              include '../auth/config.php';

              // SQL query to get the total count of table rows where gender is 'Male'
              $sql = "SELECT COUNT(*) as total FROM custumer_sign_up WHERE gender = 'Male'";
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
        <!-- end male-users -->

        <!-- start female-users -->
        <div class="expenses">
          <span class="material-symbols-sharp">local_mall</span>
          <div class="middle">

            <div class="left">
              <h3>Female Users</h3>
              <?php
              // SQL query to get the total count of table rows where gender is 'Female'
              $sql = "SELECT COUNT(*) as total FROM custumer_sign_up WHERE gender = 'Female'";
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
        <!-- end female-users -->

        <!-- start total-users -->
        <div class="income">
          <span class="material-symbols-sharp">stacked_line_chart</span>
          <div class="middle">

            <div class="left">
              <h3>Total Users</h3>
              <?php
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
        <!-- end total-users -->

      </div>

      <!-- users-list -->
      <div class="recent_order">
        <h2>Users List</h2>
        <table>
          <thead>
            <tr>
              <th>User Id</th>
              <th>First Name</th>
              <th>Last Name</th>
              <th>User Number</th>
              <th>Email</th>
              <th>Gender</th>
              <th>Age</th>
            </tr>
          </thead>
          </thead>
          <?php
          // Include your database configuration file

          // Assuming your table name is 'services'
          $query = "SELECT * FROM custumer_sign_up";
          $result = mysqli_query($con, $query);

          echo '<tbody>';

          if ($result) {
            while ($row = mysqli_fetch_assoc($result)) {
              echo '<tr>';
              echo '<td>' . $row['id'] . '</td>';
              echo '<td>' . $row['user_first_name'] . '</td>';
              echo '<td>' . $row['user_last_name'] . '</td>';
              echo '<td>' . $row['number'] . '</td>';
              echo '<td>' . $row['email'] . '</td>';
              echo '<td>' . $row['gender'] . '</td>';
              echo '<td>' . $row['age'] . '</td>';
              echo '</tr>';
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
          <!-- <span class="material-symbols-sharp active">light_mode</span> -->
          <!-- <span class="material-symbols-sharp">dark_mode</span> -->
        </div>
        <div class="profile">
          <div class="info">
            <p><b>Corunes</b></p>
            <p>Admin</p>
            <small class="text-muted"></small>
          </div>
          <div class="profile-photo">
            <img src="../images/profile-1.jpg" alt="" />
          </div>
        </div>
      </div>
    </div>

  </div>
  <!-- main -->
  <script src="../assets/js/script.js"></script>
  <!--  -->
</body>

</html>