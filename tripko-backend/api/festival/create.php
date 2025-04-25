<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

require_once '../../config/database.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $festival_name = $_POST['festival-name'];
    $description = $_POST['festival-description'];
    $festival_date = $_POST['festival-date'];
    $town_id = $_POST['municipality'];

    // Handle image upload (optional, basic example)
    $image_path = '';
    if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
        $uploadDir = '../../uploads/';
        $filename = time() . '_' . basename($_FILES['image']['name']);
        $targetFile = $uploadDir . $filename;
        if (move_uploaded_file($_FILES['image']['tmp_name'], $targetFile)) {
            $image_path = $filename;
        }
    }

    $database = new Database();
    $conn = $database->getConnection();

    $sql = "INSERT INTO festivals (festival_name, description, festival_date, town_id, image_path)
            VALUES (?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$festival_name, $description, $festival_date, $town_id, $image_path]);

    echo json_encode(['success' => true]);
    exit;
}
echo json_encode(['success' => false, 'message' => 'Invalid request']);
?>