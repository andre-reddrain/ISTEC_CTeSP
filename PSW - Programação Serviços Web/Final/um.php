<?php
include 'cnn.php';
$sql ="select * from clientes;";
$registos = $pdo->query($sql)->fetchAll();
//echo json_encode($registos);

//print_r($registos);
foreach($registos as $item){
    echo $item['idcli'] . "<br>";
}