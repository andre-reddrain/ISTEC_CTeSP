<?php
// Data to send
$data = [
    'name'=>'Tio PAtinhas',
    'email' => 'patinhas@gmail.com'
];

// Convert to URL-encoded string
$postData = http_build_query($data);




// Initialize cURL
$ch = curl_init('http://localhost:8081/Final/srv.php');

// Set cURL options
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $postData);
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'Content-Type: application/x-www-form-urlencoded'
]);

// Execute and capture response
$response = curl_exec($ch);

// Check for errors
if (curl_errno($ch)) {
    echo 'cURL error: ' . curl_error($ch);
} else {
    echo 'Response: ' . $response;
}

// Close connection
curl_close($ch);

