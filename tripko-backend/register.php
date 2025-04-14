<?php
include "db.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
    $user_type_id = 2; // Example: 2 = Regular user/tourist

    // Check if username exists
    $check = $conn->prepare("SELECT * FROM user WHERE username = ?");
    $check->bind_param("s", $username);
    $check->execute();
    $check->store_result();

    if ($check->num_rows > 0) {
        echo "<script>alert('Username already taken!'); window.history.back();</script>";
    } else {
        $stmt = $conn->prepare("INSERT INTO user (username, password, user_type_id) VALUES (?, ?, ?)");
        $stmt->bind_param("ssi", $username, $password, $user_type_id);
        if ($stmt->execute()) {
            echo "<script>alert('Registration successful! Please log in.'); window.location.href='SignUp_LogIn_Form.html';</script>";
        } else {
            echo "<script>alert('Error during registration.'); window.history.back();</script>";
        }
        $stmt->close();
    }

    $check->close();
    $conn->close();
}
?>
