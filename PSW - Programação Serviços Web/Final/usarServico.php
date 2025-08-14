<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        br {
            margin: 22px;
        }
    </style>
</head>
<?php
$params = [];
if (isset($_POST['txtidcli']))
    $params['idcli'] = intval($_POST['txtidcli']);
if (isset($_POST['txtnome']))
    $params['nome'] = strval($_POST['txtnome'] ?? '');
if (isset($_POST['txtdatanasc']))
    $params['datanasc'] = strval($_POST['txtdatanasc']);
if (isset($_POST['txtcategoria']))
    $params['categoria'] = strval($_POST['txtcategoria']);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $url = "http://localhost:8081/Final/servico.php";
    $action = $_POST['action'];


    if ($action == 'inserir' && $params['nome'] !== '' && $params['idcli'] == 0) {
        $ch = curl_init();
        $data = json_encode($params);
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            'Content-Type: application/json',
            'Content-Length: ' . strlen($data)
        ]);
        $response = curl_exec($ch);
        if (curl_errno($ch)) {
            echo 'Erro' . curl_erro($ch);
        } else {
            echo "Response Code::" . http_response_code() ."<br>";
            echo $response;
        }
        curl_close($ch);
    }//inserir
    if ($action == 'apagar' && isset($params['idcli'])) {
        $jsonData = json_encode(['idcli' => $params['idcli']], true);
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'DELETE');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonData);  // optional
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            'Content-Type: application/json',
            'Content-Length: ' . strlen($jsonData)
        ]);
        $response = curl_exec($ch);
        if (curl_errno($ch)) {
            echo 'Erro' . curl_erro($ch);
        } else {
            echo "Response Code::" . http_response_code() ."<br>";
            echo $response;
        }
        curl_close($ch);

    }//apagar
    if ($action == 'editar' && isset($params['idcli'])) {
        $jsonData = json_encode($params, true);
        echo $jsonData;
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PATCH');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonData);  // optional
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            'Content-Type: application/json',
            'Content-Length: ' . strlen($jsonData)
        ]);
        $response = curl_exec($ch);
        if (curl_errno($ch)) {
            echo 'Erro' . curl_erro($ch);
        } else {
            echo "Response Code::" . http_response_code() ."<br>";
            echo $response;
        }
        curl_close($ch);
    }//apagar

}

?>

<body>
    <form action="#" method="POST">
        <fieldset>
            <legend>Formulário</legend>
            <input type="hidden" name="txtidcli" id="txtidcli">
            <label>Nome</label>
            <input type="text" name="txtnome" id="txtnome">
            <p></p>
            <label>Data Nascimento </label>
            <input type="text" name="txtdatanasc" id="txtdatanasc">
            <p></p>
            <label>Categoria</label>
            <select name="txtcategoria" id="txtcategoria">
                <option>alfa</option>
                <option>bravo</option>
                <option>charlie</option>
            </select>
            <p></p>
            <div style="display:flex; justify-content:left;">
                <button style="margin:3px;" type="submit" value="inserir" name="action">Inserir</button>
                <button style="margin:3px;" type="submit" value="apagar" name="action">Apagar</button>
                <button style="margin:3px;" type="submit" value="editar" name="action">Editar</button>
                <button style="margin:3px;" type="reset" value="editar" name="action">Reset</button>

            </div>
            <p>
                <a href="http://localhost:8081/Final/servico.php">Serviço</a>
            </p>
            <table border="1" cellpadding="2" style="border-collapse: collapse;">
                <thead style="background-color:lightblue">
                    <th>id</th>
                    <th>Nome</th>
                    <th>Categoria</th>
                    <th>Data Nascimento</th>
                    <th>Select</th>
                </thead>
                <tbody id="t"></tbody>
            </table>

            <script>
                window.onload = function () {
                    fetch("http://localhost:8081/Final/servico.php").then(response => response.json()).then(dados => {
                        let linhas = dados.map(v => "<tr><td>" + v.idcli + "</td><td>" + v.nome + "</td><td>" + v.categoria + "</td><td>" + v.datanasc + "</td><td>" + botao() + "<td></tr>");
                        let t = document.getElementById("t");
                        t.innerHTML = linhas.join(" ");
                        document.querySelectorAll("[name='btedit']").forEach(button => {
                            button.addEventListener('click', function () {
                                const row = this.closest('tr');
                                const textos = Array.from(row.querySelectorAll('td')).map(td => td.textContent.trim());
                                console.log(textos);
                                document.getElementById("txtidcli").value = textos[0];
                                document.getElementById("txtnome").value = textos[1];
                                document.getElementById("txtcategoria").value = textos[2];
                                document.getElementById("txtdatanasc").value = textos[3];

                            });
                        });

                    }).catch();



                };

                function botao() {
                    return "<button type='button' name='btedit'  >Selecionar</button>";
                }


            </script>
</body>

</html>