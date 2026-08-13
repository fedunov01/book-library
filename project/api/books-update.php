<?php

header('Content-Type: application/json');

$pdo = require __DIR__ . '/../config/db.php';

if ($_SERVER['REQUEST_METHOD'] === 'PUT') {
    $input = [];
    parse_str(file_get_contents('php://input'), $input);

    $id = $input['id'] ?? null;
    $author = $input['author'] ?? null;
    $title = $input['title'] ?? null;
    $year = $input['year'] ?? null;
    $genre = $input['genre'] ?? null;

    if (!$id || !$author || !$title || !$year || !$genre) {
        http_response_code(400);
        echo json_encode(['error' => 'Missing required fields']);
        exit;
    }

    $sql = 'UPDATE books SET author = :author, title = :title, year = :year, genre = :genre WHERE id = :id';

    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        ':id' => $id,
        ':author' => $author,
        ':title' => $title,
        ':year' => $year,
        ':genre' => $genre
    ]);

    http_response_code(200);
    echo json_encode(['success' => 'Book updated successfully']);
} else {
    http_response_code(405);
    echo json_encode(['error' => 'Method not allowed']);
}