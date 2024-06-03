<?php
session_start();

// Security check
if (!isset($_SESSION["username"])) {
    header("location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
</head>
<body>
    <h1>Welcome to my page</h1>
    <h1>Welcome <?php echo $_SESSION["username"]; ?></h1>
    <br>
    <button><a href='logout.php'>Logout</a></button>
</body>
</html>
