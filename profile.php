<?php
session_start();

// Redirect if not logged in
if (!isset($_SESSION['google_loggedin']) || $_SESSION['google_loggedin'] !== true) {
    header('Location: login.php');
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Google Profile</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 30px;
            background-color: #f7f7f7;
        }
        .profile-box {
            background: #fff;
            padding: 25px;
            max-width: 400px;
            margin: auto;
            border-radius: 10px;
            box-shadow: 0 0 10px #ccc;
            text-align: center;
        }
        img {
            border-radius: 50%;
            margin-bottom: 15px;
        }
    </style>
</head>
<body>
    <div class="profile-box">
        <h2>Welcome, <?php echo htmlspecialchars($_SESSION['google_name']); ?>!</h2>
        <img src="<?php echo htmlspecialchars($_SESSION['google_picture']); ?>" alt="Profile Picture" width="100" height="100">
        <p><strong>Email:</strong> <?php echo htmlspecialchars($_SESSION['google_email']); ?></p>
        <a href="logout.php">Logout</a>
    </div>
</body>
</html>
