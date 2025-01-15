session_start();
if ($_SESSION['role'] !== 'user') {
    header('Location: admin-dashboard.php');
    exit;
}

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--s1-->
    <title>Responsive Online Bookstore</title>

    <!-- s2) stylesheet -->
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <?php
session_start();
?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Bookstore</a>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <?php if ($_SESSION['role'] === 'admin'): ?>
                <li class="nav-item"><a class="nav-link" href="admin-dashboard.php">Admin Dashboard</a></li>
            <?php else: ?>
                <li class="nav-item"><a class="nav-link" href="shop.php">Shop</a></li>
            <?php endif; ?>
        </ul>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown">
                    <?php echo $_SESSION['email']; ?>
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="profile.php">Profile</a>
                    <?php if ($_SESSION['role'] === 'admin'): ?>
                        <a class="dropdown-item" href="admin-dashboard.php">Dashboard</a>
                    <?php else: ?>
                        <a class="dropdown-item" href="cart.php">My Cart</a>
                    <?php endif; ?>
                    <a class="dropdown-item" href="logout.php">Logout</a>
                </div>
            </li>
        </ul>
    </div>
</nav>


    <div class="main">
        <div class="main_tag">
            <h1>Welcome to<br><span>BookStore</span></h1>
            <p>
                Case Closed, also known as Detective Conan, is a Japanese detective manga series written and illustrated by Gosho Aoyama. It has been serialized in Shogakukan's shōnen manga magazine Weekly Shōnen Sunday since January 1994; its chapters are collected in 106 tankōbon volumes as of October 2024.
            </p>

        </div>
    
    </div>

</body>
</html>

<script>
    // Simulate a user login status for demonstration purposes (use backend logic for real-world use)
    const isLoggedIn = <?php echo isset($_SESSION['user_id']) ? 'true' : 'false'; ?>;
    const isAdmin = <?php echo isset($_SESSION['is_admin']) && $_SESSION['is_admin'] ? 'true' : 'false'; ?>;

    document.addEventListener('DOMContentLoaded', () => {
        // Select elements
        const signinElement = document.querySelector('.nav__signin');
        const profileElement = document.querySelector('.nav__profile');
        const adminPanelElement = document.querySelector('.nav__admin-panel');

        // Toggle visibility based on login state and role
        if (isLoggedIn) {
            signinElement.style.display = 'none';
            profileElement.style.display = 'block';
            if (isAdmin) {
                adminPanelElement.style.display = 'block'; // Show Admin Panel link
            } else {
                adminPanelElement.style.display = 'none'; // Hide Admin Panel link
            }
        } else {
            signinElement.style.display = 'block';
            profileElement.style.display = 'none';
            adminPanelElement.style.display = 'none';
        }
    });
</script>



<!--s4-->
<!--<a href="https://iconscout.com/icons/menu" class="text-underline font-size-sm" target="_blank">Menu</a> by <a href="https://iconscout.com/contributors/eva-icons" class="text-underline font-size-sm" target="_blank">Akveo</a>-->