<?php

include 'cnn.php';
$sql ="update clientes set nome =:nome where idcli =:idcli;";
$stmt = $pdo->prepare($sql);
$idcli=9;
$nome = 'Pata';
$stmt->bindParam(':idcli', $idcli,PDO::PARAM_INT );
$stmt->bindParam(':nome', $nome,PDO::PARAM_STR );
$ok=$stmt->execute();
$total = $stmt->rowCount();
echo "Afetou $total registos"; 