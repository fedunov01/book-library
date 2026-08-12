<?php

header('Content-Type: application/json');

$dsn = 'mysql:host=127.0.0.1;port=3307;dbname=training';

$username = 'root';
$password = 'tiger';

$pdo = new PDO($dsn, $username, $password, [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
]);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $author = $_POST['author'] ?? null;
    $title = $_POST['title'] ?? null;
    $year = $_POST['year'] ?? null;

    if (!$author || !$title || !$year) {
        http_response_code(400);
        echo json_encode(['error' => 'Missing required fields']);
        exit;
    }

    $sql = 'INSERT INTO books (author, title, year) VALUES (:author, :title, :year)';

    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        ':author' => $author,
        ':title' => $title,
        ':year' => $year
    ]);
    http_response_code(201);
    echo json_encode(['success' => 'Book added successfully']);
}