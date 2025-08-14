<?php

// Your data as a PHP array
$data = [
    'name' => 'Margarida',
    'email' => 'margarida@gmail.com'
];

// Encode the array to JSON
$jsonData = json_encode($data);



// Initialize cURL
$ch = curl_init('http://localhost:8081/Final/srv.php');

// Set cURL options
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonData);
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'Content-Type: application/json',
    'Content-Length: ' . strlen($jsonData)
]);

// Execute and get response
$response = curl_exec($ch);

// Check for errors
if (curl_errno($ch)) {
    echo 'cURL error: ' . curl_error($ch);
} else {
    echo 'Response: ' . $response;
}

// Close cURL
curl_close($ch);
