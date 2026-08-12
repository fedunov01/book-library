<?php

header('Content-Type: application/json');

$dsn = 'mysql:host=127.0.0.1;port=3307;dbname=training';

$username = 'root';
$password = 'tiger';

$pdo = new PDO($dsn, $username, $password, [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
]);

$stmt = $pdo->prepare('SELECT * FROM books');
$stmt->execute();
$book = $stmt->fetchAll();
if (!$book) {
    echo json_encode(['error' => 'No book found']);
    exit;
}
echo json_encode($book);