<?php

$dados =['idcli'=>3];
$c= curl_init("http://localhost:8081/Final/servico.php");
$dados = json_encode($dados,true);
curl_setopt($c, CURLOPT_CUSTOMREQUEST,'DELETE');
curl_setopt($c, CURLOPT_POSTFIELDS,$dados);
curl_setopt($c,CURLOPT_RETURNTRANSFER,true);
$message= curl_exec($c);
curl_close($c);
echo $message;
