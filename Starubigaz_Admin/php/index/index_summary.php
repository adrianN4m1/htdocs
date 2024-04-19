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
$start_date = $_GET['start_date'];
$end_date = $_GET['end_date'];
$user_id = $_GET['user_id'];

// Modify your SQL query to filter transactions based on the date range
$sql = "SELECT DATE(t.transaction_date) AS date, 
               SUM(oi.quantity * oi.price) AS overall_revenue,
               SUM(oi.quantity * p.base_price) AS overall_revenue_bprice
        FROM transactions t
        INNER JOIN orders o ON t.order_id = o.order_id
        INNER JOIN order_items oi ON o.order_id = oi.order_id
        INNER JOIN products p ON oi.product_id = p.product_id
        INNER JOIN branches b ON o.branch_id = b.branch_id
        WHERE t.transaction_date BETWEEN '$start_date' AND '$end_date'
        AND b.branch_id IN (SELECT branch_id FROM branch_customer WHERE b.user_id = $user_id)
        GROUP BY DATE(t.transaction_date)";

$result = mysqli_query($conn, $sql);

$data = array();

// Fetch data and format it according to JSON structure
while ($row = mysqli_fetch_assoc($result)) {
    $data[] = array(
        'date' => date('m-d', strtotime($row['date'])),
        'overall revenue of price in order_id' => $row['overall_revenue'],
        'overall revenue of price in order_id but bprice' => $row['overall_revenue_bprice']
    );
}

// Close database connection
mysqli_close($conn);

// Encode data as JSON
$json_data = json_encode(array(
    'data' => $data
));

// Output JSON
header('Content-Type: application/json');
echo $json_data;
?>