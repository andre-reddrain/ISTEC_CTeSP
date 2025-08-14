<?php
include 'connection.php';
header("Content-Type: application/json");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Melhods:GET POST PATCH PUT DELETE");

$method = $_SERVER['REQUEST_METHOD'];

switch ($method) {
    case 'GET':
        if (isset($_GET['id'])) {
            $id = intval($_GET['id']);
            $sql = "SELECT * FROM produtos WHERE id=:id;";
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
            $stmt->execute();

            $produtos = $stmt->fetchAll();
            $stmt->closeCursor();
            $stmt = $pdo->prepare("call sp_dois(:idcli,@total)");
            $stmt->bindParam(':idcli', $id, PDO::PARAM_INT);
            $stmt->execute();
            $total = $pdo->query("select @total as Total")->fetchColumn();
            $produtos['total'] = $total;
            echo json_encode($produtos);
        } else {
            $sql = "SELECT * FROM produtos;";
            $stmt = $pdo->prepare($sql);
            $stmt->execute();
            $produtos = $stmt->fetchAll();
            echo json_encode($produtos);
        }
        http_response_code(200);
        $stmt->closeCursor();
        break;
    case 'POST':
        $input = json_decode(file_get_contents('php://input'), true);
        $nome = $input['nome'];
        $preco = $input['preco'];
        $categoria = $input['categoria'];
        $sql = "INSERT INTO produtos (nome, preco, categoria) VALUES (:nome,:preco,:categoria);";
        $stmt = $pdo->prepare($sql);
        $ok = $stmt->execute([':nome' => $nome, ':preco' => $preco, ':categoria' => $categoria]);
        $total = $stmt->rowCount();
        if ($total > 0) {
            http_response_code(201);
            echo "Inserido com sucesso";
        } else
            echo 'não inserido';
        $stmt->closeCursor();
        break;
    case 'PUT':
    case 'PATCH':
        $input = json_decode(file_get_contents('php://input'), true);
        $sql = "UPDATE produtos SET nome=:nome, preco=:preco, categoria=:categoria where id=:id;";
        $stmt = $pdo->prepare($sql);
        $ok = $stmt->execute([':nome' => $input['nome'], ':preco' => $input['preco'], ':categoria' => $input['categoria'], ':id' => $input['id']]);
        $total = $stmt->rowCount();
        $stmt->closeCursor();
        if ($total > 0) {
            http_response_code(200);
            echo "Registo Editado com sucesso. ID::" . $input['id'];
        } else {
            http_response_code(400);
            echo "Registo não foi Editado. ID::" . $input['id'];
        }
        break;

    case 'DELETE':
        $input = json_decode(file_get_contents('php://input'), true);
        $sql = "DELETE FROM produtos WHERE id=:id;";
        $stmt = $pdo->prepare($sql);
        $ok = $stmt->execute([':id' => $input['id']]);
        $total = $stmt->rowCount();
        $stmt->closeCursor();
        if ($total > 0) {
            http_response_code(200);
            echo "Registo Apagado com sucesso. ID::" . $input['id'];
        } else {
            http_response_code(400);
            echo "Registo não foi apagado. ID::" . $input['id'];
        }
        break;
    default:
        http_response_code(404);
        echo json_encode(['msg' => "Metodo errado"]);

}