<?php

header('Content-Type: application/json');

$data = [
    'message' => 'Hello, World!',
    'status' => 'ok',
    'data' => [
        'id' => 1,
        'name' => 'John Doe'
    ]
];
echo json_encode($data);