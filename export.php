<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $address = $_POST["address"];

    // Prepare data for CSV
    $data = array($name, $email, $phone, $address);

    // Open or create CSV file
    $file = fopen("formData.csv", "a");

    // Write data to CSV file
    fputcsv($file, $data);

    // Close CSV file
    fclose($file);

    // Optional: Redirect user back to the form or to a thank you page
    header("Location: index.html");
    exit();
}
?>
