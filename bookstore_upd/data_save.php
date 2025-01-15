<?php

include("database_connect.php");

if(isset($_POST['create']))
{
	$title = $_POST['title'];
	$author = $_POST['author'];
	$genre = $_POST['genre'];
	$desc = $_POST['description'];

	mysqli_query($con,"INSERT INTO books (Title, Author, Genre, Description) values ('$title', '$author', '$genre', '$desc' )") ;
	echo "Data inserted successfully";
}

if(isset($_POST['edit']))
{
	$title = $_POST['title'];
	$author = $_POST['author'];
	$genre = $_POST['genre'];
	$desc = $_POST['description'];

	mysqli_query($con,"UPDATE books (Title, Author, Genre, Description) values ('$title', '$author', '$genre', '$desc' )") ;
	echo "Data inserted successfully";
}

if(isset($_POST['phone']))
{
	$uname = $_POST['name'];
	$uemail = $_POST['email'];
	$uphone = $_POST['phone'];
	$upassword = $_POST['password'];

	mysqli_query($con,"INSERT INTO users (full_name, email, phone, password) values ('$uname', '$uemail', '$uphone', '$upassword' )") ;
	echo "Data inserted successfully";

	// Check if the user exists
$query = "SELECT * FROM users WHERE email = ?";
$stmt = $conn->prepare($query);
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();
$user = $result->fetch_assoc();

if ($user && password_verify($password, $user['password'])) {
    $_SESSION['user_id'] = $user['id'];
    $_SESSION['email'] = $user['email'];
    $_SESSION['is_admin'] = $user['is_admin']; // Store if the user is admin

    if ($user['is_admin']) {
        header('Location: index.php'); // Redirect to admin page
    } else {
        header('Location: index.php'); // Redirect to user page
    }
} else {
    echo "Invalid credentials.";
}
}


?>