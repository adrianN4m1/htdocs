<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "strarubigazv2"; // Replace with your actual database name
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST["Edit_save"])) {
    $inv_id = $_POST['inv_id'];
    $prodimg = $_FILES['prodimg']['name'];
    $old_prodimg = $_POST['old_prodimage'];
    $prodname = $_POST['prodname'];
    $prodtype = $_POST['prodtype'];
    $price = $_POST['price'];
    $bprice = $_POST['bprice'];
    $expiration = $_POST['expiration'];
    $stocks = $_POST['stocks'];
    $inv_limit = $_POST['inv_limit'];

    // Update products table if relevant fields are not empty and have correct data type
    if (!empty($prodname) || !empty($prodtype) || !empty($price) || !empty($bprice) || !empty($expiration)) {
        $sql = "UPDATE products p
            INNER JOIN inventory i ON p.product_id = i.product_id
            SET ";
        $updates = [];
        if (!empty($prodname) && is_string($prodname)) {
            $updates[] = "p.product_name = '$prodname'";
        } elseif (!empty($prodname)) {
            echo '<script>alert("Error: Invalid input in Product Name"); window.location.href = "' . $_SERVER['HTTP_REFERER'] . '";</script>';
            exit();
        }
        if (!empty($prodtype) && is_string($prodtype)) {
            $updates[] = "p.Prod_type = '$prodtype'";
        } elseif (!empty($prodtype)) {
            echo '<script>alert("Error: Invalid input in Product type"); window.location.href = "' . $_SERVER['HTTP_REFERER'] . '";</script>';
            exit();
        }
        if (!empty($price) && is_numeric($price)) {
            $updates[] = "p.price = '$price'";
        } elseif (!empty($price)) {
            echo '<script>alert("Error: Invalid input in Product Price"); window.location.href = "' . $_SERVER['HTTP_REFERER'] . '";</script>';
            exit();
        }
        if (!empty($bprice) && is_numeric($bprice)) {
            $updates[] = "p.base_price = '$bprice'";
        } elseif (!empty($bprice)) {
            echo '<script>alert("Error: Invalid input in Product Base Price"); window.location.href = "' . $_SERVER['HTTP_REFERER'] . '";</script>';
            exit();
        }
        if (!empty($expiration)) {
            $expirationDate = date('Y-m-d', strtotime($expiration));
            $updates[] = "p.expiration_date = '$expirationDate'";
        }
        $sql .= implode(", ", $updates) . " WHERE i.inventory_id = '$inv_id'";
        $conn->query($sql);
    }

    if (!empty($stocks) || !empty($inv_limit)) {
        $sql = "UPDATE inventory SET ";
        $updates = [];
        if (!empty($stocks) && is_numeric($stocks)) {
            $updates[] = "quantity = '$stocks'";
        } elseif (!empty($stocks)) {
            echo '<script>alert("Error: Invalid input in Stocks."); window.location.href = "' . $_SERVER['HTTP_REFERER'] . '";</script>';
            exit();
        }
        if (!empty($inv_limit) && is_numeric($inv_limit)) {
            $updates[] = "inv_limit = '$inv_limit'";
        } elseif (!empty($inv_limit)) {
            echo '<script>alert("Error: Invalid input in Inventory limit"); window.location.href = "' . $_SERVER['HTTP_REFERER'] . '";</script>';
            exit();
        }
        $sql .= implode(", ", $updates) . " WHERE inventory_id = '$inv_id'";
        $conn->query($sql);
    }


    // Update product image if a new image is uploaded
    if (!empty($prodimg)) {
        // Handle file upload
        $targetDirectory = "images/";
        $targetFile = $targetDirectory . basename($_FILES["prodimg"]["name"]);
        if (file_exists($targetFile)) {
            echo '<script>alert("Image already exists!"); window.location.href = "' . $_SERVER['HTTP_REFERER'] . '";</script>';
            exit();
        }
        if (move_uploaded_file($_FILES["prodimg"]["tmp_name"], $targetFile)) {
            $sql = "UPDATE products p
                    INNER JOIN inventory i ON p.product_id = i.product_id
                    SET p.prod_image = '$prodimg'
                    WHERE i.inventory_id = '$inv_id'";
            $conn->query($sql);
            if (file_exists("images/" . $old_prodimg)) {
                unlink("images/" . $old_prodimg);
            }
        } else {
            echo '<script>alert("Error uploading image!"); window.location.href = "' . $_SERVER['HTTP_REFERER'] . '";</script>';
            exit();
        }
    }

    echo '<script>alert("Successful Edit!");window.location.href = "' . $_SERVER['HTTP_REFERER'] . '";</script>';
}

$conn->close();
?>