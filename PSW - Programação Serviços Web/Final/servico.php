<?php
include 'cnn.php';
header("Content-Type: application/json");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods:GET POST PATCH PUT DELETE");

$metodo = $_SERVER['REQUEST_METHOD'];
switch ($metodo) {
    case 'GET':
        if (isset($_GET['id'])) {
            $id = intval($_GET['id']);
            $sql = "select * from clientes where idcli=:id;";
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
            $stmt->execute();
            $registos = $stmt->fetchAll();
            $stmt->closeCursor();
            $stmt = $pdo->prepare("call sp_dois(:idcli,@total)");
            $stmt->bindParam(':idcli', $id, PDO::PARAM_INT);
            $stmt->execute();
            $total = $pdo->query("select @total as Total")->fetchColumn();
            $registos['total'] = $total;
            echo json_encode($registos);
        } else {
            $sql = "select * from clientes;";
            $stmt = $pdo->prepare($sql);
            $stmt->execute();
            $registos = $stmt->fetchAll();
            echo json_encode($registos);
        }
        http_response_code(200);
        $stmt->closeCursor();
        break;
    case 'POST':
        $input = json_decode(file_get_contents('php://input'), true);
        $nome = $input['nome'];
        $categoria = $input['categoria'];
        $datanasc = $input['datanasc'];
        $sql = "insert into clientes (nome,categoria,datanasc)values(:nome,:categoria,:datanasc);";
        $stmt = $pdo->prepare($sql);
        $ok = $stmt->execute([':nome' => $nome, ':categoria' => $categoria, ':datanasc' => $datanasc]);
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
        $sql = "update clientes set nome=:nome, categoria=:categoria , datanasc=:datanasc where idcli=:idcli;";
        $stmt = $pdo->prepare($sql);
        $ok = $stmt->execute([':nome' => $input['nome'], ':categoria' => $input['categoria'], ':datanasc' => $input['datanasc'], ':idcli' => $input['idcli']]);
        $total = $stmt->rowCount();
        $stmt->closeCursor();
        if ($total > 0) {
            http_response_code(200);
            echo "Registo Editado com sucesso. ID::" . $input['idcli'];
        } else {
            http_response_code(400);

            echo "Registo não foi Editado. ID::" . $input['idcli'];
        }
        break;

    case 'DELETE':
        $input = json_decode(file_get_contents('php://input'), true);
        $sql = "delete from clientes where idcli=:idcli;";
        $stmt = $pdo->prepare($sql);
        $ok = $stmt->execute([':idcli' => $input['idcli']]);
        $total = $stmt->rowCount();
        $stmt->closeCursor();
        if ($total > 0) {
            http_response_code(200);
            echo "Registo Apagado com sucesso. ID::" . $input['idcli'];
        } else {
            http_response_code(400);
            echo "Registo não foi apagado. ID::" . $input['idcli'];

        }
        break;
    default:
        http_response_code(404);
        echo json_encode(['msg' => "Metodo errado"]);

}