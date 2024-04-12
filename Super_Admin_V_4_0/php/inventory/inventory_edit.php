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

    // Update products table if relevant fields are not null
    if (!empty($prodname)) {
        $sql = "UPDATE products SET product_name='$prodname' WHERE product_id=(SELECT product_id FROM inventory WHERE inventory_id='$inv_id')";
        $conn->query($sql);
    }
    if (!empty($prodtype)) {
        $sql = "UPDATE products SET Prod_type='$prodtype' WHERE product_id=(SELECT product_id FROM inventory WHERE inventory_id='$inv_id')";
        $conn->query($sql);
    }
    if (!empty($price)) {
        $sql = "UPDATE products SET price='$price' WHERE product_id=(SELECT product_id FROM inventory WHERE inventory_id='$inv_id')";
        $conn->query($sql);
    }
    if (!empty($bprice)) {
        $sql = "UPDATE products SET base_price='$bprice' WHERE product_id=(SELECT product_id FROM inventory WHERE inventory_id='$inv_id')";
        $conn->query($sql);
    }
    if (!empty($expiration)) {
        $sql = "UPDATE products SET expiration_date='$expiration' WHERE product_id=(SELECT product_id FROM inventory WHERE inventory_id='$inv_id')";
        $conn->query($sql);
    }

    // Update inventory table if relevant fields are not null
    if (!empty($stocks)) {
        $sql = "UPDATE inventory SET quantity='$stocks' WHERE inventory_id='$inv_id'";
        $conn->query($sql);
    }
    // Update product image if a new image is uploaded
    if ($prodimg != '') {

        $update_filename = $prodimg;
        if (file_exists("images/" . $_FILES['prodimg']['name'])) {
            $file_name = $_FILES['prodimg']['name'];

            echo '<script>alert("Image already Exist!"); window.location.href = "' . $_SERVER['HTTP_REFERER'] . '";</script>';
            exit();

        }
        $sqlimage = "UPDATE products SET prod_image='$update_filename' WHERE product_id=(SELECT product_id FROM inventory WHERE inventory_id='$inv_id')";
    $conn->query($sqlimage);
    if (mysqli_query($conn, $sqlimage)) {
        if ($_FILES['prodimg']['name'] != '') {
            $targetDirectory = "images/";
            $targetFile = $targetDirectory . basename($_FILES["prodimg"]["name"]);
            move_uploaded_file($_FILES["prodimg"]["tmp_name"], $targetFile);
            if (file_exists("images/".$old_prodimg)) {
                unlink("images/".$old_prodimg);
            }
        }
        echo '<script>alert("Succesful Edit!");window.location.href = "' . $_SERVER['HTTP_REFERER'] . '";</script>';

    }
    } else {

        $update_filename = $old_prodimg;
        echo '<script>alert("Succesful Edit!");window.location.href = "' . $_SERVER['HTTP_REFERER'] . '";</script>';
    }

    
}

$conn->close();
?>