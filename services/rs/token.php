<?php

require_once __DIR__ . '/../../db/connect.php';
// Set the response content type to JSON
header('Content-Type: application/json');

$headers = getallheaders();

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $connection = connectToDatabase();

    $username = $headers['x-username'] ?? null;
    $password = $headers['x-password'] ?? null;

    // Example SELECT query
    $sql = "SELECT * FROM users WHERE username = :username";
    $params = [':username' => $username];

    $result = executeQuery($connection, $sql, $params);

    if ($result) {
        $row = $result->fetch(PDO::FETCH_ASSOC);

        // Verify the password
        if (!password_verify($password, $row['password'])) {
            // Authentication failed
            echo json_encode(["metadata" => ["message" => "Username atau Password tidak sesuai", "code" => 201]]);
            exit;
        }

        $apiToken = md5(uniqid(rand(), true));

        // Update the user's API token in the database
        $sql = "UPDATE users SET api_token = :api_token, token_expired_at = :token_expired_at WHERE id = :id";
        $params = [
            ':api_token' => $apiToken,
            ':token_expired_at' => time() + 300,
            ':id' => $row['id'],
        ];

        $result = executeQuery($connection, $sql, $params);

        $response = [
            "response" => [
                "token" => $apiToken
            ],
            "metadata" => [
                "message" => "Ok",
                "code" => 200
            ]
        ];

        // Send the JSON response
        echo json_encode($response);
        exit;
    } else {
        // Authentication failed
        echo json_encode(["metadata" => ["message" => "Username atau Password tidak sesuai", "code" => 201]]);
        exit;
    }
} else {
    // Unsupported method
    http_response_code(405); // Method Not Allowed
    echo json_encode(["metadata" => ["message" => "Method not allowed", "code" => 405]]);
    exit;
}
