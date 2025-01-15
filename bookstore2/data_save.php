<?php
include("database_connect.php");

if (isset($_POST['create'])) {
    $title = mysqli_real_escape_string($con, $_POST['title']);
    $author = mysqli_real_escape_string($con, $_POST['author']);
    $genre = mysqli_real_escape_string($con, $_POST['genre']);
    $desc = mysqli_real_escape_string($con, $_POST['description']);

    $query = "INSERT INTO books (Title, Author, Genre, Description) VALUES ('$title', '$author', '$genre', '$desc')";
    if (mysqli_query($con, $query)) {
        echo "Data inserted successfully";
    } else {
        echo "Error: " . mysqli_error($con);
    }
}

if (isset($_POST['edit'])) {
    $id = mysqli_real_escape_string($con, $_POST['id']);
    $title = mysqli_real_escape_string($con, $_POST['title']);
    $author = mysqli_real_escape_string($con, $_POST['author']);
    $genre = mysqli_real_escape_string($con, $_POST['genre']);
    $desc = mysqli_real_escape_string($con, $_POST['description']);

    $query = "UPDATE books SET Title='$title', Author='$author', Genre='$genre', Description='$desc' WHERE id='$id'";
    if (mysqli_query($con, $query)) {
        echo "Data updated successfully";
    } else {
        echo "Error: " . mysqli_error($con);
    }
}

if (isset($_POST['phone'])) {
    $uname = mysqli_real_escape_string($con, $_POST['name']);
    $uemail = mysqli_real_escape_string($con, $_POST['email']);
    $uphone = mysqli_real_escape_string($con, $_POST['phone']);
    $upassword = password_hash(mysqli_real_escape_string($con, $_POST['password']), PASSWORD_BCRYPT);

    $query = "INSERT INTO users (full_name, email, phone, password) VALUES ('$uname', '$uemail', '$uphone', '$upassword')";
    if (mysqli_query($con, $query)) {
        echo "User data inserted successfully";
    } else {
        echo "Error: " . mysqli_error($con);
    }

    // Check if the user exists
    $query = "SELECT * FROM users WHERE email = ?";
    $stmt = $con->prepare($query);
    $stmt->bind_param("s", $uemail);
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();

    if ($user && password_verify($_POST['password'], $user['password'])) {
        session_start();
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['email'] = $user['email'];
        $_SESSION['is_admin'] = $user['is_admin'];

        if ($user['is_admin']) {
            header('Location: admin-dashboard.php');
        } else {
            header('Location: user-dashboard.php');
        }
        exit();
    } else {
        echo "Invalid credentials.";
    }
}
?>
