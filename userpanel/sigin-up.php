<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta tags for character set and viewport -->
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <!-- Page title and meta information -->
    <title>Home - Append Bootstrap Template</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
  <link href="assets/img/tntfavicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/main.css" rel="stylesheet">

    <!-- Form CSS File -->
    <link rel="stylesheet" href="assets/css/form.css">

    <!-- Template information comments -->
    <!-- =======================================================
    * Template Name: Append
    * Updated: Sep 18 2023 with Bootstrap v5.3.2
    * Template URL: https://bootstrapmade.com/append-bootstrap-website-template/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
</head>

<body>

    <?php
    // PHP script for processing form submissions and including footer links
    // include "links/footer.php";
    ?>

    <div class="wrapper">
        <div class="title-text">
            <!-- Title for login and signup -->
            <div class="title login">Login </div>
            <div class="title signup">Signup </div>
        </div>
        <div class="form-container">
            <div class="slide-controls">
                <!-- Radio buttons for login and signup -->
                <input type="radio" name="slide" id="login" checked>
                <input type="radio" name="slide" id="signup">
                <label for="login" class="slide login">Login</label>
                <label for="signup" class="slide signup">Signup</label>
                <div class="slider-tab"></div>
            </div>
            <div class="form-inner">
                <!-- Login Form -->
                <form action="#" class="login" method="post" id="login">
                    <div class="field">
                        <input type="text" name="email" placeholder="Email Address" required>
                    </div>
                    <div class="field">
                        <input type="password" name="password" placeholder="Password" required>
                    </div>
                    <div class="pass-link"><a href="#">Forgot password?</a></div>
                    <div class="field btn">
                        <div class="btn-layer"></div>
                        <input type="submit" name="login" value="Login">
                    </div>
                    <div class="signup-link">Not a member? <a href="">Signup now</a></div>
                </form>
               <!-- php script for login form -->
<?php
session_start();


if (isset($_POST['login'])) {
    include("../dashboard/auth/config.php");

    // Check if the database connection is successful
    if (!$con) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $email = $_POST['email'];
    $password = $_POST['password'];

    // Validate form input
    if (!empty($email) && !empty($password)) {
        // Prepare the SQL statement
        $stmt = mysqli_prepare($con, "SELECT email, password FROM custumer_sign_up WHERE email = ?");

        // Bind the parameter
        mysqli_stmt_bind_param($stmt, "s", $email);

        // Execute the statement
        mysqli_stmt_execute($stmt);

        // Get the result
        $result = mysqli_stmt_get_result($stmt);

        if ($row = mysqli_fetch_array($result)) {
            // Verify the password
            if (password_verify($password, $row['password'])) {
                echo '<script type="text/javascript"> 
                            alert("Login Successful");
                        window.location.href="index.php" 
                            </script>';
        $_SESSION['email'] = $email;

            } else {
                echo '<script type="text/javascript">alert("Invalid Email or Password");</script>';
            }
        } else {
            echo '<script type="text/javascript">alert("Invalid Email or Password");</script>';
        }
    }
}
?>






                <!--  -->


                
                <!-- Signup Form -->
                <form action="#" class="signup" method="post" >
                <!-- first_name -->
                    <div class="field">
                        <input type="text" name="first_name" placeholder="First Name" required>
                    </div>
                    <!--  -->
                    <!-- last_name -->
                    <div class="field">
                        <input type="text" name="last_name" placeholder="Last Name" required>
                    </div>
                    <!--  -->
                    <!-- email -->
                    <div class="field">
                        <input type="email" name="email" placeholder="Email Address" required>
                    </div>
                    <!--  -->
                    <!-- number -->
                    <div class="field">
                        <input type="number" name="number" placeholder="Number" required>
                    </div>
                    <!--  -->
                    <!--  -->
                    <div class="field">
                        <!-- Dropdown for gender selection -->
                        <label for="gender">Gender</label>
                        <select id="gender" name="gender" required>
                            <option value="">select</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            <option value="Other">Other</option>
                        </select>
                    </div>
                    <!-- age -->
                    <div class="field">
                        <input type="number" name="age" placeholder="Age" required>
                    </div>
                    <!--  -->
                    <!-- password -->
                    <div class="field">
                        <input type="password" name="password" placeholder="Password" required>
                    </div>
                    <!--  -->
                    <!-- confirm_password -->
                    <div class="field">
                        <input type="password" name="confirm_password" placeholder="Confirm password" required>
                    </div>
                    <!--  -->
                    <!-- button -->
                    <div class="field btn">
                        <div class="btn-layer"></div>
                        <input type="submit" name="submit" value="Signup">
                    </div>
                    <!--  -->
                </form>
                

            </div>
        </div>
    </div>
    <!--  -->
   <!-- php script sign-up form -->
<?php 

if (isset($_POST['submit'])) {
    include("../dashboard/auth/config.php");

     // Check if the database connection is successful
     if (!$con) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    // Validate form input
    if (empty($first_name) || empty($last_name) || empty($email) || empty($number) || empty($gender) || empty($age) || empty($password) || empty($confirm_password)) {
        echo '<script type="text/javascript">alert("Please fill in all fields.");</script>';
        exit();
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo '<script type="text/javascript">alert("Invalid email format.");</script>';
        exit();
    }

    if ($password != $confirm_password) {
        echo '<script type="text/javascript">alert("Passwords do not match.");</script>';
        exit();
    }

    // Use Bcrypt for password hashing
    $password = password_hash($password, PASSWORD_BCRYPT);

    // Use prepared statement to prevent SQL injection
    $stmt = mysqli_prepare($con, "INSERT INTO custumer_sign_up (user_first_name, user_last_name, email, number, gender, age, password) VALUES (?, ?, ?, ?, ? ,? ,?)");

    // Bind parameters
    mysqli_stmt_bind_param($stmt, "sssssss", $first_name, $last_name, $email, $number, $gender, $age, $password);

    // Execute the statement
    $result = mysqli_stmt_execute($stmt);

    if ($result) {
        echo '<script type="text/javascript"> 
                    alert("Your Account Created Successfully");
                    window.location.href="index.php"; 
                </script>';
                // After successful sign-up or login
        $_SESSION['email'] = $email;
    } else {
        echo '<script type="text/javascript">alert("Account Not Created");</script>';
    }

    // Close the statement
    mysqli_stmt_close($stmt);
}


// After successful sign-up or login

?>


    <script src="assets/js/form.js"></script>

</body>

</html>
