<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$database = "strarubigazV2";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Query to retrieve product types
$sql = "SELECT DISTINCT Prod_type FROM products p INNER JOIN inventory i ON p.product_id = i.product_id WHERE i.inv_type = 1";
$result = $conn->query($sql);

// Display select box
echo '<select id="typeSelect" class="d-xxl-flex justify-content-xxl-end" style="
                    color: var(--bs-blue);
                    border-color: var(--bs-blue);
                    border-radius: 2px;
                    font-size: 16px;
                    padding: 4px;
                    padding-right: 24px;
                  ">';
// Add an option for selecting all product types
echo '<option value="">All Type</option>';
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo '<option value="' . $row["Prod_type"] . '">' . $row["Prod_type"] . '</option>'; // Corrected to use Prod_type
    }
} else {
    echo '<option value="" selected>All Type</option>'; // Set default option to "All Type"
}

echo '</select>';

// Close the database connection
$conn->close();
?>


<script>
    // JavaScript to update URL with selected product type
    document.getElementById('typeSelect').addEventListener('change', function () {
        var prodType = this.value; // Get the selected product type
        var urlParams = new URLSearchParams(window.location.search); // Get URL parameters
        if (prodType !== "") {
            urlParams.set('Prod_type', prodType); // Set Prod_type parameter in URL
        } else {
            urlParams.delete('Prod_type'); // Remove Prod_type parameter from URL
        }
        var newUrl = window.location.pathname + '?' + urlParams.toString(); // Construct new URL
        history.pushState(null, '', newUrl); // Update URL without reloading the page
    });

    // Set default product type to empty if no option is selected
    document.addEventListener('DOMContentLoaded', function () {
        var typeSelect = document.getElementById('typeSelect');
        if (!typeSelect.value) {
            typeSelect.value = '';
        }
    });
</script>
