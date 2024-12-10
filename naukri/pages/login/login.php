<?php
session_start();
include "../../config/db.php";
if (isset($_POST['email']) && isset($_POST['password'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    if (empty($email) || empty($password)) {
        echo "Please fill the form completely.";
        exit();
    }
    $stmt = $con->prepare("SELECT * FROM `USERS` WHERE Email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        if ($password == $user['password']) {
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_email'] = $user['email'];
            echo "success"; 
        } else {
            echo "wrong_password";
        }
    } else {
        echo "wrong_email";
    }
}
?>
