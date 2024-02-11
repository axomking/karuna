<?php
// Check if form data is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $address = $_POST["address"];

    // Create CSV content
    $csvContent = "Name,Email,Phone,Address\n";
    $csvContent .= '"' . $name . '","' . $email . '","' . $phone . '","' . $address . '"' . "\n";

    // Set CSV file name
    $fileName = "formData.csv";

    // Output CSV file as attachment
    header("Content-type: text/csv");
    header("Content-Disposition: attachment; filename=$fileName");
    echo $csvContent;
    exit();
} else {
    // Redirect if form data is not submitted
    header("Location: index.html");
    exit();
}
?>
