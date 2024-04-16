<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "strarubigazv2";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$iduser = isset($_GET['user_id']) ? $_GET['user_id'] : null;

// Prepare and execute query to fetch transaction records with order details
$sql = "SELECT DISTINCT t.transaction_date, t.transaction_id, o.order_id, o.order_date, t.points, rc.reward_id,rc.claim_id
        FROM transactions t
        LEFT JOIN orders o ON t.order_id = o.order_id
        LEFT JOIN reward_claims rc ON t.claim_id = rc.claim_id
        LEFT JOIN order_items oi ON o.order_id = oi.order_id
        LEFT JOIN products p ON oi.product_id = p.product_id
        WHERE t.user_id = $iduser
        ORDER BY t.transaction_date DESC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        $order_id = $row['order_id'];
        $claim_id = $row['claim_id'];
        $order_date = $row['transaction_date'];
        $point = $row['points'];
        $transaction_id = $row['transaction_id'];
        echo '<tr>
                <td>' . $order_date . '</td>
                <td>' . $transaction_id . '</td>';
        
        $total_price = 0;
        $stmt = $conn->prepare("SELECT SUM(quantity * price) AS total_price FROM order_items WHERE order_id = ?");
        $stmt->bind_param("i", $order_id);
        $stmt->execute();
        $result_total_price = $stmt->get_result();
        if ($result_total_price->num_rows > 0) {
            $row_total_price = $result_total_price->fetch_assoc();
        }
        $stmt->close();
        echo '<td>P' . number_format($row_total_price['total_price'], 2) . '</td>';

        if ($row['reward_id']) {
            echo '<td style="color: var(--bs-red);">-' . number_format($point, 2) . '</td>';
        } else {
            echo '<td style="color: var(--bs-green);">+' . number_format($point, 2) . '</td>';
        }

        // Display receipt button with data attribute for the modal ID
        $modal_id = "receipt-modal-" . ($order_id ? $order_id : $claim_id);
        echo '<td class="text-center">
                <button class="btn" type="button" style="border-style: none;" data-bs-target="#' . $modal_id . '" data-bs-toggle="modal">
                    <i class="fas fa-receipt"></i>&nbsp;Receipt
                </button>
              </td>';
        echo '</tr>';

        // Generate the modal HTML for each transaction
        echo '<div class="modal fade" role="dialog" tabindex="-1" id="' . $modal_id . '">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Receipt - ' . ($order_id ? $order_id : $claim_id) . '</h4>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div>
                                            <p>Order ID:&nbsp;<span>' . ($order_id ? $order_id : $claim_id) . '</span></p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div>
                                            <p>Date:&nbsp;<span>' . $order_date . '</span></p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div>
                                            <p>Points:&nbsp;<span>' . number_format($point, 2) . '</span></p>
                                        </div>
                                    </div>
                                    <hr>
                                    <h6 style="margin-bottom: 0px;">Order Summary</h6>
                                    <div class="receipt-contents" style="height: 50vh;overflow-y: scroll;">
                                        <div>
                                            <hr>
                                            <h6 class="text-end" style="font-weight: bold;">Price</h6>
                                        </div>';
                                        // include("php/transaction/display_loop.php");
                                    echo '</div>
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

$conn->close();
?>
