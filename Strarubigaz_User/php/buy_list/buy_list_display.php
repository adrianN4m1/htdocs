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

// Prepare and execute the SQL query to fetch the products and their inventory details
$stmt = $conn->prepare("SELECT p.product_id, p.product_name, p.prod_image ,p.Prod_type, i.quantity, i.Inv_Type FROM products p JOIN inventory i ON p.product_id = i.product_id WHERE inv_type = 1 ;");
$stmt->execute();

// Store the result
$result = $stmt->get_result();

// Check if there are any products
if ($result->num_rows > 0) {
    // Output data of each row
    while($row = $result->fetch_assoc()) {
        echo '
        <div class="col-md-3" style="padding-bottom: 20px;">
            <div class="d-xl-flex justify-content-xxl-center align-items-xxl-center" style="height: 200px;background: rgba(197,197,197,0.19);border-radius: 10px;"><img class="border rounded border-1" style="height: 100%;" src="/Super_Admin_V_4_0/php/inventory/images/' . $row["prod_image"] . '"></div>
            <div>
                <h6 style="font-weight: bold;color: var(--bs-gray-700);padding-top: 10px;">' . $row["product_name"] . '</h6>
            </div>
            <div class="d-flex justify-content-between justify-content-xxl-end">
                <div class="d-inline"><span style="font-size: 9px;color: rgb(193,193,193);">Items available :&nbsp;</span><span style="font-weight: bold;">' . $row["quantity"] . '</span></div>
            </div>
            <div class="row">
                <div class="col col-md5"><a class="btn btn-primary" role="button" style="padding-right: 10px;padding-left: 10px;background: var(--bs-btn-active-bg);color: rgb(255,255,255);border-style: none;border-radius: 10px;width: 100%;margin-top: 10px;font-size: 12px;--bs-body-font-weight: normal;" href="item_information.php?product_id=' . $row["product_id"] . '">Check Item</a></div>
            </div>
        </div>
        ';
    }
} else {
    echo "No products found.";
}

// Close the database connection
$conn->close();
?>