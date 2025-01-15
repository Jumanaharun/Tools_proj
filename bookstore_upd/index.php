<?php
include 'database_connect.php';
session_start();

// Fetch books from the database
$books_query = "SELECT * FROM `books` ORDER BY id DESC";
$books_result = mysqli_query($con, $books_query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Online Bookstore</title>

    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <nav>
        <div class="container nav__container">
            <h1 class="nav__logo">The Book Buffet</h1>
            <ul class="nav__items">
                <li><a href="index.php">Home</a></li>
                <li><a href="shop.php">Catalogue</a></li>
                <li><a href="cart.php">Cart</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
                <div class="nav__sign-in" style="display: block;"><li><a href="login.php">Log in</a></li></div>
                <li class="nav__profile" style="display: none;">
                    <div class="user__profile">
                        <img src="images/profile1.png">
                    </div>
                    <ul>
                        <li><a href="dashboard.php">Dashboard</a></li>
                        <li><a href="logout.php">Log out</a></li>
                    </ul>
                </li>
            </ul>
            <button id="open__nav-btn"></button>
            <button id="close__nav-btn"></button>
        </div>
    </nav>

    <div class="main">
        <div class="main_tag">
            <h1>Welcome to<br><span>BookStore</span></h1>
            <p>
                Discover the latest books and your favorite classics!
            </p>
        </div>
        
        <div class="books-section">
            <h2>Latest Products</h2>
            <div class="books-container">
                <?php
                if(mysqli_num_rows($books_result) > 0) {
                    while($book = mysqli_fetch_assoc($books_result)) {
                        echo '
                        <div class="book-item">
                            <img src="uploads/'.$book['cover_photo'].'" alt="'.$book['title'].'">
                            <h3>'.$book['title'].'</h3>
                            <p>'.$book['details'].'</p>
                            <span>$'.$book['price'].'</span>
                            <button class="btn">Add to Cart</button>
                        </div>
                        ';
                    }
                } else {
                    echo '<p>No books available at the moment.</p>';
                }
                ?>
            </div>
        </div>
    </div>

</body>
</html>

<script>
    const isLoggedIn = <?php echo isset($_SESSION['user_id']) ? 'true' : 'false'; ?>;
    const isAdmin = <?php echo isset($_SESSION['is_admin']) && $_SESSION['is_admin'] ? 'true' : 'false'; ?>;

    document.addEventListener('DOMContentLoaded', () => {
        const signinElement = document.querySelector('.nav__sign-in');
        const profileElement = document.querySelector('.nav__profile');
        if (isLoggedIn) {
            signinElement.style.display = 'none';
            profileElement.style.display = 'block';
        } else {
            signinElement.style.display = 'block';
            profileElement.style.display = 'none';
        }
    });
</script>
