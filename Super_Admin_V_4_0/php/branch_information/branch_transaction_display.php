<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "strarubigazv2";

// Get branch_id from the URL
$branch_id = $_GET['branch_id']; // Assuming branch_id is passed in the URL

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare and execute query to fetch transaction records with order details for users in the current branch
$sql = "SELECT DISTINCT t.transaction_date, t.transaction_id, o.order_id, o.order_date, t.points, rc.reward_id, u.username, SUM(oi.quantity * oi.price) AS total_amount
        FROM transactions t
        LEFT JOIN orders o ON t.order_id = o.order_id
        LEFT JOIN reward_claims rc ON t.claim_id = rc.claim_id
        LEFT JOIN order_items oi ON o.order_id = oi.order_id
        LEFT JOIN products p ON oi.product_id = p.product_id
        LEFT JOIN branch_customer bc ON t.user_id = bc.user_id
        LEFT JOIN users u ON t.user_id = u.user_id
        WHERE bc.branch_id = ? AND t.transaction_type='Purchase'
        GROUP BY t.transaction_id
        ORDER BY t.transaction_date DESC";


$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $branch_id);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        echo '<tr>
                <td>' . $row['transaction_id'] . '</td>
                <td>' . $row['transaction_date'] . '</td>
                <td>' . $row['username'] . '</td>
                <td>' . number_format($row['points'], 2) . '</td>
                <td>P' . number_format($row['total_amount'], 2) . '</td>
                <td><a class="btn btn-info btn-icon-split" role="button"
                        style="background: var(--bs-table-striped-color);border-style: none;"
                        data-bs-target="#receipt-modal-' . $row['transaction_id'] . '"
                        data-bs-toggle="modal"><span
                            class="text-white-50 icon"><i
                                class="fas fa-receipt"></i></span><span
                            class="text-white text">Receipt</span></a></td>
            </tr>';

        // Generate the modal HTML for each transaction
        echo '<div class="modal fade" role="dialog" tabindex="-1" id="receipt-modal-' . $row['transaction_id'] . '">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Receipt - ' . $row['transaction_id'] . '</h4>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div>
                                            <p>Order ID:&nbsp;<span>' . $row['order_id'] . '</span></p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div>
                                            <p>Date:&nbsp;<span>' . $row['order_date'] . '</span></p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div>
                                            <p>Points:&nbsp;<span>' . number_format($row['points'], 2) . '</span></p>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="col-md-12">
                                        <div class="table-responsive">
                                            <!-- Your table content here -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <!-- Your modal footer content here -->
                        </div>
                    </div>
                </div>
            </div>';
    }
} else {
    echo "No transactions found.";
}

$stmt->close();
$conn->close();
?>
