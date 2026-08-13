<?php

$pdo = require __DIR__ . '/../config/db.php';

header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    if (isset($_GET['id'])) {
        $id = (int) $_GET['id'];

        $stmt = $pdo->prepare('SELECT * FROM books WHERE id = :id');
        $stmt->execute(['id' => $id]);

        $book = $stmt->fetch();

        if (!$book) {
            http_response_code(404);

            echo json_encode(['error' => 'Book not found']);
            exit;
        }

    } else {

        $stmt = $pdo->prepare('SELECT * FROM books');
        $stmt->execute();
        $book = $stmt->fetchAll();
            if (!$book) {
                http_response_code(404);

                echo json_encode(['error' => 'No book found']);
                exit;
            }
        }
    http_response_code(200);
    echo json_encode($book);
} else {
    http_response_code(405);
    echo json_encode(['error' => 'Method not allowed']);
}