<?php
session_start();
include("database_connect.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Query to check if the user exists
    $query = "SELECT * FROM users WHERE email = ?";
    $stmt = $con->prepare($query);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();

    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['email'] = $user['email'];
        $_SESSION['user_type'] = $user['user_type'];

        if ($user['user_type'] === 'admin') {
            header('Location: index.php'); // Redirect to admin homepage
        } else {
            header('Location: index.php'); // Redirect to user homepage
        }
        exit;
    } else {
        echo "<p align='center'>Invalid credentials. Please try again.</p>";
    }
}
?>
