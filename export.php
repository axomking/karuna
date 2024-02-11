<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST['name'];
    $email = $_POST['email'];

    // Create CSV string
    $csvData = "Name,Email\n";
    $csvData .= '"' . $name . '","' . $email . '"';

    // Set headers for CSV download
    header("Content-type: text/csv");
    header("Content-Disposition: attachment; filename=formData.csv");
    header("Pragma: no-cache");
    header("Expires: 0");

    // Output CSV data
    echo $csvData;
    exit;
}
?>
