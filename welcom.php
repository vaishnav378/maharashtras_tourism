<?php
session_start();

// Check if the user is not logged in, redirect to index.php
if (!isset($_SESSION['user'])) {
    header("Location: index.php");
    exit();
}

// If the user clicks on "Logout," clear the session and redirect to index.php
if (isset($_POST['logout'])) {
    session_destroy();
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Welcome Page</title>
</head>

<body>
    <h2>Welcome, <?php echo $_SESSION['user']; ?>!</h2>
    <form method="post">
        <input type="submit" name="logout" value="Logout">
    </form>
</body>

</html>
