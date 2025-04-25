<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
require_once '../../config/database.php';

try {
    $database = new Database();
    $conn = $database->getConnection();

    $query = "SELECT f.*, t.name as town_name 
              FROM festivals f
              LEFT JOIN towns t ON f.town_id = t.town_id
              ORDER BY f.festival_date DESC";
    $stmt = $conn->prepare($query);
    $stmt->execute();

    $festivals = [];
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $festivals[] = $row;
    }

    echo json_encode(['records' => $festivals]);
} catch(Exception $e) {
    http_response_code(500);
    echo json_encode(['message' => $e->getMessage()]);
}
?>