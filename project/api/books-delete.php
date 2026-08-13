<?php
header('Content-Type: application/json');

$pdo = require __DIR__ . '/../config/db.php';

if ($_SERVER['REQUEST_METHOD'] === 'DELETE') {
    $input = [];
    parse_str(file_get_contents('php://input'), $input);

    $id = $input['id'] ?? null;

    if (!$id) {
        http_response_code(404);
        echo json_encode(['error' => 'Missing required field: id']);
        exit;
    }

    $sql = 'DELETE FROM books WHERE id = :id';
    $stmt = $pdo->prepare($sql);
    $stmt->execute([':id' => $id]);

    http_response_code(200);
    echo json_encode(['success' => 'Book deleted successfully']);
} else {
    http_response_code(405);
    echo json_encode(['error' => 'Method not allowed']);
}