<?php
include "db.php"; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT); 


    $checkUser = $conn->prepare("SELECT id FROM users WHERE username = ? OR email = ?");
    $checkUser->bind_param("ss", $username, $email);
    $checkUser->execute();
    $checkUser->store_result();

    if ($checkUser->num_rows > 0) {
        echo "Username or email already taken!";
    } else {
        // Insert new user
        $stmt = $conn->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $username, $email, $password);

        if ($stmt->execute()) {
            echo "Registration successful! Redirecting to login...";
            header("refresh:2;url=login.html");
        } else {
            echo "Error: " . $stmt->error;
        }
    }

    $checkUser->close();
    $stmt->close();
    $conn->close();
}
?>
