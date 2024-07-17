<?php
header('Content-Type: application/json');
    include 'dbcon.php';
$data = json_decode(file_get_contents('php://input'), true);

if (isset($data['username']) && isset($data['message'])) {
    $username = htmlspecialchars($data['username']);
    $message = htmlspecialchars($data['message']);

    // $conn = new mysqli('localhost', 'root', '', 'chat_db');
    if ($conn->connect_error) {
        die(json_encode(['success' => false, 'error' => 'Database connection failed.']));
    }

    $stmt = $conn->prepare('INSERT INTO messages (username, message) VALUES (?, ?)');
    $stmt->bind_param('ss', $username, $message);
    $stmt->execute();
    $stmt->close();
    $conn->close();

    echo json_encode(['success' => true]);
} else {
    echo json_encode(['success' => false, 'error' => 'Invalid input.']);
}
?>
