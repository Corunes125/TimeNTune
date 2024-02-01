<!-- header -->
<?php
include "links/header.php";
?>
<!--  -->

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


                <!-- users-list -->
                <div class="recent_order">
                    <h2>Add Services</h2>
                    <table>
                        <tbody>
                            <!-- php script start -->
                            <?php
                            $category = '';

                            if (isset($_POST['submit'])) {
                                $category = isset($_POST['category']) ? $_POST['category'] : ''; // Assign the value if it exists
                            } else {
                                //   echo '<script type="text/javascript">
                                //       alert("Error uploading file");
                                //       </script>';
                            }
                            ?>
                            <!-- php script end -->
                            <div class="formbold-main-wrapper">
                                <!-- Add-services form -->
                                <div class="formbold-form-wrapper">
                                    <form action="#" method="POST" enctype="multipart/form-data">
                                        <div class="formbold-input-flex">
                                            <div>
                                                <label for="firstname" class="formbold-form-label"> Service Name </label>
                                                <input type="text" name="servicename" id="firstname" placeholder="Service" class="formbold-form-input" required />
                                            </div>
                                            <div>
                                                <label for="lastname" class="formbold-form-label"> Service Price </label>
                                                <input type="text" name="lastname" id="price" placeholder="Price" class="formbold-form-input" required />
                                            </div>
                                        </div>

                                        <div class="formbold-input-flex">
                                            <div>
                                                <label for="email" class="formbold-form-label"> image </label>
                                                <input type="file" name="img" id="img" accept=".jpg, .jpeg, .png" required class="formbold-form-input" />
                                            </div>
                                        </div>

                                        <!-- Category Selection -->
                                        <div class="formbold-input-radio-wrapper">
                                            <label for="jobtitle" class="formbold-form-label"> Select Category </label>
                                            <div class="formbold-radio-flex">
                                                <!-- Engine Swap -->
                                                <div class="formbold-radio-group">
                                                    <label class="formbold-radio-label">
                                                        <input class="formbold-input-radio" type="radio" name="category" id="jobtitle" value="Engine Swap" <?php echo ($category == 'Engine Swap') ? 'checked' : ''; ?>>
                                                        Engine Swap
                                                        <span class="formbold-radio-checkmark"></span>
                                                    </label>
                                                </div>
                                                <!-- Tune -->
                                                <div class="formbold-radio-group">
                                                    <label class="formbold-radio-label">
                                                        <input class="formbold-input-radio" type="radio" name="category" id="jobtitle" value="Tune" <?php echo ($category == 'Tune') ? 'checked' : ''; ?>>
                                                        Tune
                                                        <span class="formbold-radio-checkmark"></span>
                                                    </label>
                                                </div>
                                                <!-- Detailing -->
                                                <div class="formbold-radio-group">
                                                    <label class="formbold-radio-label">
                                                        <input class="formbold-input-radio" type="radio" name="category" id="jobtitle" value="Detailing" <?php echo ($category == 'Detailing') ? 'checked' : ''; ?>>
                                                        Detailing
                                                        <span class="formbold-radio-checkmark"></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>

                                        <div>
                                            <label for="message" class="formbold-form-label"> Description </label>
                                            <textarea rows="6" name="message" id="message" placeholder="Type your Description" class="formbold-form-input" required></textarea>
                                        </div>

                                        <button class="formbold-btn" name="submit" style="background-color: #ff7782">
                                            Add
                                        </button>
                                    </form>
                                </div>
                            </div>
                            <!-- php script start -->
                            <?php

                            if (isset($_POST['submit'])) {
                                // Include your database configuration file
                                include("../auth/config.php");

                                // Get form data
                                $serviceName = $_POST['servicename'];
                                $servicePrice = $_POST['lastname'];
                                $category = $_POST['category'];
                                $description = $_POST['message'];

                                // File upload handling
                                $uploadDirectory = "assets/upload/"; // Specify your upload directory
                                $uploadedFile = "../" . $uploadDirectory . basename($_FILES['img']['name']);
                                $path = $uploadDirectory . basename($_FILES['img']['name']);


                                if (move_uploaded_file($_FILES['img']['tmp_name'], $uploadedFile)) {
                                    // File uploaded successfully, continue with database insertion
                                    // You should perform additional validation and sanitation on user input

                                    // Use prepared statement to prevent SQL injection
                                    $stmt = mysqli_prepare($con, "INSERT INTO services (service_name, price, img, category, description) VALUES (?, ?, ?, ?, ?)");
                                    // Check if the prepare statement succeeded
                                    if ($stmt) {
                                        // Bind parameters
                                        mysqli_stmt_bind_param($stmt, "sssss", $serviceName, $servicePrice, $path, $category, $description);
                                        // Execute the statement
                                        $result = mysqli_stmt_execute($stmt);

                                        if ($result) {
                                            echo '<script type="text/javascript">
                alert("Service added successfully");
                </script>';
                                        } else {
                                            echo '<script type="text/javascript">
                alert("Error adding service");
                </script>';
                                        }

                                        // Close the statement
                                        mysqli_stmt_close($stmt);
                                    } else {
                                        // Handle the case when preparing the statement fails
                                        echo "Error preparing statement: " . mysqli_error($con);
                                    }
                                } else {
                                    echo '<script type="text/javascript">alert("Error uploading file");</script>';
                                }

                                // Close the database connection
                                mysqli_close($con);
                            }
                            ?>

                            <!-- php script end -->
                        </tbody>
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
    <script src="../assets/js/add-services.js"></script>
</body>

</html>