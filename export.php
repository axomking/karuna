<?php
// Retrieve form data
$name = $_POST['name'] ?? '';
$email = $_POST['email'] ?? '';
$crbtCut = $_POST['crbtCut'] ?? '';
$song = $_POST['song'] ?? '';
$album = $_POST['album'] ?? '';
$language = $_POST['language'] ?? '';
$genre = $_POST['genre'] ?? '';
$trackDuration = $_POST['trackDuration'] ?? '';

// Create CSV content
$csvData = "Name,Email,Crbt Cut,Song,Album,Language,Genre,Track Duration\n";
$csvData .= "\"$name\",\"$email\",\"$crbtCut\",\"$song\",\"$album\",\"$language\",\"$genre\",\"$trackDuration\"\n";

// Set headers for CSV download
header('Content-Type: text/csv');
header('Content-Disposition: attachment; filename="formData.csv"');

// Output CSV data
echo $csvData;
