<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
      <link rel="stylesheet" type="text/css" href="demo.css">
</head>
<body>
<?php
session_start();
if (isset($_SESSION['username'])) {
    header("Location: index.php");
    exit();
}
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "property";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        header("Location: index.php");
        exit();
    } else{
        $error_message = "Invalid username or password";
    }
}
$conn->close();
?>
    <div class="p1">
        <nav>
            <div class="logo">
                <p>DREAM P</p>
            </div>
            <!--
            <div class="but">
                <button class="but1" onclick="document.location='login.php'">login</button>
                <button class="but1" onclick="document.location='signup.php'">signup</button>
            </div>-->
            <ul>
                <li><a href="index.php">Home</a></li> 
                <li><a href="property.php">Property</a></li>
                <li><a href="contact.php">Contact Us</a></li>
                <li><a href="about.php">About Us</a></li>
            </ul>
        </nav>
        <div class="p2">
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <h1>LOGIN</h1>
                <?php if (isset($error_message)): ?>
                <p><?php echo $error_message; ?></p>
            <?php endif; ?>
                <input type="text" class="label" placeholder="Username" name="username" required>
                <input type="password" class="label" placeholder="Password" name="password" required>
                <p><a href="#">Forgot your password?</a></p>
                <p><input type="checkbox" name="checkbox">Remember me</p>
                <p><button type="submit" name="submit">Login</button>
               <button><a href="signup.php">Sign Up</a></button></p>
            </form>
        </div>
    </div>
</body>
</html>