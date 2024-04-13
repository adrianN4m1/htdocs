<?php

// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$database = "strarubigazv2";

$conn = new mysqli($servername, $username, $password, $database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Function to sanitize input data
function sanitize($input) {
    global $conn;
    return mysqli_real_escape_string($conn, trim($input));
}
// Handle login form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = sanitize($_POST["email"]);
    $password = sanitize($_POST["password"]);

    // Fetch user from database
    $sql = "SELECT * FROM users WHERE email='$username' AND password='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        // User found, fetch user details
        $row = $result->fetch_assoc();

        // Redirect user based on role
        switch ($row["role"]) {
            case 'Super Admin':
                echo '<script>window.location.href = "http://localhost/Super_Admin_V_4_0/index.php";</script>';
                break;
            case 'Admin':
                '<script>window.location.href = "http://localhost/Starubigaz_Admin/index.php";</script>';
                break;
            case 'Customer':
                header("Location: customer_dashboard.php");
                break;
            default:
                echo "Invalid role.";
        }

        // End script execution
        exit();
    } else {
        echo "Invalid username or password.";
    }
}
?>
