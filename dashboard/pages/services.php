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
                     <h1>25,024</h1>
                  </div>
                  <div class="progress">
                     <svg>
                        <circle r="30" cy="40" cx="40"></circle>
                     </svg>
                     <div class="number">
                        <p>80%</p>
                     </div>
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
                     <h1>2,024</h1>
                  </div>
                  <div class="progress">
                     <svg>
                        <circle r="30" cy="40" cx="40"></circle>
                     </svg>
                     <div class="number">
                        <p>20%</p>
                     </div>
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
                     <h3>Total Sales</h3>
                     <h1>27,024</h1>
                  </div>
                  <div class="progress">
                     <svg>
                        <circle r="30" cy="40" cx="40"></circle>
                     </svg>
                     <div class="number">
                        <p>80%</p>
                     </div>
                  </div>

               </div>
               <small></small>
            </div>
            <!-- end total-users -->

         </div>

         <!-- users-list -->
         <div class="recent_order">
            <h2>Services List</h2>
            <table>
               <thead>
                  <tr>
                     <th>Service Id</th>
                     <th>Category</th>
                     <th>Service Name</th>
                     <th>Update</th>
                     <th>Delete</th>
                  </tr>
               </thead>
               <?php
               // Include your database configuration file
               include("../auth/config.php");

               // Assuming your table name is 'services'
               $query = "SELECT * FROM services";
               $result = mysqli_query($con, $query);

               echo '<tbody>';

               if ($result) {
                  while ($row = mysqli_fetch_assoc($result)) {
                     echo '<tr>';
                     echo '<td>' . $row['id'] . '</td>';
                     echo '<td>' . $row['category'] . '</td>';
                     echo '<td>' . $row['service_name'] . '</td>';
                     echo '<td><a class="success" href="up-del/update.php?az=' . $row['id'] . '">Update</a></td>';
                     echo '<td><a class="warning" href="up-del/delete.php?delete=' . $row['id'] . '">Delete</a></td>';
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