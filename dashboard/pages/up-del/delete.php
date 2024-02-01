<?php
// Include your database configuration file
include"../../auth/config.php";

// Check if 'delete' parameter is present in the URL and it is a valid number
if (isset($_GET['delete']) && is_numeric($_GET['delete'])) {
    // Sanitize the input to prevent SQL injection
    $deleteID = mysqli_real_escape_string($con, $_GET['delete']);

    // Delete data from the database
    $deleteQuery = "DELETE FROM services WHERE id = '$deleteID'";
    $deleteResult = mysqli_query($con, $deleteQuery);

    if ($deleteResult) {
        echo '<script type="text/javascript">
            alert("Service deleted successfully");
            window.location.href = "../services.php"; // Redirect to your desired page
        </script>';
    } else {
        echo '<script type="text/javascript">
            alert("Error deleting service");
        </script>';
    }
}
// Close the database connection
mysqli_close($con);
