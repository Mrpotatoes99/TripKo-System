<?php
session_start();
if (!isset($_SESSION["user_id"])) {
    header("Location: SignUp_LogIn_Form.html");
    exit();
}
?>
