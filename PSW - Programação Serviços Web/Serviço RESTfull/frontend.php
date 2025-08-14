<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Online Shop</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
</head>

<?php

#region Código PHP
$params = [];
// Modificar isto tudo!
if (isset($_POST['input_id']))
    $params['id'] = intval($_POST['input_id']);
if (isset($_POST['input_nome']))
    $params['nome'] = strval($_POST['input_nome'] ?? '');
if (isset($_POST['input_preco']))
    $params['preco'] = strval($_POST['input_preco']);
if (isset($_POST['input_categoria']))
    $params['categoria'] = strval($_POST['input_categoria']);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $url = "http://localhost/RESTFull/service.php";
    $action = $_POST['action'];

    // var_dump($params['id']); // Sempre 0 caso não selecionado

    if ($params['id'] == 0) {
        // INSERT
        if ($action == 'inserir' && $params['nome'] !== '' && $params['preco'] !== '') {
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
                $status = "error";
                $message = "Erro: " . curl_error($ch);
            } else {
                $status = "success";
                $message = http_response_code() . " - Produto inserido com sucesso!";
            }
            curl_close($ch);
        } else if ($action == 'apagar' || $action == 'editar') {
            $status = "error";
            $message = "Erro: Produto não selecionado.";
        }
    } else {
        // DELETE
        if ($action == 'apagar' && isset($params['id'])) {
            $jsonData = json_encode(['id' => $params['id']], true);
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
                $status = "error";
                $message = "Erro: " . curl_error($ch);
            } else {
                $status = "success";
                $message = http_response_code() . " - Produto apagado com sucesso!";
            }
            curl_close($ch);

        }

        // UPDATE
        if ($action == 'editar' && isset($params['id'])) {
            $jsonData = json_encode($params, true);
            // echo $jsonData;
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
                $status = "error";
                $message = "Erro: " . curl_error($ch);
            } else {
                $status = "success";
                $message = http_response_code() . " - Produto editado com sucesso!";
            }
            curl_close($ch);
        }
    }
}
#endregion
?>

<body class="bg-light">
    <div id="server-msg" data-status="<?php echo $status ?? ''; ?>" data-message="<?php echo $message ?? ''; ?>"></div>

    <div id="alert-container" class="container mt-3" style="display: none;">
        <div id="alert-box" class="alert" role="alert"></div>
    </div>

    <div class="container py-3">
        <div class="text-center mb-4">
            
            <i class="bi bi-cart4 fs-1 text-primary"></i>
            <h1 class="mt-2">PSW - Loja Online</h1>
        </div>
        <div class="card shadow">
            <div class="card-body">
                <form id="productForm" action="#" method="POST">
                    <div class="mb-3">
                        <input type="hidden" name="input_id" id="input_id">
                        <label for="input_nome" class="form-label">Nome</label>
                        <input type="text" class="form-control" name="input_nome" id="input_nome" autocomplete="off">
                    </div>
                    <div class="mb-3">
                        <label for="input_preco" class="form-label">Preço</label>
                        <input type="number" class="form-control" id="input_preco" name="input_preco" step="0.01" autocomplete="off">
                    </div>
                    <div class="mb-3">
                        <label for="input_categoria" class="form-label">Categoria</label>
                        <select class="form-select" id="input_categoria" name="input_categoria">
                            <option value="Eletrônica">Eletrônica</option>
                            <option value="Vestuário">Vestuário</option>
                            <option value="Comida">Comida</option>
                            <option value="Higiene">Higiene</option>
                            <option value="Outros">Outros</option>
                        </select>
                    </div>
                    <div class="d-flex justify-content-center flex-wrap gap-2">
                        <button type="submit" class="btn btn-primary" value="inserir" name="action">Inserir</button>
                        <button type="submit" class="btn btn-danger" value="apagar" name="action">Apagar</button>
                        <button type="submit" class="btn btn-warning text-white" value="editar" name="action">Editar</button>
                        <button type="reset" class="btn btn-secondary" value="editar" name="action">Reset</button>
                    </div>
                </form>
                <br>
                <div class="text-center mb-3">
                    <a href="http://localhost/RESTFull/service.php" target="_blank" class="link-secondary">Testar Serviço</a>
                </div>

                <!-- Tabela -->
                <div class="table-responsive">
                    <table class="table table-bordered table-striped align-middle text-center">
                        <thead class="table-light">
                            <tr>
                                <th>ID</th>
                                <th>Nome</th>
                                <th>Preço</th>
                                <th>Categoria</th>
                                <th>Ações</th>
                            </tr>
                        </thead>
                        <tbody id="t"></tbody>
                    </table>
                </div>

                <script>
                    const msgDiv = document.getElementById("server-msg");
                    window.onload = function () {
                        fetch("http://localhost/RESTFull/service.php").then(response => response.json()).then(dados => {
                            // Preparação das Linhas da tabela
                            let linhas = dados.map(v => "<tr><td>" + v.id + "</td><td>" + v.nome + "</td><td>" + v.preco + "</td><td>" + v.categoria + "</td><td>" + botao() + "</td></tr>");
                            let t = document.getElementById("t");
                            t.innerHTML = linhas.join(" ");

                            // Botões de Selecionar
                            document.querySelectorAll("[name='btnedit']").forEach(button => {
                                button.addEventListener('click', function () {
                                    const row = this.closest('tr');
                                    const textos = Array.from(row.querySelectorAll('td')).map(td => td.textContent.trim());
                                    document.getElementById("input_id").value = textos[0];
                                    document.getElementById("input_nome").value = textos[1];
                                    document.getElementById("input_preco").value = textos[2];
                                    document.getElementById("input_categoria").value = textos[3];
                                });
                            });
                        }).catch();
                    };

                    function botao() {
                        return "<button class='btn btn-success btn-sm' type='button' name='btnedit'><i class='bi bi-pen'></i></button>";
                    }

                    if (msgDiv) {
                        const status = msgDiv.getAttribute("data-status");
                        const message = msgDiv.getAttribute("data-message");

                        if (message) {
                            const alertBox = document.getElementById("alert-box");
                            const alertContainer = document.getElementById("alert-container");

                            alertContainer.style.display = "block";
                            alertBox.className = "alert"; // reset
                            alertBox.classList.add(status === "success" ? "alert-success" : "alert-danger");
                            alertBox.innerText = message;

                            setTimeout(() => {
                                alertContainer.style.display = "none";
                            }, 4000);
                        }
                    }
                </script>
            </div>
        </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

