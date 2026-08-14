<?php

header('Content-Type: application/json; charset=utf-8');

$method = $_SERVER['REQUEST_METHOD'];

$handlers = [
    'GET' => __DIR__ . '/api/books-get.php',
    'POST' => __DIR__ . '/api/books-create.php',
    'PUT' => __DIR__ . '/api/books-update.php',
    'DELETE' => __DIR__ . '/api/books-delete.php'
];

if (!isset($handlers[$method])) {
    http_response_code(405);
    header('Allow: GET, POST, PUT, DELETE');
    echo json_encode(['error' => 'Method Not Allowed']);
    exit;
}
require $handlers[$method];