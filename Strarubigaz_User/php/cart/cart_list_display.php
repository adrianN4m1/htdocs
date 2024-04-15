<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "strarubigazv2";

$conn = new mysqli($servername, $username, $password, $database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$stmt = $conn->prepare("SELECT order_id FROM orders WHERE status = 'Pending' ORDER BY order_date DESC LIMIT 1");
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $order_id = $row['order_id'];
} else {
    echo "No orders found with 'Pending' status.";
    exit; // Exit the script if no pending order is found
}

// Prepare and execute the SQL query to fetch order items and product details
$stmt = $conn->prepare("SELECT oi.quantity, oi.price, p.product_name, p.prod_image FROM order_items oi JOIN products p ON oi.product_id = p.product_id WHERE oi.order_id = ?");
$stmt->bind_param("i", $order_id);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $quantity = $row['quantity'];
        $price = $row['price'];
        $product_name = $row['product_name'];
        $prod_image = $row['prod_image'];

        echo '
        
        <div class="row" style="padding-top: 12px;padding-right: 20px;padding-left: 20px;padding-bottom: 20px;margin-bottom: -20px;">
            <div class="col">
                <div class="row">
                    <div class="col col-md-3" style="text-align: center;">
                            <div style="width: 100%;height: 100%;"><img src="/Super_Admin_V_4_0/php/inventory/images/' . $prod_image . '" style="border-radius: 10px;width: 100%;height: 100%;" height="600px"></div>
                        </div>
                        <div class="col">
                            <h4>' . $product_name . '</h4>
                            <p class="d-inline">Quantity :&nbsp;</p><span>' . $quantity . '</span>
                            <div class="d-flex justify-content-between align-items-xxl-center" style="padding-top: 0px;">
                                <p class="d-inline" style="font-size: 20px;font-weight: bold;margin-top: 20px;"><i class="fab fa-galactic-republic"></i>&nbsp;' . $price * $quantity . '</p><a href="#" style="color: var(--bs-red);font-size: 12px;text-decoration: underline;">remove</a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <hr>
                        </div>
                    </div>
                </div>
            </div>';
    }
} else {
    echo "No order items found for the given order ID.";
}
$conn->close();
?>