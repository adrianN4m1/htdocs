<?php
// Establish database connection
$servername = "localhost";
$username = "root";
$password = "";
$database = "strarubigazv2"; // Replace with your actual database name
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $productName = $_POST['product_name'];
    $prodType = $_POST['product_type'];
    $price = $_POST['price'];
    $basePrice = $_POST['price_base'];
    $supplierId = $_POST['supplier_id'];
    $expirationDate = $_POST['expiration_date'];
    $invStock = $_POST['inv_stock'];
    $productType = 1;
    $prodImage = $_FILES['prod_image']['name']; // Get image file name
    
    // Insert data into products table
    $sql = "INSERT INTO products (product_name, Prod_type, price, supplier_id, expiration_date, Product_Type, base_price, prod_image) 
            VALUES ('$productName', '$prodType', $price, $supplierId, '$expirationDate', $productType, $basePrice, '$prodImage')";

    if (mysqli_query($conn, $sql)) {
        // Save image file
        $targetDirectory = "images/";
        $targetFile = $targetDirectory . basename($_FILES["prod_image"]["name"]);
        move_uploaded_file($_FILES["prod_image"]["tmp_name"], $targetFile);
        
        // Get the last inserted product ID
        $lastProductId = mysqli_insert_id($conn);
        
        // Insert data into inventory table
        $invType = 1; // Assuming Inv_Type is always 1
        $sqlInventory = "INSERT INTO inventory (product_id, quantity, Inv_Type) VALUES ($lastProductId, $invStock, $invType)";
        
        if (mysqli_query($conn, $sqlInventory)) {
            // Redirect to success page or display success message
            echo '<script>alert("Product: ' . $productName . ' Registered!"); window.location.href = "' . $_SERVER['HTTP_REFERER'] . '";</script>';
            exit();
        } else {
            echo "Error: " . $sqlInventory . "<br>" . mysqli_error($conn);
        }
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

// Close connection
$conn->close();
?>
