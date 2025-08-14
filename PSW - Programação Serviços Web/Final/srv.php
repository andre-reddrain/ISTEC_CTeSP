<?php
header("Content-Type: application/json");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE");

$method = $_SERVER['REQUEST_METHOD'];
$dataFile = "dados.json";

// Helper functions
function readData($file)
{
    return json_decode(file_get_contents($file), true);
}

function writeData($file, $data)
{
    file_put_contents($file, json_encode($data, JSON_PRETTY_PRINT));
}


switch ($method) {
    case 'GET':
        $data = readData($dataFile);
        if (isset($_GET['id'])) {
            $id = (int) $_GET['id'];
            foreach ($data as $item) {
                if ($item['id'] == $id) {
                    echo json_encode($item);
                    exit;
                }
            }
            echo json_encode(['message' => 'User not found']);
        } else {
            echo json_encode($data);
        }
        break;

    case 'POST':
        $input = json_decode(file_get_contents('php://input'), true);
        $data = readData($dataFile);
        $input['id'] = end($data)['id'] + 1;
        $data[] = $input;

        writeData($dataFile, $data);
        echo json_encode(['message' => 'User created', 'user' => $input]);
        break;

    case 'PUT':
        $input = json_decode(file_get_contents('php://input'), true);
        $data = readData($dataFile);
        $updated = false;
        foreach ($data as &$item) {
            if ($item['id'] == $input['id']) {
                $item = array_merge($item, $input);
                $updated = true;
                break;
            }
        }
        writeData($dataFile, $data);
        echo json_encode($updated ? ['message' => 'User updated'] : ['message' => 'User not found']);
        break;

    case 'DELETE':
        parse_str(file_get_contents("php://input"), $input);
        $data = readData($dataFile);
        $id = $input['id'] ?? null;
        $newData = array_filter($data, fn($item) => $item['id'] != $id);
        if (count($data) == count($newData)) {
            echo json_encode(['message' => 'User not found']);
        } else {
            writeData($dataFile, array_values($newData));
            echo json_encode(['message' => 'User deleted']);
        }
        break;

    default:
        echo json_encode(['message' => 'Method not allowed']);
        break;
}
