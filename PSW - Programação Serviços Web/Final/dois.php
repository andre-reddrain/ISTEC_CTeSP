<?php

include 'cnn.php';
// $idcli =3;
// if(isset($_REQUEST['id'])){
//   $idcli= intval($_REQUEST['id']);
// }
// $sql ="select * from clientes where idcli = :idcli";
// $stmt =$pdo->prepare($sql);

// $stmt->execute([':idcli'=>$idcli]);
// $registo = $stmt->fetch();
// print_r($registo);

// $idcli =3;
// if(isset($_REQUEST['id'])){
//   $idcli= intval($_REQUEST['id']);
// }
// $sql ="select * from clientes where idcli = ?";
// $stmt =$pdo->prepare($sql);

// $stmt->execute([$idcli]);
// $registo = $stmt->fetch();
// print_r($registo);

$idcli =3;
if(isset($_REQUEST['id'])){
  $idcli= intval($_REQUEST['id']);
}
$sql ="select * from clientes where idcli = :idcli";
$stmt =$pdo->prepare($sql);
$stmt->bindParam(':idcli',$idcli, PDO::PARAM_INT);
$stmt->execute();
$registo = $stmt->fetch();
print_r($registo);