<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <style>
        .parentContainer {
            font-family: Arial;
            font-size: 24px;
            margin: 25px;
            width: 350px;
            height: 200px;
            outline: dashed 1px black;
        }
    </style>
</head>
<body>
    <center>
        <div class='parentContainer'>
            <form action="#" method='POST'>
                <label for="username">Username</label>
                <input type="text" name="username" id="uname"><br>
                <label for="password">Password</label>
                <input type="password" name="password" id="pwd"><br>
                <input type="submit" value="Login">
            </form>
        </div>
    </center>
</body>
</html>

<?php
// Database connection
$servername = "localhost";
$user = "root";
$password = "";
$dbname = "myWebsite";

// Start session
session_start();

// Create a connection to the database
$con = mysqli_connect($servername, $user, $password, $dbname);

if ($con->connect_errno) {
    die("Connection failed: " . mysqli_connect_errno());
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $uname = $_POST['username'];
    $pwd = $_POST['password'];

    // Query to check username and password
    $sql = "SELECT * FROM users WHERE username='" . $uname . "' AND password='" . $pwd . "' ";
    $result = mysqli_query($con, $sql);

    // Check if the query was successful and if there's a row
    if ($result && mysqli_num_rows($result) > 0) {
        $_SESSION["username"] = $uname;
        header("location: welcome.php");
    } else {
        echo "Invalid username or password.";
    }
}
?>