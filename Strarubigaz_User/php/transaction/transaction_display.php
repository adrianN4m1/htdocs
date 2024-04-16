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

// Prepare and execute query to fetch transaction records with order details
$sql = "SELECT t.transaction_date, t.transaction_id, o.order_id, o.order_date, t.points
        FROM transactions t
        INNER JOIN orders o ON t.order_id = o.order_id
        ORDER BY t.transaction_date DESC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        $transaction_id = $row['transaction_id'];
        $order_date = $row['order_date'];
        $point = $row['points'];
        echo '<tr>
                <td>' . $row['order_date'] . '</td>
                <td>' . $row['order_id'] . '</td>';
        $order_id = $row['order_id'];
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

        echo '<td style="color: var(--bs-green);">+' . number_format($row['points'], 2) . '</td>';

        // Display receipt button with data attribute for the modal ID
        $modal_id = "receipt-modal-" . $row['transaction_id'];
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
                            <h4 class="modal-title">Receipt - ' . $transaction_id . '</h4>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div>
                                            <p>Order ID:&nbsp;<span>' . $transaction_id . '</span></p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div>
                                            <p>Date:&nbsp;<span>' . $order_date . '</span></p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div>
                                            <p>Points Earned:&nbsp;<span>' . number_format($point, 2) . '</span></p>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="col-md-12">
                                        <div class="table-responsive">
                                            
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

$conn->close();
?>
