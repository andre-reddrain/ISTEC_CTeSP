<?php

// curl -X POST "http://localhost/srv.php \
//   -H "Content-Type: application/json" \
//   -d '{"name": "Alice", "email": "alice@example.com"}'";

$ch = curl_init();
curl_setopt($ch,CURLOPT_URL,"http://localhost/srv.php");
curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
$result = curl_exec($ch);
echo $result; 
curl_close($ch);