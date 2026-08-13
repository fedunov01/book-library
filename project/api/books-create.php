<?php

$pdo = require __DIR__ . '/../config/db.php';

header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'] ?? null;
    $author = $_POST['author'] ?? null;
    $title = $_POST['title'] ?? null;
    $year = $_POST['year'] ?? null;
    $genre = $_POST['genre'] ?? null;

    if (!$author || !$title || !$year || !$genre) {
        http_response_code(400);
        echo json_encode(['error' => 'Missing required fields']);
        exit;
    }

    $sql = 'INSERT INTO books (id, author, title, year, genre) VALUES (:id, :author, :title, :year, :genre)';

    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        ':id' => $id,
        ':author' => $author,
        ':title' => $title,
        ':year' => $year,
        ':genre' => $genre
    ]);
    http_response_code(201);
    echo json_encode(['success' => 'Book added successfully']);
} else {
    http_response_code(405);
    echo json_encode(['error' => 'Method not allowed']);
}