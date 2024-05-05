<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "strarubigazV2";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get the user_id from the $_GET parameter (consider using prepared statements for security)
$branch_id = !empty($_GET['branch_id']) ? $_GET['branch_id'] : null;

// Initialize a condition variable for the branch filter
$branchCondition = "";

// Check if branch_id is not null
if ($branch_id !== null) {
    $branchCondition = "AND b.branch_id = ?";
}

// Get the current month and year
$currentMonth = date('m', strtotime('last month'));
$currentYear = date('Y');

// Prepare SQL statement (consider using prepared statements for security)
$sql = "SELECT u.user_id, u.username, u.user_reward_pts, SUM(t.points) AS total_points_redeemed
        FROM users u
        LEFT JOIN transactions t ON u.user_id = t.user_id AND t.transaction_type = 'Redeem'
        LEFT JOIN branch_customer b ON b.user_id = u.user_id
        WHERE YEAR(t.transaction_date) = ? AND MONTH(t.transaction_date) = ?
        $branchCondition
        GROUP BY u.user_id
        ORDER BY total_points_redeemed DESC
        LIMIT 5";

$stmt = $conn->prepare($sql);

// Bind parameters (consider using prepared statements for security)
if ($branch_id !== null) {
    $stmt->bind_param("iii", $currentYear, $currentMonth, $branch_id);
} else {
    $stmt->bind_param("ii", $currentYear, $currentMonth);
}

$stmt->execute();
$result = $stmt->get_result();

// Display the results of the SQL query
if ($result->num_rows > 0) {
    // Output data of each row
    $rank = 1;
    while ($row = $result->fetch_assoc()) {
        echo "<tr style='text-align: center; background: rgba(255, 255, 71, " . (0.6 - ($rank * 0.1)) . ");'>";
        echo "<td style='font-size: 20px;font-weight: bold;text-align: center;'>" . $rank . "</td>";
        echo "<td>" . $row["user_id"] . "</td>";
        echo "<td>" . $row["username"] . "</td>";
        echo "<td style='color: var(--bs-table-color);'>" . $row["user_reward_pts"] . "</td>";
        echo "</tr>";
        $rank++;
    }
} else {
    echo "0 results";
}

// Close statement and connection
$stmt->close();
$conn->close();
?>
