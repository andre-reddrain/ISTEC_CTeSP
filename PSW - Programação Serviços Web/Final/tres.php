<?php

include 'cnn.php';
$sql ="insert into clientes (nome,datanasc,categoria)values (:nome,:datanasc,:categoria);";
$stmt = $pdo->prepare($sql);
$ok=$stmt->execute([':nome'=>'Maga Min', ':datanasc'=>'1999-01-01','categoria'=>'bravo' ]);
$total = $stmt->rowCount();
echo "Afetou $total registos"; 