<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "strarubigazv2";

// Get branch_id from the URL

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare and execute query to fetch transaction records with order details for users in the current branch
$sql = "SELECT DISTINCT t.transaction_date, t.transaction_id, o.order_id, o.order_date, t.points, rc.reward_id, u.username, bc.branch_id, r.reward_name
        FROM transactions t
        LEFT JOIN orders o ON t.order_id = o.order_id
        LEFT JOIN reward_claims rc ON t.claim_id = rc.claim_id
        LEFT JOIN order_items oi ON o.order_id = oi.order_id
        LEFT JOIN products p ON oi.product_id = p.product_id
        LEFT JOIN branch_customer bc ON t.user_id = bc.user_id
        LEFT JOIN users u ON t.user_id = u.user_id
        LEFT JOIN rewards r ON rc.reward_id = r.reward_id
        WHERE t.transaction_type='Redeem'
        ORDER BY t.transaction_date DESC";

$stmt = $conn->prepare($sql);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        echo '<tr>
                <td>' . $row['transaction_date'] . '</td>
                <td>' . $row['transaction_id'] . '</td>
                <td>' . $row['username'] . '</td>
                <td>' . $row['branch_id']. '</td>
                <td>' . $row['reward_name']. '</td>
                <td>' . number_format($row['points'], 2) . '</td>
            </tr>';

        // Generate the modal HTML for each transaction
       
    }
} else {
    echo "No transactions found.";
}

$stmt->close();
$conn->close();
?>
