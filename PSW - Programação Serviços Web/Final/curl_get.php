<?php
$headers = [
  'Content-Type: application/json',
  "Access-Control-Allow-Origin: *"
];
$url ="http://localhost:8081/Final/srv.php";
$curl = curl_init();
if(isset($_GET['id'])) {
   $params=['id'=>$_GET['id']];
   $qry = http_build_query($params);
   $url =$url.  "?" . $qry;
}
echo $url;
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
curl_setopt($curl,CURLOPT_URL,$url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($curl);
$data = json_decode($result);

curl_close($curl);
if(is_array($data)){
   echo "<table border='1' spacing='0' style='border: 1px solid red; cell-spacing:0px;'><tr><td>id</td><td>nome</td><td>Email</td></tr>";
   foreach ($data as $item) {
      echo "<tr><td>$item->id</td><td>$item->name</td><td>$item->email</td></tr>";
   }
   echo "</table>";
}else{
   echo '<br>';
   echo $data->id .' - ' . $data->name . ' - ' . $data->email . "<br>";
}



