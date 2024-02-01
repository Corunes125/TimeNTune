<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashbord - TimeNTune</title>
    <!-- Favicons -->
    <link href="../../../userpanel/assets/img/tntfavicon.png" rel="icon">
    <link href="../../../userpanel/assets/img/apple-touch-icon.png" rel="apple-touch-icon">
    <!--  -->
    <!-- icon-links -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Sharp:opsz,wght,FILL,GRAD@48,400,0,0" />
    <!--  -->
    <!--  -->
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.1.0/uicons-regular-rounded/css/uicons-regular-rounded.css'>
    <!--  -->
    <!-- main -->
    <link rel="stylesheet" href="../../assets/css/style.css">
    <!--  -->
    <!-- add-servies -->
    <link rel="stylesheet" href="../../assets/css/add-services.css">
    <!--  -->
    <!--  -->
    <link rel="stylesheet" href="../../assets/css/blogs.css">
    <!--  -->
</head>
<!--  -->

<body>
    <div class="container">

        <!-- side-bar -->
        <aside>

            <div class="top">
                <div class="logo">
                    <a href="../../dashboard.php">
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

                <a href="../../dashboard.php">
                    <span class="material-symbols-sharp">grid_view </span>
                    <h3>Dashbord</h3>
                </a>
                <a href="../custumer.php">
                    <span class="material-symbols-sharp">person_outline </span>
                    <h3>custumers</h3>
                </a>
                <a href="../analytics.php">
                    <span class="material-symbols-sharp">insights </span>
                    <h3>Analytics</h3>
                </a>
                <!-- <a href="comment.php">
                <span class="material-symbols-sharp">mail_outline </span>
                <h3>Comments</h3>
                <span class="msg_count">14</span>
             </a> -->

                <a href="../services.php">
                    <span class="material-symbols-outlined">linked_services</span>
                    <h3>Services</h3>
                </a>
                <a href="../add-services.php">
                    <span class="material-symbols-sharp">add </span>
                    <h3>Add Services</h3>
                </a>
                <a href="../profile.php">
                    <span class="material-symbols-outlined">account_circle</span>
                    <h3>Profile</h3>
                </a>
                <a href="../logout.php">
                    <span class="material-symbols-sharp">logout </span>
                    <h3>logout</h3>
                </a>

            </div>

        </aside>
        <!-- --------------
          end aside
        -------------------- -->
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

                            <?php
                            include('../../auth/config.php');

                            // Check if 'az' is set in the URL parameters
                            if (isset($_GET['az'])) {
                                $id = $_GET['az'];

                                // Fetch data for the specified service ID
                                $sql = "SELECT * FROM services WHERE id='$id'";
                                $rs = mysqli_query($con, $sql);

                                // Check if the service exists
                                if ($result = mysqli_fetch_array($rs)) {
                                    $serviceName = $result['service_name'];
                                    $servicePrice = $result['price'];
                                    $category = $result['category'];
                                    $description = $result['description'];
                                } else {
                                    echo "Service not found";
                                    exit();
                                }
                            } else {
                                echo "Invalid request";
                                exit();
                            }
                            ?>

                            <div class="formbold-main-wrapper">
                                <!-- Edit-services form -->
                                <div class="formbold-form-wrapper">
                                    <form action="#" method="POST" enctype="multipart/form-data">
                                        <!-- Add a hidden input for the service ID -->
                                        <input type="hidden" name="service_id" value="<?php echo $id; ?>">

                                        <!-- Rest of the form fields with values populated from the database -->
                                        <div class="formbold-input-flex">
                                            <!-- Service Name -->
                                            <div>
                                                <label for="firstname" class="formbold-form-label"> Service Name </label>
                                                <input type="text" name="servicename" id="firstname" value="<?php echo $serviceName; ?>" placeholder="Service" class="formbold-form-input" required />
                                            </div>
                                            <!-- Service Price -->
                                            <div>
                                                <label for="lastname" class="formbold-form-label"> Service Price </label>
                                                <input type="text" name="lastname" id="price" value="<?php echo $servicePrice; ?>" placeholder="Price" class="formbold-form-input" required />
                                            </div>
                                        </div>

                                        <!-- Image Upload -->
                                        <div class="formbold-input-flex">
                                            <div>
                                                <label for="img" class="formbold-form-label"> Image </label>
                                                <input type="file" name="img" id="img" accept=".jpg, .jpeg, .png" class="formbold-form-input" />
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

                                        <!-- Description -->
                                        <div>
                                            <label for="message" class="formbold-form-label"> Description </label>
                                            <textarea rows="6" name="message" id="message" placeholder="Type your Description" class="formbold-form-input" required><?php echo $description; ?></textarea>
                                        </div>

                                        <!-- Submit Button -->
                                        <button class="formbold-btn" name="submit" style="background-color: #ff7782">
                                            Update
                                        </button>
                                    </form>
                                </div>
                            </div>

                            <?php
                            // Process form submission
                            if (isset($_POST['submit'])) {
                                $serviceID = $_POST['service_id'];
                                $serviceName = isset($_POST['servicename']) ? $_POST['servicename'] : '';
                                $servicePrice = isset($_POST['lastname']) ? $_POST['lastname'] : '';
                                $category = isset($_POST['category']) ? $_POST['category'] : '';
                                $description = isset($_POST['message']) ? $_POST['message'] : '';

                                // Check if a new image file is uploaded
                                if (!empty($_FILES['img']['name'])) {
                                    $name = $_FILES['img']['name'];
                                    $tmp_name = $_FILES['img']['tmp_name'];
                                    $location = "../../assets/upload";
                                    $path1 = $location . $name;

                                    // Move the uploaded file to the destination folder
                                    if (move_uploaded_file($tmp_name, $path1)) {
                                        // Update the database with the new values
                                        $sql = "UPDATE services SET service_name='$serviceName', price='$servicePrice', img='$path1', category='$category', description='$description' WHERE id='$serviceID'";
                                        mysqli_query($con, $sql);
                                        echo '<script type="text/javascript">
                alert("Service Update successfully");
                </script>';
                                    } else {
                                        echo '<script type="text/javascript">
                alert("Error uploading file");
                </script>';
                                    }
                                } else {
                                    // If no new image is uploaded, update the database without changing the image
                                    $sql = "UPDATE services SET service_name='$serviceName', price='$servicePrice', category='$category', description='$description' WHERE id='$serviceID'";
                                    mysqli_query($con, $sql);
                                    echo '<script type="text/javascript">
            alert("Service Update successfully");
            </script>';
                                }
                            }
                            ?>



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
                        <img src="../../images/profile-1.jpg" alt="" />
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- main -->
    <script src="../../assets/js/script.js"></script>
    <!--  -->
    <script src="../../assets/js/add-services.js"></script>
</body>

</html>