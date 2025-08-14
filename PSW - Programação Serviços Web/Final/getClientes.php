<?php
$c = curl_init();
$url = "http://localhost:8081/Final/servico.php";

curl_setopt($c, CURLOPT_URL, $url);
curl_setopt($c, CURLOPT_RETURNTRANSFER, true);
$message = curl_exec($c);
if (curl_errno($c)) {
    echo "Erro: " . curl_error($c);
}
$dados = json_decode($message);
echo "<table border='1' cellpadding='12px' ><tr><td>idcli</td><td>nome</td><td>datanasc</td><td>categoria</td></tr>";
foreach ($dados as $item) {
    echo "<tr><td>$item->idcli</td><td>$item->nome</td><td>$item->datanasc</td><td>$item->categoria</td></tr>";
}
echo "</table>";
curl_close($c);


